<!DOCTYPE html>
<html lang="ro">
<head>
	<title>La Cafea</title>
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
<body class="bg-body">
<!-- Navigation -->
<?php include 'sections/navigation.sec.php';
include'sections/category-modal.sec.php';
 ?>

<body>
<div class="body w-100 h-100">
  <div class="position-absolute w-100">
    <div class="container border-top border-danger p-3 mt-5 mx-auto bg-hologram rounded">
      <h1 id='title'><span>ESEURIBAC</span><br><span>La Cafea</span></h1>
    </div>
  </div>
  <div id="drag-container">
    <div id="spin-container">
    <!-- Add your images (or video) here -->
    <h1 class="display-4 text-white">CLASA</h1>
    <?php include'includes/la-cafea.inc.php' ?>
    <!-- Text at center of ground -->
    <p>Eseuribac.ro</p>
  </div>
  <div id="ground"></div>
  </div>

  <div id="music-container"></div>
  </div>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
<script type="text/javascript" src="js/la-cafea.js"></script>
</html>