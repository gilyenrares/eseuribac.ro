<?php
if (isset($_POST['fact-submit'])) {
  require 'dbh.inc.php';
  $factImage= $_POST['factImage'];
  $factTitle= $_POST['factTitle'];
  $factSubject= $_POST['getSubject'];
  $factContent= $_POST['factContent'];
  $factAuthor = $_POST['factAuthor'];

//Method that checks empty fields and returns data back to the form autofill
  if (empty($factImage) || empty($factTitle) || empty($factSubject) || empty($factContent) || empty($factAuthor) ) {
    header("Location: ../ems.php#upload?error=emptyfields&factImage=".$factImage."factTitle=".$factTitle."&factSubject=".$factSubject."&factContent=".$factContent."&factAuthor=".$factAuthor);
    exit();
  }
  else {
    //SQL variable that runs an SQL statement to check the lessonName
    $sql = "SELECT factTitle FROM qfacts WHERE factTitle=?;";
    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../ems.php#upload?error=sqlError1");
        exit();
      }
      //Method that retrieves input from data and checks for duplicity with the database
      else {
        mysqli_stmt_bind_param($stmt,'s',$factTitle);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        $_SESSION['activityStatus'] = 'New fact title already exists !';
        header("Location: ../ems.php#upload?error=alreadyExists");
        exit();
      }
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
          //Method that retrieves the input from data and uploads it to the database
          else {
            mysqli_stmt_bind_param($stmt,"sssss", $factSubject, $factImage, $factTitle, $factContent, $factAuthor);
            mysqli_stmt_execute($stmt);
            header("Location: ../ems.php#upload?upload=success");
            exit();
          }
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
