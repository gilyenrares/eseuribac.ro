<?php
if (isset($_POST['signup-submit'])) {

  require 'dbh.inc.php';
  $userName = $_POST['user'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];

//Method that checks empty fields and returns the user to signup with the valid info autofilled
  if (empty($userName) || empty($email) || empty($password) || empty($passwordRepeat)) {
    header("Location: ../inregistrare.php#signup?error=emptyfields&user=".$userName."&email=".$email);
    exit();
  }

  //Method that checks if the First Name entered is valid and returns the user to signup with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z0-9\s]*$/",$userName)) {
    header("Location: ../inregistrare.php?error=invaliduserName&email=".$email);
    exit();
  }

  //Method that checks if the Email entered is valid and returns the user to signup with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../inregistrare.php#signup?error=invalidemail&user=".$userName);
    exit();
  }

  //Method that checks if the Password and Re-enter Password are the same
elseif ($password !== $passwordRepeat) {
  header("Location: ../inregistrare.php#signup?error=passwordcheck&user=".$userName."&email=".$email);
  exit();
}

  //Method that checks if the email exists in the database
  else {
    //SQL variable that runs an SQL statement to check the email
    $sql = "SELECT userEmail FROM users WHERE userEmail=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../inregistrare.php#signup?error=sqlError");
      exit();
    }
    //Method that retrieves the email filled by the users checks for duplicity with the database
    else {
      mysqli_stmt_bind_param($stmt,"s",$email);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        header("Location: ../inregistrare.php#signup?error=emailAlreadyTaken&user=".$userName);
        exit();
      }
      else {
        //SQL variable that runs an SQL statement to insert data into the database
        $sql = "INSERT INTO users (userName, userEmail, userPwd) VALUES(?, ?, ?);";

        //Prepare statement initialization
        $stmt = mysqli_stmt_init($conn);

        //Method that check if the sql statement can run inside the database without error
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../inregistrare.php#signup?error=sqlUploadError");
          exit();
        }
        //Method that retrieves the input from users and uploads it to the database
        else {
          //Variable that holds the hassed Password
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt,"sss", $userName, $email, $hashedPwd);
          mysqli_stmt_execute($stmt);
          header("Location: ../index.php#signup?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../index.php");
  exit();
}
