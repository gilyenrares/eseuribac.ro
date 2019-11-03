<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Înregistrează-te</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>
<div class="container">
	<div class="shadow-lg p-3 mb-5 bg-white rounded">
	<form action="includes/signup.inc.php" method="post" >
		<div class="form-group">
			<label for="AdresaEmail">Adresa de Email</label>
		    <input type="email" name="email" class="form-control" id="AdresaEmail" aria-describedby="noteE" placeholder="Enter email" required="required">
		    <small id="noteE" class="form-text text-muted">Email-ul tău va rămâne privat.</small>
		</div>
		<div class="form-group">
		    <label for="numeUtilizator">Numele de utilizator</label>
		    <input type="Username" name="user" class="form-control" id="numeUtilizator" aria-describedby="noteU" placeholder="Aliasul tău/ Username" required="required">
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
		<!-- <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div> -->
		<button type="submit" name="signup-submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
</div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>
