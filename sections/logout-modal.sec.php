<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
      	<img class="mr-5" src="images/logo.png" height="30" width="30" alt="Eseuribac.ro logo">
        <h5 class="modal-title text-white" id="logoutTitle">Deloghează-te</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<h5>Ești sigur/ă că vrei să te deconectezi?</h5>
      </div>
      <div class="modal-footer bg-dark">
      	<form action="includes/logout.inc.php" method="post" >
		<button type="submit" name="logout-submit" class="btn btn-outline-success px-5">Da</button>
		<button type="button" class="btn btn-danger px-5" data-dismiss="modal">Nu</button>
		</form>
      </div>
    </div>
  </div>
</div>