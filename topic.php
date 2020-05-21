<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Topic</title>
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
<div class="container mt-5">
  <div class="shadow-lg border-top border-primary p-3 bg-white rounded">
    <h1 class="display-3 text-center">Topic</h1>
    <blockquote class="blockquote">
      <p class="mb-0 text-cal text-center">"Nu te agita atât, lucrurile cele mai bune se petrec atunci când le aștepti mai putin."</p>
      <div id="video"></div>
      <footer class="blockquote-footer text-right mr-5">Gabriel José García Márquez<cite title="Source Title"></cite></footer>
    </blockquote> 
  </div>
</div>
<div class="container">
  <div class="shadow-lg p-3 my-5 bg-white rounded">
    <?php include'includes/topic.inc.php'; ?>
  </div>
</div>

</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>