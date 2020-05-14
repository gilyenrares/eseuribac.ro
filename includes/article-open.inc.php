<?php 
require 'dbh.inc.php';
$essayName = mysqli_real_escape_string($conn, $_GET['essayName']);
$essayTimeStamp = mysqli_real_escape_string($conn, $_GET['essayTimeStamp']);

$sql = "SELECT * FROM essay WHERE eName='$essayName' AND eTimeStamp='$essayTimeStamp';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="card border-top border-danger mb-2">
				<div class="card-header text-center"><p class="font-italic text-center"> '.$row["eSubject"].'<b> -> </b> '.$row["eCategory"].'<b> -> </b>  '.$row["eSubCategory"].'<b> -> </b> '.$row["eName"].'</p></div>
  				<div class="card-body">
    				<h4 class="card-title text-center">'.$row["eName"].'</h4>
    				<p class="card-text">'.$row["eContent"].'</p>
  				</div>
  				<div class="card-footer text-muted">Added on: '.$row["eTimeStamp"].' by: '.$row["eAuthor"].'</div>
			</div>';
	}
}
 ?>