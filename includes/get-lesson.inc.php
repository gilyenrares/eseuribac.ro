<?php 
require 'dbh.inc.php';
$currentSubject = $_SESSION['currentSubject'];
$currentClass = $_SESSION['currentClass'];
$sql = "SELECT class.className, subject.subjectName,lesson.lessonId, lesson.lessonName, lesson.lessonChapter, lesson.lessonContent, lesson.lessonTimeStamp, lesson.lessonAuthor FROM(( lesson INNER JOIN class ON class.classId=lesson.lessonClass) INNER JOIN subject ON subject.subjectId=lesson.lessonSubject) WHERE class.className='$currentClass' AND subject.subjectName='$currentSubject' ORDER BY lessonChapter";

	
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	echo '<div class="accordion" id="accordionExample"><div><div><div>';
	$pChapter = '';
	$id = 0;
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row['lessonChapter'] <> $pChapter) {
			$id +=1;
			if ($id===1) {
				$extra = 'show';
			}else{
				$extra = '';
			}
			echo '</ul></div></div></div></div>
				<div class="card d-flex bg-transparent py-1">
        			<button class="btn btn-lg btn-outline-success text-center" type="button" data-toggle="collapse" data-target="#collapse'.$id.'" aria-expanded="true" aria-controls="collapse'.$id.'">'.$row["lessonChapter"].'</button>
    				<div id="collapse'.$id.'" class="collapse '.$extra.'" aria-labelledby="headingOne" data-parent="#accordionExample">
      					<div class="card-body p-0">
      						<div class="row my-0 mb-5">
            						<ul class="align">';
      echo '<li>
				<figure class="book">
				<!-- Front -->
					<ul class="hardcover_front">
						<li>
							<div class="coverDesign green">
								<span class="ribbon">NEW</span>
								<div class="d-flex flex-column align-items-start h-100">
								<h1 class="row ml-2 mb-auto">'.$row["lessonChapter"].'</h1>
								<p class="row px-3">'.$row["lessonName"].'</p>
								</div>
							</div>
						</li>
						<li></li>
					</ul>
				<!-- Pages -->
					<ul class="page">
						<li></li>
						<li>
							<a class="mt-100 card-link" href="article.php?lesson='.$row["lessonId"].'&name='.$row["lessonName"].'" target="_blank">Citeste mai mult..</a>
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
						<h1 class="text-white">'.$row["lessonName"].'</h1>
						<span>By: '.$row["lessonAuthor"].'</span>
						<p class="text-white">'.$row["lessonName"].' face parte din capitolul '.$row["lessonChapter"].', materia de clasa a '. $row["className"].'-a '.$row["subjectName"].'.</p>
						<div class="text-muted">Added on: '.$row["lessonTimeStamp"].'</div>
					</figcaption>
				</figure>
			</li>
			';

		} else {
			echo '<li>
				<figure class="book">
				<!-- Front -->
					<ul class="hardcover_front">
						<li>
							<div class="coverDesign green">
								<span class="ribbon">NEW</span>
								<div class="d-flex flex-column align-items-start h-100">
								<h1 class="row ml-2 mb-auto">'.$row["lessonChapter"].'</h1>
								<p class="row px-3">'.$row["lessonName"].'</p>
								</div>
							</div>
						</li>
						<li></li>
					</ul>
				<!-- Pages -->
					<ul class="page">
						<li></li>
						<li>
							<a class="mt-100 card-link" href="article.php?lesson='.$row["lessonId"].'&name='.$row["lessonName"].'" target="_blank">Citeste mai mult..</a>
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
						<h1 class="text-white">'.$row["lessonName"].'</h1>
						<span>By: '.$row["lessonAuthor"].'</span>
						<p class="text-white">'.$row["lessonName"].' face parte din capitolul '.$row["lessonChapter"].', materia de clasa a '. $row["className"].'-a '.$row["subjectName"].'.</p>
						<div class="text-muted">Added on: '.$row["lessonTimeStamp"].'</div>
					</figcaption>
				</figure>
			</li>';
		}
			$pChapter = $row['lessonChapter'];
	}
	echo '</div></div></div>   </div>';
}
else{
	echo '<div class="alert alert-info alert-dismissible fade show text-center p-5" role="alert">Momentan secțiune pentru clasa a '.$_SESSION["currentClass"].'-a nu conține nici un material.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>';
	unset($_SESSION['currentClass']);
}
 ?>
