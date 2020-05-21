<?php 
require 'dbh.inc.php';
$catId = mysqli_real_escape_string($conn, $_GET['catId']);
$subcatId = mysqli_real_escape_string($conn, $_GET['subcatId']);
$subcatName = mysqli_real_escape_string($conn, $_GET['subcatName']);

if (isset($_SESSION['userId'])) {
    echo '<h2 class="text-center w-100">Topic - '.$subcatName.'</h2>';
      		include'sections/topic-modal.sec.php';
      		echo '<div class="col my-2">
      		<button type="button" class="btn btn-success w-100 h-100" data-toggle="modal" data-target="#topicModal">
      		<img src="images/plus.png" height="50" width="50" alt="Eseuribac.ro logo"><br>
      		Crează un topic nou</button> </div>';	
}
else {
	echo '<div class="alert alert-info alert-dismissible fade show text-center" role="alert">Trebuie să te loghezi pentru a putea posta topicuri
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>';
}

$sql = "SELECT * FROM topics WHERE topicCat='$catId' AND topicSubcategory='$subcatId';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	echo '<div class="col">';
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<div class="card w-100 my-2">
  				<div class="card-header">'.$row["topicName"].'</div>
  				<div class="card-body">
    				<blockquote class="blockquote mb-0">
      				<p>'.$row["topicDescription"].'</p>';
      				$tempUserId = $row["topicAuthor"];
					$authorSql = "SELECT * FROM users WHERE userId='$tempUserId';";
					$tempData =mysqli_query($conn, $authorSql);
      				while ($data = mysqli_fetch_assoc($tempData)) {
      					echo '<footer class="blockquote-footer">'.$data["userName"].' (<cite title="Rank">'.$data["accType"].'</cite>) - Rep('.$data["repPoints"].') - Postat în: '.$row["topicDate"].'</footer>';
      				}
      				echo '</blockquote>
  				</div>';
  				$commentId = $row["topicId"];
				$commentSql = "SELECT * FROM comments WHERE commentTopic='$commentId';";
				$commentData =mysqli_query($conn, $commentSql);
				$commentTotalNumber = mysqli_num_rows($commentData);
				echo '<div class="card-footer">
				<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseReplies" aria-expanded="false" aria-controls="collapseReplies">Răspunsuri
					<span class="badge badge-light">'.$commentTotalNumber.'</span>
 					<span class="sr-only">numarul de comentari</span>
 				</button>
 				<div class="collapse" id="collapseReplies">';	
      			while ($data = mysqli_fetch_assoc($commentData)) {
					echo'<div class="card card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>';
      			}
  				echo '</div>
  				</div>
			</div>';
	}
	echo '</div>';
}
else {
	echo '<h3 class="text-center w-100">Momentan nu există nici un topic creat în această secțiune.</h3></div>
    	<div class="col">';
}
 ?>
