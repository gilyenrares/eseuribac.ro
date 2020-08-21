<?php 
require 'dbh.inc.php';
if (isset($_GET['essayName'])) {
	$essayName = mysqli_real_escape_string($conn, $_GET['essayName']);
	$essayTimeStamp = mysqli_real_escape_string($conn, $_GET['essayTimeStamp']);

	$sql = "SELECT * FROM essay WHERE eName='$essayName' AND eTimeStamp='$essayTimeStamp';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div class="card border border-dark mb-2 shadow-lg">
					<div class="card-header text-center"><p class="font-italic text-center"> '.$row["eSubject"].'<b> -> </b> '.$row["eCategory"].'<b> -> </b>  '.$row["eSubCategory"].'<b> -> </b> '.$row["eName"].'</p></div>
	  				<div class="card-body">
	    				<h4 class="card-title text-center">'.$row["eName"].'</h4>
	    				<p class="card-text">'.$row["eContent"].'</p>
	  				</div>
	  				<div class="card-footer text-muted">Added on: '.$row["eTimeStamp"].' by: '.$row["eAuthor"].'</div>
				</div>';
		}
	}
} elseif (isset($_GET['lesson'])) {
	$currentId = mysqli_real_escape_string($conn, $_GET['lesson']);
	$sql = "SELECT class.className, subject.subjectName,lesson.lessonId, lesson.lessonName, lesson.lessonChapter, lesson.lessonContent, lesson.lessonTimeStamp, lesson.lessonAuthor FROM(( lesson INNER JOIN class ON class.classId=lesson.lessonClass) INNER JOIN subject ON subject.subjectId=lesson.lessonSubject) WHERE lessonId='$currentId';";

	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo '<div class="card border border-dark mb-2 shadow-lg">
					<div class="card-header text-center"><p class="font-italic text-center"> '.$row["className"].'<b> -> </b> '.$row["subjectName"].'<b> -> </b>  '.$row["lessonChapter"].'<b> -> </b> '.$row["lessonName"].'</p></div>
	  				<div class="card-body">
	    				<h4 class="card-title text-center">'.$row["lessonName"].'</h4>
	    				<p class="card-text">'.$row["lessonContent"].'</p>
	  				</div>
	  				<div class="card-footer text-muted">Added on: '.$row["lessonTimeStamp"].' by: '.$row["lessonAuthor"].'</div>
				</div>';
		}
	}
}
 ?>