<?php
if (isset($_POST['deleteU-submit'])) {
  session_start();

  require 'dbh.inc.php';  
  $userId = $_POST['userId'];

  //Method that checks if the lessonName exists in the database
  
    //SQL variable that runs an SQL statement to check the lessonName
    $sql = "SELECT userId FROM users WHERE userId=$userId;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../ums.php#update?error=sqlError");
      exit();
    }
    //Method that retrieves the lessonName filled by the admin checks for duplicity with the database
    else {
      //SQL variable that runs an SQL statement to insert data into the database
      $sql = "DELETE FROM `users` WHERE `userId`=?";

      //Prepare statement initialization
      $stmt = mysqli_stmt_init($conn);

      //Method that check if the sql statement can run inside the database without error
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../ums.php#update?error=sqlUpdateError");
        exit();
      }
      //Method that retrieves the input from admin and uploads it to the database
      else {
        mysqli_stmt_bind_param($stmt,"s", $userId);
        mysqli_stmt_execute($stmt);
        $_SESSION['activityStatus'] = 'Account has been Removed!';
        header("Location: ../ums.php#update?accountRemoval=success");
        exit();
      }
    }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  $_SESSION['activityStatus'] = 'Hey ...Hmm. <br>I see you =) trying :))';
  header("Location: ../ums.php");
  exit();
}
