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
<div class="top-banner">
	<h1 class="display-3 text-center text-white">Limba și Literatura Română</h1>
</div>
<!-- Main body content -->
<div class="container">
	<div class="shadow-lg p-3 mb-5 bg-white rounded">
	<h1 class="display-3 text-center">Limba și Literatura Română</h1>		
		<section class="m-5">
			<form action="text-reader.php" method="post">
				<input type="hidden" name="location" value="romana">
			<span for="slct1">Alege Categoria:</span>
			<select class="form-control"  id="slct1" name="slct1" onchange="f2nd(this.id,'slct2')" onclick="f2nd(this.id,'slct2')" >
			  	<option value="" selected="selected"></option>
			  	<option value="programa">Programa de Bacalaureat</option>
			  	<option value="epic">Genul Epic (Eseuri)</option>
			  	<option value="liric">Genul Liric (Eseuri)</option>
			  	<option value="dramatic">Genul Dramatic (Eseuri)</option>
			</select>
			<hr>
			<span for="slct2">Alege Sub-Categoria:</span>
			<select class="form-control" id="slct2" name="slct2" onchange="f3rd(this.id,'slct3')"></select>
			<hr>
			<span for="slct3">Alege Documentul:</span>
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
	if(s1.value == "programa"){
		var optionArray = ["|","2019|Programa la Limba și Literatura Română 2019"];
	} else if(s1.value == "epic"){
		var optionArray = ["|","baltagul|Baltagul","ion|Ion","moara|Moara cu Noroc","alexandru|Alexandru Lăpuşneanul","ultima|Ultima Noapte de Dragoste, întâia Noapte de Război","enigma|Enigma Otiliei","morometii|Moromeții","zmeura|Zmeură de Câmpie"];
	} else if(s1.value == "liric"){
		var optionArray = ["|","romantica|Poezia Romantică","simbolista|Poezia simbolistă","modernista-expresionista|Poezie modernistă şi expresionistă","modernista|Poezie modernistă","neomodernista|Poezie neomodernistă","traditionalista|Poezia tradiționalistă"];
	} else if(s1.value == "dramatic"){
		var optionArray = ["|","iona|Iona","scrisoare|O scrisoare pierdută"];
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
		var optionArray = ["|","caracterizare|Caracterizarea personajului Vitoria Lipan","relatia|Relația între două personaje","tema|Tema și viziunea despre lume"];
		break;
		case "ion":
		var optionArray = ["|","caracterizare|Caracterizarea personajului Ion","relatia|Relația între două personaje","tema|Tema și viziunea despre lume"];
		break;
		case "moara":
		var optionArray = ["|","caracterizare|Caracterizarea personajului","relatia|Relația între două personaje","tema|Tema și viziunea despre lume"];
		break;
		case "alexandru":
		var optionArray = ["|","caracterizare|Caracterizarea personajului Alexandru Lăpuşneanul","relatia|Relația între două personaje","tema|Tema și viziunea despre lume"];
		break;
		case "ultima":
		var optionArray = ["|","caracterizare|Caracterizarea personajului Gheorghidiu","relatia|Relația între două personaje","tema|Tema și viziunea despre lume"];
		break;
		case "enigma":
		var optionArray = ["|","caracterizare|Caracterizarea personajului Felix","relatia|Relația între două personaje","tema|Tema și viziunea despre lume"];
		break;
		case "morometii":
		var optionArray = ["|","caracterizare|Caracterizarea personajului Ilie Moromete","relatia|Relația între două personaje","tema|Tema și viziunea despre lume"];
		break;
		case "zmeura":
		var optionArray = ["|","eseu-sintetizat|Eseu Sintetizat","tema|Tema și viziunea despre lume"];
		break;
		case "romantica":
		var optionArray = ["|","luceafarul|Luceafărul","floare|Foare Albastră"];
		break;
		case "simbolista":
		var optionArray = ["|","plumb|Plumb","lacustra|Lacustră"];
		break;
		case "modernista-expresionista":
		var optionArray = ["|","corola|Eu nu strivesc corola de minuni a lumii"];
		break;
		case "modernista":
		var optionArray = ["|","flori|Flori de mucigai","testament|Testament","riga|Riga Crypto și lapona Enigel"];
		break;
		case "neomodernista":
		var optionArray = ["|","leoaica|Leoaică tânără, iubirea..."];
		break;
		case "traditionalista":
		var optionArray = ["|","aci|Aci sosi de vremuri"];
		break;
		case "iona":
		var optionArray = ["|","caracterizare|Caracterizarea personajului Iona","tema|Tema și viziunea despre lume"];
		break;
		case "scrisoare":
		var optionArray = ["|","caracterizare|Caracterizare de personajului Ştefan Tipatescu","tema|Tema și viziunea despre lume"];
		break;
		case "2019":
		var optionArray = ["|Apasa pe deschide document"];
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