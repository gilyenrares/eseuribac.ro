<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Limba si Literatura Romana</title>
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
<img src="images/banner.jpg" class="img-fluid" alt="Responsive image">
<!-- Main body content -->
<div class="container">
	<div class="shadow-lg p-3 mb-5 bg-white rounded">
	<h1 class="display-3 text-center">Limba și Literatura Română</h1>		
		<section class="m-5">
			<form action="text-reader.php" method="post">
				<input type="hidden" name="location" value="romana">
			Alege Genul Literar:
			<select class="form-control"  id="slct1" name="slct1" onchange="f2nd(this.id,'slct2')">
			  	<option value=""></option>
			  	<option value="epic">Epic</option>
			  	<option value="liric">Liric</option>
			  	<option value="dramatic">Dramatic</option>
			</select>
			<hr>
			Alege Opera Literara:
			<select class="form-control" id="slct2" name="slct2" onchange="f3rd(this.id,'slct3')"></select>
			<hr>
			Alege Eseul:
			<select class="form-control" id="slct3" name="slct3"></select>
			<hr>
			<button type="submit" name="get-document-submit" class="btn btn-outline-primary">Deschide document</button>
			</form>		
		</section>
	<!-- <section>
		<h2>My Phonebook</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<ul id="myUL">
  <li><a href="#">Genul Epic -> Baltagul -> Caracterizare</a></li>
  <li><a href="#">Genul Epic -> Baltagul -> TEMA SI VIZIUNEA DESPRE LUME</a></li>

  <li><a href="#">Billy</a></li>
  <li><a href="#">Bob</a></li>

  <li><a href="#">Calvin</a></li>
  <li><a href="#">Christina</a></li>
  <li><a href="#">Cindy</a></li>
</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>	
	</section> -->	
	<section>
		<article>
			<p>Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.</p>
			<p>Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.</p></article>
			<article>
			<blockquote class="blockquote">
  			<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  			<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
			</blockquote>
		</article>
	</section>
	
	<section>
		<article>
			
		</article>
	</section>
	</div>
</div>
<!-- Scripts -->
<script>
function f2nd(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "epic"){
		var optionArray = ["|","baltagul|Baltagul"];
	} else if(s1.value == "liric"){
		var optionArray = ["|"];
	} else if(s1.value == "dramatic"){
		var optionArray = ["|"];
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
<script>
	function f3rd(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	switch(s1.value){
		case "baltagul":
		var optionArray = ["|","caracterizare|CARACTERIZAREA PERSONAJULUI VITTORIA LIPAN","relatia|RELATIA INTRE DOUA PERSONAJE","tema|TEMA SI VIZIUNEA DESPRE LUME"];
		break;
		default:
		var optionArray = ["|"];
		break;
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