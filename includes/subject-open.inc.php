<?php 
require 'dbh.inc.php';

$sql = "SELECT * FROM `subject` WHERE subjectLive=1";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<li>
				<figure class="book">
				<!-- Front -->
					<ul class="hardcover_front">
						<li>
							<div class="coverDesign green">
								<span class="ribbon">NEW</span>
								<div class="d-flex flex-column align-items-start h-100">
								<img  class="ml-2 row mb-auto" src="images/logo.png" alt="Eseuri bac logo" width="80%" height="60%">
								<p class="row p-3">'.$row["subjectName"].'</p>
								</div>
							</div>
						</li>
						<li></li>
					</ul>
				<!-- Pages -->
					<ul class="page">
						<li></li>
						<li>
							<a class="mt-100 card-link" href="'.strtolower($row["subjectLink"]).'.php">Spre pagina de '.$row["subjectName"].'</a>
						</li>
						<li></li>
						<li></li>
						<li></li>	
					</ul>
				<!-- Back -->
					<ul class="hardcover_back">
						<li></li>
						<li></li>
					</ul>
					<ul class="book_spine">
						<li></li>
						<li></li>
					</ul>
					<figcaption>
						<h1 class="text-white">'.$row["subjectName"].'</h1>
						<span>By: Eseuri Bac</span>
						<p class="text-white">Aceasta carte contine toata materia disponibila pentu '.$row["subjectName"].'.</p>
						<div class="text-muted">Activ din: '.$row["subjectTimeStamp"].'</div>
					</figcaption>
				</figure>
			</li>';
	}
}
 ?>