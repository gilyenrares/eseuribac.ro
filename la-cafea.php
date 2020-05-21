<!DOCTYPE html>
<html lang="ro">
<head>
	<title>La Cafea</title>
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
  <h1 class="display-3 text-center text-white">La Cafea</h1>
</div>
<!-- Main body content -->
<div class="container mt-5">
  <div class="shadow-lg border-top border-primary p-3 bg-white rounded">
    <h1 class="display-3 text-center">La Cafea</h1>
    <blockquote class="blockquote">
      <p class="mb-0 text-cal text-center">"Nu te agita atât, lucrurile cele mai bune se petrec atunci când le aștepti mai putin."</p>
      <div id="video"></div>
      <footer class="blockquote-footer text-right mr-5">Gabriel José García Márquez<cite title="Source Title"></cite></footer>
    </blockquote> 
  </div>
</div>
<div class="container">
  <div class="shadow-lg p-3 my-5 bg-white rounded">
    <h2 class="text-center w-100">Categoriile Principale</h2>
    <div class="row">
        <?php include'includes/la-cafea.inc.php'; ?>
    </div> 
  </div>
</div>

</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>