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
  
<!-- Generated markup by the plugin -->
<div class="body w-100 h-100">
  <div class="position-absolute w-100">
    <div class="container border-top border-danger p-3 mt-5 mx-auto bg-hologram rounded">
      <h1 id='title'><span>ESEURIBAC</span><br><span>Bun venit!</span></h1>
    </div>
  </div>
  <div id="drag-container">
    <img class="bg-primary" src="images/logo.png" data-toggle="tooltip" title="Salut, alege unde vrei să ajungi!" alt="Eseuribac logo">
    <div id="spin-container">
	    <!-- Add your images (or video) here -->
	    <a href="romana.php" ><img src="images/romana.png" alt="Poster pentru limba și literatura română"></a>
	    <a href="article.php?essayName=Programa%20Bacalaureat%20Limba%20si%20Literatura%20Română%202019-2020&essayTimeStamp=2020-05-16%2017:43:10"  role="button" target="_blank"><img class="bg-black" src="images/programa-romana.png" alt="Poster pentru procrama la limba și literatura română"></a>
	    <a href="istorie.php"  role="button"><img src="images/istorie.png" alt="Poster pentru istorie"></a>
	    <a href="article.php?essayName=Programa%20Bacalaureat%20la%20Istorie%20pentru%20anul%202019-2020&essayTimeStamp=2020-05-17%2008:10:27"  role="button" target="_blank"><img class="bg-black" src="images/programa-istorie.png" alt="Poster pentru programa la istorie"></a>
      <a href="fizica.php"  role="button"><img src="images/fizica.png" alt="Poster pentru fizica"></a>
	    <a href="la-cafea.php"  role="button"><img src="images/la-cafea.png" alt="Poster pentru pagina, la cafea"></a>
	    <a href="despre-noi.php"  role="button"><img src="images/despre-noi.png" alt="Poster pentru pagina, despre noi"></a>
	    <a href="contact.php"  role="button"><img src="images/contact.png" alt="Poster pentru pagina de contact"></a>
	    <a href="" role="button" data-toggle="modal" data-target="#videoModal"><img src="images/video.png" alt="Poster pentru link spre video"></a>
	    <!-- Text at center of ground -->
	    <p>Eseuribac.ro</p>
  	</div>
  	<div id="ground"></div>
  </div>
  <!-- Music Container -->
  <div id="music-container"></div>
  </div>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
<script type="text/javascript" src="js/index.js"></script>
</html>