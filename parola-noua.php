<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Setează Noua Parolă</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>
<!-- Main body content -->
<?php 
 $selector = $_GET["selector"];
 $validator = $_GET["validator"];
 if (empty($selector) || empty($validator)) {
 	echo "Could not validate your request";
	 }else{
 	if (ctype_xdigit($selector)!== false && ctype_xdigit($validator)!== false) { ?>
<div class="container">
	<div class="shadow-lg p-3 mb-5 bg-white rounded">
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
</div>
<?php 
	}
 }
?>

</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php' ?>
</html>