<?php 
require 'dbh.inc.php';

if (isset($_SESSION['accType'])) {
	$rank = $_SESSION['accType']; 
	$const ='Admin';
    if ($rank === $const) {
      	include'sections/category-modal.sec.php';
      	echo '<div class="col-sm-6 col-lg-4 my-2">
      	<button type="button" class="btn btn-success w-100 h-100" data-toggle="modal" data-target="#categoryModal">
      	<img src="images/plus.png" height="50" width="50" alt="Eseuribac.ro logo"><br>
      	Crează o categorie noua</button> </div>';
    }
}

$sql = "SELECT * FROM categories;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="col-sm-6 col-lg-4 my-2">
          		<div class="card bg-danger text-white shadow-lg">
            		<div class="text-center card-header"><h3>'.$row["catName"].'</h3></div>
  						<div class="card-body">
    						<p class="card-text"><h5>'.$row["catDescription"].'</h5>
    					</div>
    						<div class="card-footer"><a href="forum.php?catId='.$row["catId"].'&catName='.$row["catName"].'" class="btn btn-primary w-100" role="button">Deschide..</a>
    						</div>
            		
          		</div>
        	</div>';
	}
}
 ?>