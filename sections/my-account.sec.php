<?php 
require __DIR__.'/../includes/dbh.inc.php';
$div='';
$const='Admin';
if ($_SESSION['accType'] === $const) {
  $div='<a class="ml-5" href="control-panel.php"><button type="button" class="btn btn-dark mr-1">Control Panel</button></a>';
}

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
        <p class="card-text"><small class="text-muted"></small></p>
        '.$div.'
      </div>
    </div>
  </div>
</div>';
 ?>