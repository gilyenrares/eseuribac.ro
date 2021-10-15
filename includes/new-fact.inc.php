<?php
if (isset($_POST['fact-submit'])) {
  require 'dbh.inc.php';
  $factImage= $_POST['factImage'];
  $factTitle= $_POST['factTitle'];
  $factSubject= $_POST['getSubject'];
  $factContent= $_POST['factContent'];
  $factAuthor = $_POST['factAuthor'];

//Method that checks empty fields and returns the admin to  upload form with the valid info autofilled
  if (empty($factImage) || empty($factTitle) || empty($factSubject) || empty($factContent) || empty($factAuthor) ) {
    header("Location: ../ems.php#upload?error=emptyfields&factImage=".$factImage."factTitle=".$factTitle."&factSubject=".$factSubject."&factContent=".$factContent."&factAuthor=".$factAuthor);
    exit();
  }
  //Method that checks if the lessonName exists in the database
  else {
    //SQL variable that runs an SQL statement to check the lessonName
    $sql = "SELECT factTitle FROM qfacts WHERE factTitle=$factTitle;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../ems.php#upload?error=sqlError");
      exit();
    }
    //Method that retrieves the lessonName filled by the admin checks for duplicity with the database
    else {
      //SQL variable that runs an SQL statement to insert data into the database
      $sql = "INSERT INTO qfacts (factSubject, factImage, factTitle, factContent, factAuthor) VALUES(?, ?, ?, ?, ?);";

      //Prepare statement initialization
      $stmt = mysqli_stmt_init($conn);

      //Method that check if the sql statement can run inside the database without error
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../ems.php#upload?error=sqlUploadError");
        exit();
      }
      //Method that retrieves the input from admin and uploads it to the database
      else {
        mysqli_stmt_bind_param($stmt,"sssss", $factSubject, $factImage, $factTitle, $factContent, $factAuthor);
        mysqli_stmt_execute($stmt);
        header("Location: ../ems.php#upload?upload=success");
        exit();
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../ems.php");
  exit();
}
