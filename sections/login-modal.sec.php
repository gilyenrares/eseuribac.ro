<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
      	<img class="mr-5" src="images/logo.png" height="30" width="30" alt="Eseuribac.ro logo">
        <h5 class="modal-title text-white" id="loginTitle">Loghează-te </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="includes/login.inc.php" method="post" >
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
		    <label for="reseParola">Ai uitat parola?</label><br>
		    <a id="reseParola" href="resetare-parola.php">Resetează parola.</a>
		    <small id="noteP" class="form-text text-muted">Folosește link-ul pentru a reseta parola.</small>
		</div>
			<button type="submit" name="login-submit" class="btn btn-primary" data-toggle="modal" data-target="#errorsystem">Logare</button>
		</form>
		
      </div>
      <div class="modal-footer bg-dark">
      	
      </div>
    </div>
  </div>
</div>