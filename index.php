<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Eseuri Bac</title>
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
	<h1 class="display-3 text-center text-white">Eseuri Bac</h1>
</div>
<!-- Main body content -->
<div class="container mt-5">
	<div class="shelf-banner"></div>
	<div class="shadow-lg p-3 bg-white rounded">
	<section>
		<article>
			<blockquote class="blockquote">
  			<p class="mb-0 text-cal">Învăţătura fără gândire este muncă irosită, gândirea fără învăţătură este primejdioasă.</p>
  			<footer class="blockquote-footer text-right">Confucius <cite title="Source Title">Învăţăturile lui Confucius</cite></footer>
			</blockquote>
		</article>
	</section>
	<!-- Carousel top links -->
	<section class="my-5">
	  <div id="carousel-index" class="carousel slide" data-ride="carousel">
	    <ol class="carousel-indicators">
	      <li data-target="#carousel-index" data-slide-to="0" class="active"></li>
	      <li data-target="#carousel-index" data-slide-to="1"></li>
	      <li data-target="#carousel-index" data-slide-to="2"></li>
	      <li data-target="#carousel-index" data-slide-to="3"></li>
	    </ol>
	    <div class="carousel-inner">
	      <div class="carousel-item active">
	        <img src="images/old-scroll.png" class="d-block ml-auto mr-auto w-75" alt="...">
	        <div class="carousel-caption d-md-block">
	          <h2>Programa la Istorie</h2>
	        </div>
	      </div>
	      <div class="carousel-item">
	        <button class="btn" type="submit" form="pr" name="get-document-submit"><img src="images/old-scroll.png" class="d-block ml-auto mr-auto w-75" alt="...">
	        <div class="carousel-caption d-md-block">
      			<h2>Programa la <br> Romană</h2>
      			<form action="text-reader.php" id="pr" method="post">
      				<input type="hidden" name="location" value="romana">
      				<input type="hidden" name="slct1" value="programa">
      				<input type="hidden" name="slct2" value="2019">
      			</form>
	        </div>
	        </button>
	      </div>
	      <div class="carousel-item">
	        <a href="romana.php"><img src="images/old-scroll.png" class="d-block ml-auto mr-auto w-75" alt="...">
	        <div class="carousel-caption d-md-block">
	          <h2>Eseuri Romană</h2>
	        </div>
	        </a>
	      </div>
	      <div class="carousel-item">
	        <a href="istorie.php"><img src="images/old-scroll.png" class="d-block ml-auto mr-auto w-75" alt="...">
	        <div class="carousel-caption d-md-block">
	          <h2>Eseuri Istorie</h2>
	        </div>
	        </a>
	      </div>
	    </div>
	    <a class="carousel-control-prev" href="#carousel-index" role="button" data-slide="prev">
	      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#carousel-index" role="button" data-slide="next">
	      <span class="carousel-control-next-icon" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</section>
	</div>
</div>
	<!-- How to --> 
<div class="container mb-5">
	<div class="shelf-banner"></div>
	<div class="shadow-lg p-3 bg-white rounded">	
	<section>	
	<img class="container-fluid" src="images/how-to.jpg">	
	</section>
	</div>
	<div class="shelf-banner"></div>
		<!-- Videoclip de prezentare -->
	<section></section>
</div>



<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>