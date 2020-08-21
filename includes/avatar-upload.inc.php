<?php 
session_start();
include_once 'dbh.inc.php';
if (isset($_POST['avatar-submit'])) {
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
	$allowed = array('jpg','jpeg','png','gif');
	/*Checking if the type of file selected is allowed*/
	if (in_array($fileActualExt, $allowed)) {
		if ($fileError === 0) {
			if ($fileSize < 1000000) {
				
				$fileNameNew = $_SESSION['userId'].'.'.$fileActualExt;
				$fileDestination = __DIR__.'/../uploads/masa/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				header('Location: ../cont.php?upload=success');
			} else {
				echo "Imaginea este prea mare(max: 10MB)!";
			}
		} else {
			echo "Ups... A apărut o eroare în momentul încărcări imagini.";
		}
	} else {
		echo "Extensia imagini selectate nu este permisă!";
	}
} else {
	header('Location: ../cont.php');
}
 ?>
