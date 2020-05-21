<!DOCTYPE html>
<html lang="ro">
<head>
  <title>Article Reader</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
 <?php include'includes/error-system.inc.php'; ?>
<body class="bg-secondary">
	<nav class="navbar navbar-dark bg-dark shadow sticky-top border-bottom border-primary">
		<div class="navbar-brand">
	    	<img src="images/logo.png" width="50" height="50" class="d-inline-block align-top" alt="">
	    	<span class="navbar-brand mb-0 h1">EseuriBac.ro</span>
	    </div>
	</nav>

<div class="container w-75">
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