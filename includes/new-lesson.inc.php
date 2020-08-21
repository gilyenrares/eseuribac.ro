<?php
if (isset($_POST['lesson-submit'])) {
  require 'dbh.inc.php';
  $lessonName= $_POST['lessonName'];
  $lessonChapter= $_POST['lessonChapter'];
  $lessonClass= $_POST['getClass'];
  $lessonSubject= $_POST['getSubject'];
  $lessonContent= $_POST['lessonContent'];
  $lessonAuthor = $_POST['lessonAuthor'];

//Method that checks empty fields and returns the admin to  upload form with the valid info autofilled
  if (empty($lessonName) || empty($lessonChapter) || empty($lessonClass) || empty($lessonSubject) || empty($lessonContent) || empty($lessonAuthor)) {
    header("Location: ../ems.php#upload?error=emptyfields&lessonName=".$lessonName."&lessonChapter=".$lessonChapter."&lessonClass=".$lessonClass."&lessonSubject=".$lessonSubject."&lessonContent=".$lessonContent."&lessonAuthor=".$lessonAuthor);
    exit();
  }
  //Method that checks if the lessonName exists in the database
  else {
    //SQL variable that runs an SQL statement to check the lessonName
    $sql = "SELECT lessonName FROM lesson WHERE lessonName=?;";

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
      $sql = "INSERT INTO lesson (lessonClass, lessonSubject, lessonName, lessonChapter, lessonContent, lessonAuthor) VALUES(?, ?, ?, ?, ?, ?);";

      //Prepare statement initialization
      $stmt = mysqli_stmt_init($conn);

      //Method that check if the sql statement can run inside the database without error
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../ems.php#upload?error=sqlUploadError");
        exit();
      }
      //Method that retrieves the input from admin and uploads it to the database
      else {
        mysqli_stmt_bind_param($stmt,"ssssss", $lessonClass, $lessonSubject, $lessonName, $lessonChapter, $lessonContent, $lessonAuthor);
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
