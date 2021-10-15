<?php 
require 'dbh.inc.php';
$sql = "SELECT * FROM `qfacts`";
	
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
    	echo '<div class="col-sm-6 col-lg-4 card-c mb-5">
                <div class="card">
                  <div class="front">
                  <img src="'.$row['factImage'].'" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title py-4">'.$row['factTitle'].'</h5>
                      <article class="card-text">'.substr($row['factContent'], 0, 35).'...</article>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Autor: '.$row['factAuthor'].'</small>
                    </div>
                  </div>
                  <div class="back">
                    <div class="card-body">
                      <h5 class="card-title">'.$row['factTitle'].'</h5>
                      <article class="card-text h-100">'.$row['factContent'].'</article>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">'.$row['factTimeStamp'].'</small>
                    </div>
                  </div>
                </div>
              </div>';
  }
}else{
	echo '<div class="alert alert-info alert-dismissible fade show text-center p-5" role="alert">Momentan secțiune aceasta nu conține nici un material.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>';
}
 ?>
