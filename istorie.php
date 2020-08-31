<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Istorie</title>
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
<?php
  include 'sections/navigation.sec.php'; 
  $_SESSION['currentSubject'] = 'Istorie';
?>

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
              <h3 class="text-center p-3"><strong>Istorie</strong></h3>
              <h3>"Cei ce nu-şi pot aminti istoria sunt condamnaţi să o repete."</h3>
              <h3 class="blockquote-footer text-right mr-5">George Santayana</h3>
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
              <h3><strong>Cuprins</strong></h3>
              <h6> Autonomii Locale ----------------------------------------------- 1.</h6>
              <br>
              <h6> Romanitatea Românilor --------------------------------------- 2. </h6>
              <br>
              <h6>‍ Etnogeneza Românească între Știință și Politică ------ 3.</h6>
              <br>
              <h6> Evul Mediu -------------------------------------------------------- 4.</h6>
              <br>
              <h6> Politica Externa a Voievozilor Români --------------------- 5.</h6>
              <br>
              <h6> Consecințele Luptelor Voievozilor Români --------------- 6. </h6>
              <br>
              <h6> "autonomii|Autonomii Locale",<br>"romanitatea|Romanitatea Românilor",<br>"etnogeneza|Etnogeneza Românească între Știință și Politică",<br>"evul|Evul Mediu",<br>"consecinte|Consecințele Luptelor Voievozilor Români",<br>"politica|Politica Externa a Voievozilor Români"</h6>
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
    <h1 id='title'><span>ESEURIBAC</span><br><span>Istorie</span></h1>
  </div>
  <!-- Search bar -->
  <div class="container border-top border-primary p-3 mt-5 bg-hologram text-white rounded">
		<form action="cautare.php" class=" m-2 d-flex flex-row" method="POST">
      <input class="form-control" type="text" name="search" placeholder="Istorie">
      <input type="hidden" name="subject" value="Istorie">
      <button class="btn btn-outline-success ml-2" name="submit-search" type="submit">Caută</button>
    </form>
  <!-- Istorie Toolbar -->
    <div class="btn-group btn-group-lg m-2 d-flex" role="group" aria-label="Toolbar">
      <button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="#lesson" aria-expanded="true" aria-controls="lesson">Lecții</button>
      <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#mock" aria-expanded="false" aria-controls="mock">Variante</button> 
    </div>
  </div>
  <!-- Acordion interface -->
<div class="accordion" id="interface">
<!-- Lesson interface -->
  <div class="card bg-transparent collapse show" id="lesson" area-labelledby="Lecții de Fizică" data-parent="#interface">
  <!-- Content -->
    <div class="container border-top border-success p-3 mt-5 bg-hologram rounded">
      <h1 class="text-center text-white">Lecții Istorie</h1>
    <!-- Lectii Toolbar -->
      <div class="btn-group btn-group-lg m-2 d-flex" role="group" aria-label="Toolbar">
        <button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="#lesson9" aria-expanded="true" aria-controls="lesson9">IX</button>
        <button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="#lesson10" aria-expanded="true" aria-controls="lesson10">X</button>
        <button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="#lesson11" aria-expanded="true" aria-controls="lesson11">XI</button>
        <button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="#lesson12" aria-expanded="true" aria-controls="lesson12">XII</button> 
      </div>
    <!-- Acordion interface -->
      <div class="accordion" id="subinterface">
      <!-- Lesson IX interface -->
        <div class="card bg-transparent collapse show" id="lesson9" area-labelledby="Lecții de Fizică clasa IX" data-parent="#subinterface">
          <h1 class="text-center text-white">Clasa a IX-a</h1>
              <?php
              $_SESSION['currentClass'] = 'IX';
              include'includes/get-lesson.inc.php'; ?>
        </div>
      <!-- Lesson X interface -->
        <div class="card bg-transparent collapse" id="lesson10" area-labelledby="Lecții de Fizică clasa X" data-parent="#subinterface">
          <h1 class="text-center text-white">Clasa a X-a</h1>
              <?php
              $_SESSION['currentClass'] = 'X';
              include'includes/get-lesson.inc.php'; ?>
        </div> 
      <!-- Lesson XI interface -->
        <div class="card bg-transparent collapse" id="lesson11" area-labelledby="Lecții de Fizică clasa XI" data-parent="#subinterface">
          <h1 class="text-center text-white">Clasa a XI-a</h1>
              <?php
              $_SESSION['currentClass'] = 'XI';
              include'includes/get-lesson.inc.php'; ?>
        </div> 
      <!-- Lesson XII interface -->
        <div class="card bg-transparent collapse" id="lesson12" area-labelledby="Lecții de Fizică clasa XII" data-parent="#subinterface">
          <h1 class="text-center text-white">Clasa a XII-a</h1>
              <?php
              $_SESSION['currentClass'] = 'XII';
              include'includes/get-lesson.inc.php'; ?>
        </div> 

      </div>
    </div>
  </div>
<!-- Mock Test Interface -->
  <div class="card bg-transparent collapse" id="mock" aria-labelledby="editLesson" data-parent="#interface">
  <!-- Content -->
    <div class="container border-top border-primary p-3 mt-5 bg-hologram rounded">
      <h1 class="text-center text-white">Variante Istorie</h1>
      <?php include'includes/get-variant.inc.php'; ?>
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