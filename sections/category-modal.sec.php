<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      	<div class="modal-header bg-primary">
      		<img class="mr-5" src="images/logo.png" height="30" width="30" alt="Eseuribac.ro logo">
        	<h5 class="modal-title text-white" id="categoryTitle">Categorie Noua</h5>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        	</button>
    	</div>
    	<div class="modal-body">
 			<form action="includes/new-cat.inc.php" method="POST">
				<div class="form-group">
					<label for="catName">Categoria</label>
					<input  type="text" name="catName" class="form-control" id="catName" aria-describedby="noteCN" placeholder="Introdu titlul" required="required">
					<small id="noteCN" class="form-text text-muted">Introdu un titlul pentru noua categorie.</small>
				</div>
				<div class="form-group">
					<label for="catDescription">Descrierea</label>
					<textarea rows="5" type="text" name="catDescription" class="form-control" id="catDescription" aria-describedby="noteCD" placeholder="Introdu descrierea" required="required"></textarea>
					<small id="noteCD" class="form-text text-muted">Introdu o descriere pentru aceasta categorie.</small>
				</div>
				<button type="submit" name="new-cat-submit" class="btn btn-dark">Upload Category</button>
			</form>
		</div>
      	<div class="modal-footer bg-dark">	
      	</div>
  	</div>
  </div>
</div>