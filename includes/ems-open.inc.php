<?php 
require 'dbh.inc.php';

$sql = "SELECT * FROM essay;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="card bg-dark border-top border-danger mb-2">
				<div class="card-header text-center">Essay id: '.$row["eId"].'<br><p class="font-italic text-center"><b>Title:</b> '.$row["eName"].'<b> - Subject:</b> '.$row["eSubject"].'<br><b>Category:</b> '.$row["eCategory"].' - <b>Subcategory:</b>  '.$row["eSubCategory"].' </p></div>
  				<div class="card-body">
    				<h4 class="card-title text-center">'.$row["eName"].'</h4>
    				<p class="card-text">'.$row["eContent"].'</p>
  				</div>
  				<div class="card-footer text-muted">Added on: '.$row["eTimeStamp"].' by: '.$row["eAuthor"].'</div>
			</div>';
	}
}
 ?>