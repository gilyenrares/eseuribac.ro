<?php
if (isset($_POST['new-topic-submit'])) {
  session_start();
  require 'dbh.inc.php';
  $author = $_SESSION['userId'];
  $catId = $_POST['catId'];
  $subcatId = $_POST['subcatId'];
  $topicName= $_POST['topicName'];
  $topicDescription= $_POST['topicDescription'];

  //Method that checks empty fields and returns the admin to  upload form with the valid info autofilled
  if (empty($topicName) || empty($topicDescription)) {
    $_SESSION['tempCatId'] = $catId;
    $_SESSION['tempSubcatId'] = $subcatId;
    $_SESSION['tempTopicName'] = $topicName;
    $_SESSION['tempTopicDescription'] = $topicDescription;
    $_SESSION['activityStatus'] = 'Topic nou ...<br> Toate câmpurile sunt obligatorii!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
   elseif (!preg_match("/^[a-zA-Z0-9\s!?().,:;]*$/",$topicName)) {
    $_SESSION['tempCatId'] = $catId;
    $_SESSION['tempSubcatId'] = $subcatId;
    $_SESSION['tempTopicName'] = $topicName;
    $_SESSION['tempTopicDescription'] = $topicDescription;
    $_SESSION['activityStatus'] = 'Topic nou ...<br> numele topicului este invalid!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
  }
  elseif (!preg_match("/^[a-zA-Z0-9\s!?().,:;]*$/",$topicDescription)) {
    $_SESSION['tempCatId'] = $catId;
    $_SESSION['tempSubcatId'] = $subcatId;
    $_SESSION['tempTopicName'] = $topicName;
    $_SESSION['tempTopicDescription'] = $topicDescription;
    $_SESSION['activityStatus'] = 'Topic nou ...<br> descrierea topicului este invalidă!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
  }
  //Method that checks if the catName exists in the database
  else {
    //SQL variable that runs an SQL statement to check the catName
    $sql = "SELECT * FROM topics WHERE topicName=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $_SESSION['tempCatId'] = $catId;
      $_SESSION['tempSubcatId'] = $subcatId;
      $_SESSION['tempTopicName'] = $topicName;
      $_SESSION['tempTopicDescription'] = $topicDescription;
      $_SESSION['activityStatus'] = 'Topic nou ...<br> A apărut o eroare de conexiune!';
      header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      exit();
    }
    //Method that retrieves the catName filled by the admin checks for duplicity with the database
    else {
      mysqli_stmt_bind_param($stmt,"s",$topicName);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        $_SESSION['tempCatId'] = $catId;
        $_SESSION['tempSubcatId'] = $subcatId;
        $_SESSION['tempTopicName'] = $topicName;
        $_SESSION['tempTopicDescription'] = $topicDescription;
        $_SESSION['activityStatus'] = 'Topic nou ...<br> Numele topicului este luat deja!';
        header("Location: ..".$_SESSION['currentSessionUrl'.""]);
        exit();
      } 
      //SQL variable that runs an SQL statement to insert data into the database
      else {
      $sql = "INSERT INTO topics (topicName, topicDescription, topicCat, topicSubcategory, topicAuthor) VALUES(?, ?, ?, ?, ?);";

      //Prepare statement initialization
      $stmt = mysqli_stmt_init($conn);

        //Method that check if the sql statement can run inside the database without error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          $_SESSION['tempCatId'] = $catId;
          $_SESSION['tempSubcatId'] = $subcatId;
          $_SESSION['tempTopicName'] = $topicName;
          $_SESSION['tempTopicDescription'] = $topicDescription;
          $_SESSION['activityStatus'] = 'Topic nou ...<br> A apărut o eroare de *conexiune!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        //Method that retrieves the input from admin and uploads it to the database
        else {
          mysqli_stmt_bind_param($stmt,"sssss",$topicName, $topicDescription, $catId, $subcatId, $author);
          mysqli_stmt_execute($stmt);
          unset($_SESSION['tempCatId']);
          unset($_SESSION['tempSubcatId']);
          unset($_SESSION['tempTopicName']);
          unset($_SESSION['tempTopicDescription']);
          $_SESSION['activityStatus'] = 'Topic nou creat cu succes!';
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
