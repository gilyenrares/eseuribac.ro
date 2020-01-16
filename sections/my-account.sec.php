<?php 
require __DIR__.'/../includes/dbh.inc.php';

echo '<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images/logo.png" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-center">'.$_SESSION['userName'].'</h5><hr>
        <p class="card-text">Email: '.$_SESSION['userEmail'].'</p>
        <p class="card-text">Tipul Contului: '.$_SESSION['accType'].'</p>
        <p class="card-text">Reputaţie: '.$_SESSION['repPoints'].'</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>';
 ?>