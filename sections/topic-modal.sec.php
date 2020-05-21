<!-- Modal -->
<div class="modal fade" id="topicModal" tabindex="-1" role="dialog" aria-labelledby="topicTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      	<div class="modal-header bg-primary">
      		<img class="mr-5" src="images/logo.png" height="30" width="30" alt="Eseuribac.ro logo">
        	<h5 class="modal-title text-white" id="topicTitle">Topic Nou </h5>
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          		<span aria-hidden="true">&times;</span>
        	</button>
    	</div>
    	<div class="modal-body">
 			<form action="includes/new-topic.inc.php" method="POST">
      <div class="col form-group">
        <input type="hidden" name="catId" value="<?php $catId = mysqli_real_escape_string($conn, $_GET['catId']); echo $catId; ?>">
        <input type="hidden" name="subcatId" value="<?php $catId = mysqli_real_escape_string($conn, $_GET['subcatId']); echo $subcatId; ?>">
        <label for="topicName">Topic</label>
        <input  type="text" name="topicName" class="form-control" id="topicName" aria-describedby="noteTN" placeholder="Introdu titlul" required="required">
        <small id="noteTN" class="form-text text-muted">Introdu un titlul pentru noul topic.</small>
      </div>
      <div class="col form-group">
        <label for="topicDescription">Descrierea</label>
        <textarea rows="5" type="text" name="topicDescription" class="form-control" id="topicDescription" aria-describedby="noteTD" placeholder="Introdu descrierea" required="required"></textarea>
        <small id="noteTD" class="form-text text-muted">Introdu o descriere pentru aceast topic.</small>
      </div>
      <button type="submit" name="new-topic-submit" class="btn btn-primary">Adaugă topic</button>
      </form>
		</div>
      	<div class="modal-footer bg-dark">	
      	</div>
  	</div>
  </div>
</div>