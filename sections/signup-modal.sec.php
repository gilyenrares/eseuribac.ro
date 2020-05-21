<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
      	<img class="mr-5" src="images/logo.png" height="30" width="30" alt="Eseuribac.ro logo">
        <h5 class="modal-title text-white" id="signupTitle">Înregistrează-te</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="includes/signup.inc.php" method="post" >
		<div class="form-group">
			<label for="AdresaEmail">Adresa de Email</label>
		    <input type="email" name="email" class="form-control" id="AdresaEmail" aria-describedby="noteE" placeholder="Enter email" required="required" value="<?php if (isset($_SESSION['tempEmail'])) {echo $_SESSION['tempEmail'];} ?>">
		    <small id="noteE" class="form-text text-muted">Email-ul tău va rămâne privat.</small>
		</div>
		<div class="form-group">
		    <label for="numeUtilizator">Numele de utilizator</label>
		    <input type="Username" name="user" class="form-control" id="numeUtilizator" aria-describedby="noteU" placeholder="Aliasul tău/ Username" required="required" value="<?php if (isset($_SESSION['tempUserName'])) {echo $_SESSION['tempUserName'];} ?>">
		    <small id="noteU" class="form-text text-muted">Numele de utilizator este afișat public in postări, etc.</small>
		</div>
		<div class="form-group">
		    <label for="parola">Parolă</label>
		    <input type="password" name="pwd" class="form-control" id="parola" aria-describedby="noteP" placeholder="Parolă" required="required">
		    <small id="noteP" class="form-text text-muted">Recomandare: Utilizează litere, cifre și caractere speciale.</small>
		</div>
		<div class="form-group">
		    <label for="parolaR">Reintrodu Parola</label>
		    <input type="password" name="pwd-repeat" class="form-control" id="parolaR" aria-describedby="noteP" placeholder="Parolă" required="required">
		    <small id="noteP" class="form-text text-muted">Trebie sa fie indentică cu parola introdusă mai sus.</small>
		</div>
		<div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="therms" required="required">
		    <label class="form-check-label" for="terms">Sunt de acord cu <a href="https://eseuribac.ro/article.php?essayName=Termeni%20%C8%99i%20condi%C8%9Bii&essayTimeStamp=2020-05-14%2011:48:05" target="_blank">Termenii si Condițile de Utilizare</a></label>
		</div>
		<button type="submit" name="signup-submit" class="btn btn-primary">Înregistrare</button>
	</form>
		
      </div>
      <div class="modal-footer bg-dark">
      	
      </div>
    </div>
  </div>
</div>