<?php
if (isset($_POST['essay-submit'])) {
  require 'dbh.inc.php';
  $essayName= $_POST['essayName'];
  $essaySubject= $_POST['essaySubject'];
  $essayCategory= $_POST['essayCategory'];
  $essaySubCategory= $_POST['essaySubCategory'];
  $essayContent= $_POST['essayContent'];
  $essayAuthor = $_POST['essayAuthor'];

//Method that checks empty fields and returns the admin to  upload form with the valid info autofilled
  if (empty($essayName) || empty($essaySubject) || empty($essayCategory) || empty($essaySubCategory) || empty($essayContent) || empty($essayAuthor)) {
    header("Location: ../ems.php#upload?error=emptyfields&essayName=".$essayName."&essaySubject=".$essaySubject."&essayCategory=".$essayCategory."&essaySubCategory=".$essaySubCategory."&essayContent=".$essayContent."&essayAuthor=".$essayAuthor);
    exit();
  }
  //Method that checks if the essayName exists in the database
  else {
    //SQL variable that runs an SQL statement to check the essayName
    $sql = "SELECT eName FROM essay WHERE eName=?;";

    //Prepare statement initialization
    $stmt = mysqli_stmt_init($conn);
    //Method that check if the sql can run inside the database without error
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../ems.php#upload?error=sqlError");
      exit();
    }
    //Method that retrieves the essayName filled by the admin checks for duplicity with the database
    else {
      //SQL variable that runs an SQL statement to insert data into the database
      $sql = "INSERT INTO essay (eName, eSubject, eCategory, eSubCategory, eContent, eAuthor) VALUES(?, ?, ?, ?, ?, ?);";

      //Prepare statement initialization
      $stmt = mysqli_stmt_init($conn);

      //Method that check if the sql statement can run inside the database without error
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../ems.php#upload?error=sqlUploadError");
        exit();
      }
      //Method that retrieves the input from admin and uploads it to the database
      else {
        mysqli_stmt_bind_param($stmt,"ssssss", $essayName, $essaySubject, $essayCategory, $essaySubCategory, $essayContent, $essayAuthor);
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
