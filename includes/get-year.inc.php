<?php 
require 'dbh.inc.php';

$sql = "SELECT * FROM year;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	echo'<div class="form-group">
    <label for="yearDropdown">Year:</label>
    <select multiple class="form-control" id="yearDropdown" name="getYear">';
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<option value="'.$row["yearId"].'">'.$row["yearName"].'</option>';
	}
	echo '</select>
  </div>';
} else {
	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  	<strong>Oh ooh!</strong> Unde sunt ani mei .
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    	<span aria-hidden="true">&times;</span>
			  	</button>
			</div>';
}
 ?>
