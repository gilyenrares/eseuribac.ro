<?php
 if (isset($_SESSION['activityStatus'])) {
	echo '<!-- Modal -->
<div class="modal fade" id="errorSystem" tabindex="-1" role="dialog" aria-labelledby="errorSystem" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <img class="mr-5" src="images/logo.png" height="30" width="30" alt="Eseuribac.ro logo">
        <h5 class="modal-title" id="errorSystem">EseuriBac </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<p>'.$_SESSION["activityStatus"].'</p>
      </div>
      <div class="modal-footer bg-dark">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>';
unset($_SESSION['activityStatus']);
}
 ?>