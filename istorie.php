<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Istorie</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>
<!-- Jumbotron -->
<div class="top-banner">
	<h1 class="display-3 text-center text-white">Istorie</h1>
</div>
<!-- Main body content -->
<div class="container mt-5">
	<div class="shadow-lg p-3 bg-white rounded">
		<h1 class="display-3 text-center">Istorie</h1>
		<blockquote class="blockquote">
  		<p class="mb-0 text-cal text-center">"Cei ce nu-şi pot aminti istoria sunt condamnaţi să o repete."</p>
  		<div id="video"></div>
  		<footer class="blockquote-footer text-right mr-5">George Santayana <cite title="Source Title"></cite></footer>
		</blockquote>	
	</div>
</div>
<div class="container">
	<div class="shadow-lg p-3 my-5 bg-white rounded">
		<section class="m-5">
			<form action="text-reader.php" method="post">
				<input type="hidden" name="location" value="istorie">
				<label for="slct1">Alege Categoria:</label>
				<select class="form-control"  id="slct1" name="slct1" onchange="f2nd(this.id,'slct2')" required="required">
				  	<option value="" selected="selected"></option>
				  	<option value="lectii">Lecţii</option>
				</select><hr>
				<label for="slct2">Alege Documentul:</label>
				<select class="form-control" id="slct2" name="slct2" required="required"></select><hr>
				<button type="submit" name="get-document-submit" class="btn btn-outline-primary">Deschide document</button>
			</form>		
		</section>
	</div>
</div>
<!-- Scripts -->
<script>
function f2nd(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "lectii"){
		var optionArray = ["|","autonomii|Autonomii Locale","romanitatea|Romanitatea Românilor","etnogeneza|Etnogeneza Românească între Știință și Politică","evul|Evul Mediu","consecinte|Consecințele Luptelor Voievozilor Români","politica|Politica Externa a Voievozilor Români"];
	} 
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>