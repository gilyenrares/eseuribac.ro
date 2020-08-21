<!DOCTYPE html>
<html lang="ro" style="color: #262626">
<head>
  <title>Eseuri Bac | PDF Viewer</title>
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
 <?php include'sections/error-system.sec.php'; ?>
<body class="bg-secondary">
	<nav class="navbar navbar-dark bg-dark shadow sticky-top border-bottom border-primary">
		<div class="navbar-brand">
	    	<img src="images/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
	    	<span class="navbar-brand mb-0 h1">EseuriBac.ro</span>
	    </div>
	</nav>

<div class="embed-responsive embed-responsive-custom">
  <iframe class="embed-responsive-item" src="documents/matematica/m1/2008/variante/varianta_001.pdf" allowfullscreen></iframe>
</div>
</body>
<!-- Footer -->
<footer class="fab-footer border-top border-primary pt-2">
<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <p id="Copyright"></p>
    </div>
  </div>
</div>
</footer>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
  $('#errorSystem').modal('show');
</script>
<script>
  document.getElementById("Copyright").innerHTML ="Copyright &copy;2019-"+ new Date().getFullYear()+' <a href="https://rbg-dev.com" target="_blank" rel="noreferrer"><img class="mr-2" src="images/rbg-logo.png" width="38" height="19" alt="Logoul rbg-dev.com">RBG-DEV.COM</a> | All rights reserved.</br>Content Owner: <a href="https://eseuribac.ro" target="_blank">EseuriBac.ro</a>';
</script>

</html>