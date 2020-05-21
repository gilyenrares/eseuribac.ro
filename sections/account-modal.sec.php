<?php 
require __DIR__.'/../includes/dbh.inc.php';
$div='';
$const='Admin';

if (isset($_SESSION['userId'])) {
  if ($_SESSION['accType'] === $const) {
    $div='<a class="ml-5" href="control-panel.php"><button type="button" class="btn btn-dark mr-1">Control Panel</button></a>';
  }
  echo '<!-- Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="accountTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <img class="mr-5" src="images/logo.png" height="30" width="30" alt="Eseuribac.ro logo">
        <h5 class="modal-title text-white" id="accountTitle">Contul meu, '.$_SESSION['userName'].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="card-title text-center">'.$_SESSION['userName'].'</h5>
        <p class="card-text"><b>Email:</b> '.$_SESSION['userEmail'].'</p>
        <p class="card-text"><b>Tipul Contului:</b> '.$_SESSION['accType'].'</p>
        <p class="card-text"><b>Reputaţie:</b> '.$_SESSION['repPoints'].'</p>
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#logoutModal">Deloghează-te</button>
        '.$div.'
      </div>
    </div>
  </div>
</div>';
}
?>