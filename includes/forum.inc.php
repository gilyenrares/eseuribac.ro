<?php 
require 'dbh.inc.php';
$catId = mysqli_real_escape_string($conn, $_GET['catId']);
$catName = mysqli_real_escape_string($conn, $_GET['catName']);

if (isset($_SESSION['accType'])) {
	$rank = $_SESSION['accType']; 
	$const ='Admin';
    	if ($rank === $const) {
    		echo '<h2 class="text-center w-100">Forum - '.$catName.'</h2></div>
    		<div class="row">';
      		include'sections/subcategory-modal.sec.php';
      		echo '<div class="col-sm-6 col-lg-4 my-2">
      		<button type="button" class="btn btn-success w-100 h-100" data-toggle="modal" data-target="#subcategoryModal">
      		<img src="images/plus.png" height="50" width="50" alt="Eseuribac.ro logo"><br>
      		Crează o subcategorie noua</button> </div>';
    	}
}
$sql = "SELECT * FROM subcategory WHERE categoryId='$catId';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="col-sm-6 col-lg-4 my-2">
          		<div class="card bg-warning shadow-lg">
            		<div class="text-center card-header"><h3>'.$row["subcategoryName"].'</h3></div>
  					<div class="card-body text-white">
    					<p class="card-text"><h5>'.$row["subcategoryDescription"].'</h5>
    				</div>
    				<div class="card-footer"><a href="topic.php?catId='.$row["categoryId"].'&subcatId='.$row["subcategoryId"].'&subcatName='.$row["subcategoryName"].'" class="btn btn-primary w-100" role="button">Deschide..</a>
    				</div>		
          		</div>
        	</div>';
	}
	echo '</div>';
}
else {
	echo '<h2 class="text-center w-100">Forum - '.$catName.'</h2>
	<h3 class="text-center w-100">Momentan nu există nici o subcategorie creată în această secțiune.</h3></div>
    	<div class="col">';
}
 ?>
