<?php
if (isset($_POST['new-cat-submit'])) {
  session_start();
  require 'dbh.inc.php';
  $catName= $_POST['catName'];
  $catDescription= $_POST['catDescription'];
  $rank = $_SESSION['accType']; 
  $const='Admin';
  if (!($rank === $const)) {
    $_SESSION['activityStatus'] = 'Acces interzis!<br> Contul tău nu are nivelul de autorizație necesar!';
    header('Location: index.php');
    exit();
  }

  //Method that checks empty fields and returns the admin to  upload form with the valid info autofilled
  if (empty($catName) || empty($catDescription)) {
    $_SESSION['tempCatName'] = $catName;
    $_SESSION['tempCatDescription'] = $catDescription;
    $_SESSION['activityStatus'] = 'Categorie Nouă ...<br> Toate câmpurile sunt obligatorii!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  //Method that checks if the catName exists in the database
  else {
    //SQL variable that runs an SQL statement to check the catName
    $sql = "SELECT catName FROM categories WHERE catName=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $_SESSION['tempCatName'] = $catName;
      $_SESSION['tempCatDescription'] = $catDescription;
      $_SESSION['activityStatus'] = 'Categorie Nouă ...<br> A apărut o eroare de conexiune!';
      header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      exit();
    }
    //Method that retrieves the catName filled by the admin checks for duplicity with the database
    else {
      mysqli_stmt_bind_param($stmt,"s",$catName);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        $_SESSION['tempCatName'] = $catName;
        $_SESSION['tempCatDescription'] = $catDescription;
        $_SESSION['activityStatus'] = 'Categorie Nouă ...<br> Numele categoriei este luat deja!';
        header("Location: ..".$_SESSION['currentSessionUrl'.""]);
        exit();
      } 
      //SQL variable that runs an SQL statement to insert data into the database
      else {
      $sql = "INSERT INTO categories (catName, catDescription) VALUES(?, ?);";

      //Prepare statement initialization
      $stmt = mysqli_stmt_init($conn);

        //Method that check if the sql statement can run inside the database without error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          $_SESSION['tempCatName'] = $catName;
          $_SESSION['tempCatDescription'] = $catDescription;
          $_SESSION['activityStatus'] = 'Categorie Nouă ...<br>A apărut o eroare de *conexiune!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        //Method that retrieves the input from admin and uploads it to the database
        else {
          mysqli_stmt_bind_param($stmt,"ss", $catName, $catDescription);
          mysqli_stmt_execute($stmt);
          unset($_SESSION['tempCatName']);
          unset($_SESSION['tempCatDescription']);
          $_SESSION['activityStatus'] = 'Categorie Nouă creată cu succes!';
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
