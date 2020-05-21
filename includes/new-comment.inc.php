<?php
if (isset($_POST['new-comment-submit'])) {
  session_start();
  require 'dbh.inc.php';
  $author = $_SESSION['userId'];
  $topicId = $_POST['topicId'];
  $comment = $_POST['comment'];

  //Method that checks empty fields and returns the admin to  upload form with the valid info autofilled
  if (empty($comment)) {
    $_SESSION['tempTopicId'] = $topicId;
    $_SESSION['tempComment'] = $comment;
    $_SESSION['activityStatus'] = 'Comentariul nou ...<br> Toate câmpurile sunt obligatorii!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
    exit();
  }
  elseif (!preg_match("/^[a-zA-Z0-9\s!?().,:;]*$/",$comment)) {
    $_SESSION['tempTopicId'] = $topicId;
    $_SESSION['tempComment'] = $comment;
    $_SESSION['activityStatus'] = 'Comentariul nou ...<br> Comentariul conține caractere interzise!';
    header("Location: ..".$_SESSION['currentSessionUrl'.""]);
  }
  //Method that checks if the catName exists in the database
  else {
    //SQL variable that runs an SQL statement to check the catName
    $sql = "SELECT * FROM comments WHERE commentTopic=? AND commentAuthor=? AND commentContent=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      $_SESSION['tempTopicId'] = $topicId;
      $_SESSION['tempComment'] = $comment;
      $_SESSION['activityStatus'] = 'Comentariul nou ...<br> A apărut o eroare de conexiune!';
      header("Location: ..".$_SESSION['currentSessionUrl'.""]);
      exit();
    }
    //Method that retrieves the catName filled by the admin checks for duplicity with the database
    else {
      mysqli_stmt_bind_param($stmt,"sss", $topicId, $author, $comment);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        $_SESSION['tempTopicId'] = $topicId;
        $_SESSION['tempComment'] = $comment;
        $_SESSION['activityStatus'] = 'Comentariul nou ...<br>Ai comentat acest lucru deja!';
        header("Location: ..".$_SESSION['currentSessionUrl'.""]);
        exit();
      } 
      //SQL variable that runs an SQL statement to insert data into the database
      else {
      $sql = "INSERT INTO comments (commentContent, commentTopic, commentAuthor) VALUES(?, ?, ?);";

      //Prepare statement initialization
      $stmt = mysqli_stmt_init($conn);

        //Method that check if the sql statement can run inside the database without error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          $_SESSION['tempTopicId'] = $topicId;
          $_SESSION['tempComment'] = $comment;
          $_SESSION['activityStatus'] = 'Comentariul nou ...<br> A apărut o eroare de *conexiune!';
          header("Location: ..".$_SESSION['currentSessionUrl'.""]);
          exit();
        }
        //Method that retrieves the input from admin and uploads it to the database
        else {
          mysqli_stmt_bind_param($stmt,"sss",$comment, $topicId, $author);
          mysqli_stmt_execute($stmt);
          unset($_SESSION['tempTopicId']);
          unset($_SESSION['tempComment']);
          $_SESSION['activityStatus'] = 'Comentariul nou adăugat cu succes!';
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
