<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Resetează parola</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>
<!-- Main body content -->
<div class="parallax">
  	<div id='stars'></div>
  	<div id='stars2'></div>
  	<div id='stars3'></div>
  	<!-- Title -->
  	<div class="container border-top border-danger p-3 mt-5 bg-hologram rounded">
    	<h1 id='title'><span>ESEURIBAC</span><br><span>Resetare Parolă</span></h1>
  	</div>
	<div class="container border-top border-primary p-3 mt-5 bg-hologram text-white rounded">
	<form action="includes/reset-request.inc.php" method="post" >
		<div class="form-group">
			<label for="AdresaEmail">Introdu adresa de Email</label>
		    <input type="email" name="email" class="form-control" id="AdresaEmail" aria-describedby="noteE" placeholder="Enter email" required="required">
		    <small id="noteE" class="form-text text-muted">Email-ul introdus trebuie să fie acela folosit la crearea contului.</small>
		</div>
		<button type="submit" name="reset-request-submit" class="btn btn-primary">Trimite Cererea</button>
	</form>
	</div>
	<!-- The end -->
  	<div class="container text-center mt-5 bg-transparent rounded">.</div>
</div>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>
