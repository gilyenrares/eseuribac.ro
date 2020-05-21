<?php
if (isset($_POST['new-subcat-submit'])) {
  session_start();
  require 'dbh.inc.php';
  $catId = $_POST['catId'];
  $subcatName= $_POST['subcatName'];
  $subcatDescription= $_POST['subcatDescription'];

  //Method that checks empty fields and returns the admin to  upload form with the valid info autofilled
  if (empty($subcatName) || empty($subcatDescription)) {
    $_SESSION['tempCatId'] = $catId;
    $_SESSION['tempSubcatName'] = $subcatName;
    $_SESSION['tempSubcatDescription'] = $subcatDescription;
    $_SESSION['activityStatus'] = 'Subcategorie Nouă ...<br> Toate câmpurile sunt obligatorii!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the catName exists in the database
  else {
    //SQL variable that runs an SQL statement to check the catName
    $sql = "SELECT subcategoryName FROM subcategory WHERE subcategoryName=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $_SESSION['tempCatId'] = $catId;
      $_SESSION['tempSubcatName'] = $subcatName;
      $_SESSION['tempSubcatDescription'] = $subcatDescription;
      $_SESSION['activityStatus'] = 'Subcategorie Nouă ...<br> A apărut o eroare de conexiune!';
      header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      exit();
    }
    //Method that retrieves the catName filled by the admin checks for duplicity with the database
    else {
      mysqli_stmt_bind_param($stmt,"s",$subcatName);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        $_SESSION['tempCatId'] = $catId;
        $_SESSION['tempSubcatName'] = $subcatName;
        $_SESSION['tempSubcatDescription'] = $subcatDescription;
        $_SESSION['activityStatus'] = 'Subcategorie Nouă ...<br> Numele subcategoriei este luat deja!';
        header("Location: ..".$_SESSION['currentSessionUrl'.""]);
        exit();
      } 
      //SQL variable that runs an SQL statement to insert data into the database
      else {
      $sql = "INSERT INTO subcategory (categoryId, subcategoryName, subcategoryDescription) VALUES(?, ?, ?);";

      //Prepare statement initialization
      $stmt = mysqli_stmt_init($conn);

        //Method that check if the sql statement can run inside the database without error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          $_SESSION['tempCatId'] = $catId;
          $_SESSION['tempSubcatName'] = $subcatName;
          $_SESSION['tempSubcatDescription'] = $subcatDescription;
          $_SESSION['activityStatus'] = 'Subcategorie Nouă ...<br> A apărut o eroare de *conexiune!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        //Method that retrieves the input from admin and uploads it to the database
        else {
          mysqli_stmt_bind_param($stmt,"sss",$catId , $subcatName, $subcatDescription);
          mysqli_stmt_execute($stmt);
          unset($_SESSION['tempCatId']);
          unset($_SESSION['tempSubcatName']);
          unset($_SESSION['tempSubcatDescription']);
          $_SESSION['activityStatus'] = 'Subcategorie Nouă creată cu succes!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
      }
    }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
  }
}
else {
  $_SESSION['activityStatus'] = 'Hey ...Hmm. <br>I see you =) trying :))';
  header("Location: ..".$_SESSION['currentSessionUrl'.""]);
  exit();
}
