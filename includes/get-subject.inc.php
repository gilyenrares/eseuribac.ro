<?php 
require 'dbh.inc.php';

$sql = "SELECT * FROM subject;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	echo'<div class="form-group">
    <label for="subjectDropdown">Materia:</label>
    <select multiple class="form-control" id="subjectDropdown" name="getSubject">';
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<option value="'.$row["subjectId"].'">'.$row["subjectName"].'</option>';
	}
	echo '</select>
  </div>';
} else {
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  	<strong>Oh ooh!</strong> Unde sunt materile alea.
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
			  	</button>
			</div>';
}
 ?>
