<?php

if(isset($_POST['login-submit'])){

  require 'dbh.inc.php';

  $user = $_POST['user'];
  $password = $_POST['pwd'];

  //Method that checks empty fields and returns the user to login with the valid info autofilled
  if (empty($user) || empty($password)) {
    header("Location: ../logare.php?error=emptyfields&user=".$user);
    exit();
  }
  //Method that checks if the user exists in the database
  else {
    //SQL variable that runs an SQL statement to check the user
    $sql = "SELECT * FROM users WHERE userName=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);

    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../logare.php?error=sqlError");
      exit();
    }

    //Method that retrieves the user filled by the users checks for duplicity with the database
    else {

      mysqli_stmt_bind_param($stmt,"s", $user);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['userPwd']);
        if ($pwdCheck == false) {
          header("Location: ../logare.php?error=wrongPassword");
          exit();
        }
        elseif ($pwdCheck == true) {
          session_start();
          $_SESSION['userId'] = $row['userId'];
          $_SESSION['accType'] = $row['accType'];
          $_SESSION['repPoints'] = $row['repPoints'];
          $_SESSION['userName'] = $row['userName'];
          $_SESSION['userEmail'] = $row['userEmail'];
          session_commit();
          header("Location: ../index.php?login=success");
          exit();
        }
        else {
          header("Location: ../logare.php?error=wrongPassword");
          exit();
        }
      }
      else{
        header("Location: ../logare.php?error=noUserFound");
        exit();
      }

    }
}

}
else {
  header("Location: ../index.php");
  exit();
}
