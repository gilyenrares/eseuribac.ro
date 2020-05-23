<?php 
	require 'dbh.inc.php'; 
	$subject =$_POST['subject'];
if (isset($_POST['submit-search'])) {
	$search = mysqli_real_escape_string($conn, $_POST['search']);
	$sql = "SELECT * FROM essay WHERE eSubject = '$subject' AND (eName LIKE '%$search%' OR eCategory LIKE '%$search%' OR eSubCategory LIKE '%$search%' OR eAuthor LIKE '%$search%' OR eTimeStamp LIKE '%$search%')";
	$results = mysqli_query($conn, $sql);
	$queryResults = mysqli_num_rows($results);
	echo '<h2 class="text-white">Rezultate gasite <span class="badge badge-primary">'.$queryResults.'</span></h2>';
	if ($queryResults > 0) {
		while ($row = mysqli_fetch_assoc($results)) {
			echo '<li>
				<figure class="book">
				<!-- Front -->
					<ul class="hardcover_front">
						<li>
							<div class="coverDesign yellow">
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
						<p class="text-white">'.$row["eName"].' este o sectiune a eseului operei literare '.$row["eSubCategory"].'.</p>
						<div class="text-muted">Added on: '.$row["eTimeStamp"].'</div>
					</figcaption>
				</figure>
			</li>';
		}
	} else {
		echo "Nu exista nici un rezultat la cautarea facuta!";
	}
}
?>