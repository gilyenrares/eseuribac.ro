<?php 
require 'dbh.inc.php';
$currentSubject = $_SESSION['currentSubject'];
$sql = "SELECT variant.variantId, subject.subjectName, year.yearName, variant.variantSpecial, variant.variantType, variant.variantName, variant.variantLocation FROM(( variant INNER JOIN subject ON subject.subjectId=variant.variantSubject) INNER JOIN year ON year.yearId=variant.variantYear) WHERE subject.subjectName='$currentSubject' ORDER BY yearName";

	
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	echo '<div class="accordion" id="accordionVariant"><div><div><div>';
	$pYear = '';
	$id = 0;
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row['yearName'] <> $pYear) {
			$id +=1;
			if ($id===1) {
				$extra = 'show';
			}else{
				$extra = '';
			}
			echo '</div></div>
				<div class="card d-flex bg-transparent py-1">
        			<button class="btn btn-lg btn-outline-primary text-center m-2" type="button" data-toggle="collapse" data-target="#collapseV'.$id.'" aria-expanded="true" aria-controls="collapseV'.$id.'">'.$row["yearName"].'</button>
    				<div id="collapseV'.$id.'" class="collapse '.$extra.' row mt-5 mx-0" aria-labelledby="headingOne" data-parent="#accordionExample">';
			   echo '<div class="col-lg-6">
						<div class="card bg-transparent border-primary text-white text-center">
							<div class="card-header border-bottom border-secondary">'.$row["variantType"].'</div>
							<div class="row no-gutters">
							<div class="col-md-2 p-3">
								<img src="images/i-pdf.png" alt="PDF File">
							</div>
							<div class="col-md-10 mt-3">
								<div class="card-body">
								<h4 class="card-title">'.$row["variantName"].'</h4>
								<h5 class="card-text">'.$row["variantType"].' '.$row["subjectName"].' '.$row["variantSpecial"].'.</h5>
								<a href="#" class="btn btn-primary m-3">Deschide</a><a href="./'.$row["variantLocation"].'" download="'.$row["variantName"].'" class="btn btn-primary m-3">Descarcă</a>
								</div>
							</div>
							</div>
							<div class="card-footer text-muted border-top border-secondary">'.$row["yearName"].'</div>
						</div>
					</div>';
		} else {
			echo '<div class="col-lg-6">
					<div class="card bg-transparent border-primary text-white text-center">
						<div class="card-header border-bottom border-secondary">'.$row["variantType"].'</div>
						<div class="row no-gutters">
						<div class="col-md-2 p-3">
							<img src="images/i-pdf.png" alt="PDF File">
						</div>
						<div class="col-md-10 mt-3">
							<div class="card-body">
							<h4 class="card-title">'.$row["variantName"].'</h4>
							<h5 class="card-text">'.$row["variantType"].' '.$row["subjectName"].' '.$row["variantSpecial"].'.</h5>
							<a href="#" class="btn btn-primary m-3">Deschide</a><a href="./'.$row["variantLocation"].'" download="'.$row["variantName"].'" class="btn btn-primary m-3">Descarcă</a>
							</div>
						</div>
						</div>
						<div class="card-footer text-muted border-top border-secondary">'.$row["yearName"].'</div>
					</div>
				</div>';
		}
			$pYear = $row['yearName'];
	}
	echo '</div></div></div>   </div>';
}
else{
	echo '<div class="alert alert-info alert-dismissible fade show text-center p-5" role="alert">Momentan variante pentru '.$_SESSION["currentSubject"].' nu sunt disponibile.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>';
	unset($_SESSION['currentYear']);
}
 ?>
