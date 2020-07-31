<?php 
require 'dbh.inc.php';

$sql = "SELECT * FROM class;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	echo'<div class="form-group">
    <label for="classDropdown">Clasa:</label>
    <select multiple class="form-control" id="classDropdown" name="lessonClass">';
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<option value="'.$row["classId"].'">'.$row["className"].'</option>';
	}
	echo '</select>
  </div>';
} else {
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  	<strong>Oh ooh!</strong> Unde sunt clasele alea.
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
			  	</button>
			</div>';
}
 ?>
