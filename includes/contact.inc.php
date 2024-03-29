<?php
if (isset($_POST['contact-submit'])) {

  require 'dbh.inc.php';

  $topic = $_POST['topic'];
  $email = $_POST['email'];
  $msg = $_POST['message'];

//Method that checks empty fields and returns the user to contact with the valid info autofilled
  if (empty($topic) || empty($email) || empty($msg)) {
    header("Location: ../contact.php?error=emptyfields&email=".$email."&msg=".$msg);
    exit();
  }
  //Method that checks if the Email entered is valid and returns the user to contact with the valid info autofilled
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../contact.php?error=invalidEmail&msg=".$msg);
    exit();
  }
    //Method that checks if the message entered is valid and returns the user to contact with the valid info autofilled
  elseif (!preg_match("/^[a-zA-Z\s]*$/",$msg)) {
    header("Location: ../contact.php?error=invalidMesage&email=".$email);
    exit();
  }
  else {
    //SQL variable that runs an SQL statement to insert data into the database
    $sql = "INSERT INTO contact (userEmail, topic, message) VALUES(?, ?, ?)";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);

    //Method that check if the sql statement can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../contact.php?error=sqlUploadError");
       exit();
    }
    //Method that retrieves the input from users and uploads it to the database
    else {
      mysqli_stmt_bind_param($stmt,"sss", $email, $topic, $msg);
      mysqli_stmt_execute($stmt);
      //Sending an copy of the enquery to the contact-us email
      $to = "contact@eseuribac.ro";
      $subject = 'Enquery from: '.$email;
      $message = "Email sent by: \r\n";
      $message .= $email;
      $message .= "\r\n Email topic: ".$topic."  \r\n";
      $message .= $msg;
      $headers = "From:".$email."\r\n";
      $headers .= "Reply-to:".$email."\r\n";
      $headers .= "X-Mailer: PHP/".phpversion();
      mail($to, $subject, $message, $headers);
      header("Location: ../contact.php?".$topic."-submit=success");
      exit();
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../contact.php");
  exit();
}
