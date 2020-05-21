<!-- Modal -->
<div class="modal fade" id="subcategoryModal" tabindex="-1" role="dialog" aria-labelledby="subcategoryTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      	<div class="modal-header bg-primary">
      		<img class="mr-5" src="images/logo.png" height="30" width="30" alt="Eseuribac.ro logo">
        	<h5 class="modal-title text-white" id="subcategoryTitle">Subcategorie Noua</h5>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        	</button>
    	</div>
    	<div class="modal-body">
 			<form action="includes/new-subcat.inc.php" method="POST">
          <div class="form-group">
            <input type="hidden" name="catId" value="<?php $catId = mysqli_real_escape_string($conn, $_GET['catId']); echo $catId; ?>">
            <label for="subcatName">Subcategoria</label>
            <input  type="text" name="subcatName" class="form-control" id="subcatName" aria-describedby="noteCN" placeholder="Introdu titlul" required="required">
            <small id="noteCN" class="form-text text-muted">Introdu un titlul pentru noua subcategorie.</small>
          </div>
          <div class="form-group">
            <label for="subcatDescription">Descrierea</label>
            <textarea rows="5" type="text" name="subcatDescription" class="form-control" id="subcatDescription" aria-describedby="noteCD" placeholder="Introdu descrierea" required="required"></textarea>
            <small id="noteCD" class="form-text text-muted">Introdu o descriere pentru aceasta subcategorie.</small>
          </div>
          <button type="submit" name="new-subcat-submit" class="btn btn-dark">Upload Subcategory</button>
      </form>
		</div>
      	<div class="modal-footer bg-dark">	
      	</div>
  	</div>
  </div>
</div>