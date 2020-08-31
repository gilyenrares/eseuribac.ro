<?php
if (isset($_POST['variant-submit'])) {
  require 'dbh.inc.php'; 
  $rootFolder= $_POST['rootFolder'];
  $variantSubject= $_POST['getSubject'];
  $variantYear= $_POST['getYear'];
  $variantSpecial = $_POST['variantSpecial'];
  if(!empty($variantSpecial)){
    $temp =$variantSpecial.'-';
    $variantSpecial= $temp;
  }
  $variantType = $_POST['variantType'];
   /*Getting the file from the super global FILES*/
  $file= $_FILES['file'];
  /*Getting all the data regarding the selected file*/
  $fileName = $file['name'];
  $fileTmpName = $file['tmp_name'];
  $fileSize = $file['size'];
  $fileError = $file['error'];
  $fileType = $file['type']; 
  /*Getting the extension of the file*/
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  /*Creating an array of allowed types of files*/
  $allowed = array('pdf','doc');
  /*Checking if the type of file selected is allowed*/
  if (in_array($fileActualExt, $allowed)) {
    if ($fileError === 0) {
      $fileLocation = $rootFolder.'/'.$variantSubject.'/'.$variantYear.'/'.$variantSpecial.$variantType.'-'.$fileName;
      $fileDestination = __DIR__.'/../'.$fileLocation;
      move_uploaded_file($fileTmpName, $fileDestination);
      header('Location: ../ems.php?upload=success');
    } else {
      echo "Ups... A apărut o eroare în momentul încărcări documentului.";
    }
  } else {
    echo "Extensia documentului selectat nu este permisă!";
  }

//Method that checks empty fields and returns the admin to  upload form with the valid info autofilled
  if (empty($variantSubject) || empty($variantYear) || empty($variantType) || empty($fileName)) {
    header("Location: ../ems.php#upload?error=emptyfields&variantSubject=".$variantSubject."&variantYear=".$variantYear."&variantType=".$variantType."&fileName=".$fileName);
    exit();
  }
  //Method that checks if the lessonName exists in the database
  else {
    //SQL variable that runs an SQL statement to check the lessonName
    $sql = "SELECT variantName FROM variant WHERE variantName=?;";

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
      $sql = "INSERT INTO variant (variantSubject, variantYear, variantSpecial, variantType, variantName, variantLocation) VALUES(?, ?, ?, ?, ?, ?);";

      //Prepare statement initialization
      $stmt = mysqli_stmt_init($conn);

      //Method that check if the sql statement can run inside the database without error
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../ems.php#upload?error=sqlUploadError");
        exit();
      }
      //Method that retrieves the input from admin and uploads it to the database
      else {
        mysqli_stmt_bind_param($stmt,"ssssss", $variantSubject, $variantYear, $variantSpecial, $variantType, $fileName, $fileLocation);
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

 ?>
