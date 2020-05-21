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
	<div class="shadow-lg border-top border-primary p-3 bg-white rounded">
	<section>
		<article>
			<blockquote class="blockquote">
  			<p class="mb-0 text-cal text-center">Învăţătura fără gândire este muncă irosită, gândirea fără învăţătură este primejdioasă.</p>
  			<div id="video"></div>
  			<footer class="blockquote-footer text-right">Confucius <cite title="Source Title">Învăţăturile lui Confucius</cite></footer>
			</blockquote>
		</article>
	</section>
	</div>
</div>
<div class="container mt-5">
	<div class="shelf-banner"></div>
	<!-- 16:9 aspect ratio -->
		<div class="embed-responsive embed-responsive-16by9">
	  		<iframe src="https://www.youtube.com/embed/f6h0JIUyi04" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	<div class="shelf-banner"></div>
	<!-- scroll links -->
	<div class="shadow-lg p-3 bg-white rounded">
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
	        <a href="article.php?essayName=Programa%20Bacalaureat%20Limba%20si%20Literatura%20Română%202019-2020&essayTimeStamp=2020-05-16%2017:43:10" target="_blank"><img src="images/old-scroll.png" class="d-block ml-auto mr-auto w-75" alt="...">
	        <div class="carousel-caption d-md-block">
      			<h2>Programa la <br> Romană</h2>
	        </div>
	        </a>
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
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>