<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Setează Noua Parolă</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
	<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-167581094-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-167581094-1');
  </script>

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
    <h1 id='title'><span>ESEURIBAC</span><br><span>Parolă Nouă</span></h1>
  </div>
<?php 
 $selector = $_GET["selector"];
 $validator = $_GET["validator"];
 if (empty($selector) || empty($validator)) {
 	echo '<div class="container border-top border-primary p-3 mt-5 bg-hologram text-white rounded"><p>Could not validate your request</p>
  </div>';
	 }else{
 	if (ctype_xdigit($selector)!== false && ctype_xdigit($validator)!== false) { ?>
	<div class="container border-top border-primary p-3 mt-5 bg-hologram text-white rounded">
	<form action="includes/reset-password.inc.php" method="post" >
		<input type="hidden" name="selector" value="<?php echo $selector ?>">
		<input type="hidden" name="validator" value="<?php echo $validator ?>">
		<div class="form-group">
		    <label for="parola">Introdu o nouă parolă</label>
		    <input type="password" name="pwd" class="form-control" id="parola" aria-describedby="noteP" placeholder="Parolă" required="required">
		    <small id="noteP" class="form-text text-muted">Recomandare: Utilizează litere, cifre și caractere speciale.</small>
		</div>
		<div class="form-group">
		    <label for="parolaR">Reintrodu noua parolă</label>
		    <input type="password" name="pwd-repeat" class="form-control" id="parolaR" aria-describedby="noteP" placeholder="Parolă" required="required">
		    <small id="noteP" class="form-text text-muted">Trebie sa fie indentică cu parola introdusă mai sus.</small>
		</div>
		<button type="submit" name="reset-password-submit" class="btn btn-primary">Actualizează Parola</button>
	</form>
	</div>
	<!-- The end -->
  	<div class="container text-center mt-5 bg-transparent rounded">.</div>
</div>
<?php 
	}
 }
?>

</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php' ?>
</html>