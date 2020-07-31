<?php 
require 'dbh.inc.php';

$sql = "SELECT * FROM essay WHERE eSubject='Fizică';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<li>
				<figure class="book">
				<!-- Front -->
					<ul class="hardcover_front">
						<li>
							<div class="coverDesign grey">
								<span class="ribbon">NEW</span>
								<div class="d-flex flex-column align-items-start h-100">
								<h1 class="row mb-auto">'.$row["eSubCategory"].'</h1>
								<p class="row px-3">'.$row["eName"].'</p>
								</div>
							</div>
						</li>
						<li></li>
					</ul>
				<!-- Pages -->
					<ul class="page">
						<li></li>
						<li>
							<a class="mt-100 card-link" href="article.php?essayName='.$row["eName"].'&essayTimeStamp='.$row["eTimeStamp"].'" target="_blank">Citeste mai mult..</a>
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
						<h1 class="text-white">'.$row["eName"].'</h1>
						<span>By: '.$row["eAuthor"].'</span>
						<p class="text-white">'.$row["eName"].' este o sectiune din '.$row["eSubCategory"].'.</p>
						<div class="text-muted">Added on: '.$row["eTimeStamp"].'</div>
					</figcaption>
				</figure>
			</li>';
	}
}
 ?>