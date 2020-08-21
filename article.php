<!DOCTYPE html>
<html lang="ro">
<head>
  <title>Article Reader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <!-- Mathjax -->
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js"></script>
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

<div class="col-sm-12 col-md-10 col-lg-8 ml-auto mr-auto">
  <div class="shadow-lg m-2 mb-5 bg-white rounded">
      <?php include 'includes/article-open.inc.php'; ?>
  </div>
</div>
<button class="fab-plus btn btn-light rounded-circle p-1" id="zoomIn"><img src="images/plus.png" height="30" width="30"></button>
<button class="fab-minus btn btn-light rounded-circle p-1" id="zoomOut"><img src="images/minus.png" height="30" width="30"></button>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
<!-- Scripts -->
<script>
  $(function() {
  $("#zoomIn").click(function() {
    $("div").children().each(function() {
      var size = parseInt($(this).css("font-size"));
      size = size + 1 + "px";
      $(this).css({
        'font-size': size
      });
    });
  });
});
$(function() {
  $("#zoomOut").click(function() {
    $("div").children().each(function() {
      var size = parseInt($(this).css("font-size"));
      size = size - 1 + "px";
      $(this).css({
        'font-size': size
      });
    });
  });
});
</script>
</html>