<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Eseuri Bac</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="Eseuribac este un website dedicat învățământului interactiv în mediul online.">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>
<body>
  
<!-- 3D Jumbotron -->
<div class="scene">
    <div class="book-wrap">
      <div class="left-side">
        <div class="book-cover-left"></div>
        <div class="layer1">
          <div class="page-left"></div>
        </div>
        <div class="layer2">
          <div class="page-left"></div>
        </div>
        <div class="layer3">
          <div class="page-left"></div>
        </div>
        <div class="layer4">
          <div class="page-left"></div>
        </div>
        <div class="layer-text">
          <div class="page-left-2">
            <div class="corner"></div>
            <div class="corner2"></div>
            <div class="corner-fold"></div>
            <div class="page-text w-richtext">
              <h3 class="text-center p-3"><strong>Eseuri Bac</strong></h3>
              <h3>"Limba este întâiul mare poem al unui popor."</h3>
              <h3 class="blockquote-footer text-right mr-5">Lucian Blaga</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="center"></div>
      <div class="right-side">
        <div class="book-cover-right"></div>
        <div class="layer1">
          <div class="page-right"></div>
        </div>
        <div class="layer2 right">
          <div class="page-right"></div>
        </div>
        <div class="layer3 right">
          <div class="page-right"></div>
        </div>
        <div class="layer4 right">
          <div class="page-right"></div>
        </div>
        <div class="layer-text right">
          <div class="page-right-2">
            <div class="page-text">
              <h3><strong>Specii Literare</strong></h3>
              <h6>1. Poezia romantică -------------------------- Mihai Eminescu</h6>
              <h6>2. Poezia simbolistă ------------------------- George Bacovia</h6>
              <h6>‍3. Poezie modernista si expresionista ------ Lucian Blaga</h6>
              <h6>4. Poezie modernista ------------ Tudor Arghezi, Ion Barbu</h6>
              <h6>5. Poezie neomodernista ----------------- Nichita Stănescu</h6>
              <h6>6. Poezia tradiționalistă ------------------------------- Ion Pilat</h6>
              <h6>7. Nuvelă psihologică, realistă ------------------- Ion Slavici</h6>
              <h6>8. Roman tradițional și obiectiv -------- Mihail Sadoveanu</h6>
              <h6>9. Roman realist-obiectiv, tradițional ----- Liviu Rebreanu</h6>
              <h6>10. Roman modern --------------------------- Camil Petrescu</h6>
              <h6>11. Roman de tip balzacian --------------- Camil Pestrescu</h6>
              <h6>12. Roman traditional, obiectiv, realist ------- Marin Preda</h6>
              <h6>13. Basm -------------------------------------------- Ion Creangă</h6>
              <h6>14. Nuvelă istorică ----------------------- Costache Negruzzi</h6>
              <h6>15. Roman postmodern --------------------- Mircea Nedelciu</h6>
              <h6>16. Roman postbelic --------------------------- Adriana Babeți</h6>
              <h6>17. Parabolă dramatică ----------------------- Marin Sorescu</h6>
              <h6>18. Comedie ------------------------------- Ion Luca Caragiale</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Main body content -->
<div class="parallax">
  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <!-- Title -->
  <div class="container border-top border-danger p-3 mt-5 bg-hologram rounded">
    <h1 id='title'><span>ESEURIBAC</span><br><span>Bun venit!</span></h1>
  </div>
  <!-- Search bar -->
  <div class="container border-top border-primary p-3 mt-5 bg-hologram text-white rounded">
		<form action="cautare.php" class=" m-2 d-flex flex-row" method="POST">
      	<input class="form-control" type="text" name="search" placeholder="Cautare Generală">
      	<input type="hidden" name="subject" value="Limba și Literatura Română">
      	<button class="btn btn-outline-success ml-2" name="submit-search" type="submit">Caută</button>
    </form>
	
		<!-- Home Toolbar -->
		<div class="btn-group btn-group-lg m-2 d-flex" role="group" aria-label="Toolbar">
      <button class="btn btn-outline-warning" type="button" data-toggle="collapse" data-target="#subject" aria-expanded="true" aria-controls="subject">Materii</button>
      <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#didyou
			" aria-expanded="false" aria-controls="didyou">Stiați ca...?</button> 
    </div>
  </div>
	<!-- Acordion interface -->
	<div class="accordion" id="interface">
		<!-- Subject Interface -->
		<div class="card bg-transparent collapse show" id="subject" aria-labelledby="editLesson" data-parent="#interface">
			<!-- Content -->
				<div class="container border-top border-warning p-3 mt-5 bg-hologram rounded">
					<h1 class="text-center text-white">Materii</h1>
					<div class="row mb-5">
						<ul class="align">
							<?php include'includes/subject-open.inc.php'; ?> 
						</ul>	
					</div>
				</div>
		</div>

		<!-- Did you know Interface -->
			<div class="card bg-transparent collapse" id="didyou" aria-labelledby="editLesson" data-parent="#interface">
			<!-- Content -->
				<div class="container border-top border-primary p-3 mt-5 bg-hologram rounded">
					<h1 class="text-center text-white">Stiați ca:</h1>
					<div class="row mb-5">
						<ul class="align">
							<?php include'includes/subject-open.inc.php'; ?> 
						</ul>	
					</div>
				</div>
			</div>
	</div>
  <!-- The end -->
  <div class="container text-center mt-5 bg-transparent rounded">.</div>
</div>	

</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>