<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Forum</title>
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
<div class="parallax">
  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <!-- Title -->
  <div class="container border-top border-danger p-3 mt-5 bg-hologram rounded">
    <h1 id='title'><span>ESEURIBAC</span><br><span>Forum</span></h1>
  </div>
  <!-- Quote -->
  <div class="container border-top border-primary p-3 mt-5 bg-hologram text-white rounded">
    <blockquote class="blockquote">
      <p class="mb-0 text-cal text-center">"Nu te agita atât, lucrurile cele mai bune se petrec atunci când le aștepti mai putin."</p>
      <div id="video"></div>
      <footer class="blockquote-footer text-right mr-5">Gabriel José García Márquez<cite title="Source Title"></cite></footer>
    </blockquote> 
  </div>
  <!-- Content -->
  <div class="container border-top border-primary p-3 mt-5 bg-hologram text-white rounded">
    <div class="row">
      <?php include'includes/forum.inc.php'; ?>
    </div>
  </div>
  <!-- The end -->
  <div class="container text-center mt-5 bg-transparent rounded">.</div>
</div>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>