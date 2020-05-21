<!DOCTYPE html>
<html lang="ro">
<head>
  <title>Test Area</title>
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
  <?php 
  $mata = $_SERVER["PHP_SELF"];
echo ''.$mata.''; ?>
 
            
              <div class="dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </div>
          
          
 
<!-- Main body content -->
<div class="container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
    <div class="card-columns">
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title that wraps to a new line</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
      <div class="card p-3">
        <blockquote class="blockquote mb-0 card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">
            <small class="text-muted">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </small>
          </footer>
        </blockquote>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card bg-primary text-white text-center p-3">
        <blockquote class="blockquote mb-0">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
          <footer class="blockquote-footer text-white">
            <small>
              Someone famous in <cite title="Source Title">Source Title</cite>
            </small>
          </footer>
        </blockquote>
      </div>
      <div class="card text-center">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
      </div>
      <div class="card p-3 text-right">
        <blockquote class="blockquote mb-0">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
          <footer class="blockquote-footer">
            <small class="text-muted">
              Someone famous in <cite title="Source Title">Source Title</cite>
            </small>
          </footer>
        </blockquote>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Main body content -->
<div class="container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
  <section>
    <article>
      <h1 class="display-3">Pagina Temporar indisponibila</h1>
      <p>Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.</p>
      <p>Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.</p></article>
      <blockquote class="blockquote">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
      </blockquote>
    </article>
  </section>
  <section>
    <article>
      <!-- Card Deck -->
      <div class="card-deck">
        <div class="card">
          <img src="images/jumbotron.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="images/jumbotron.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
        <div class="card">
          <img src="images/jumbotron.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
        </div>
      </div>
    </article>
  </section>
  </div>
</div>

<!-- Carousel -->
<div class="bd-example">
  <div id="carousel-index" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-index" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-index" data-slide-to="1"></li>
      <li data-target="#carousel-index" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/jumbotron.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/jumbotron.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images/jumbotron.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
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
</div>


<!-- More Content -->
<div class="container">
  <div class="shadow-lg p-3 mb-5 bg-white rounded">
  <section>
    <article>
      <h1>Display 1</h1>
      <h2>Display 2</h2>
      <h3>Display 3</h3>
      <h4>Display 4</h4>
      <p>Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.</p>
      <p>Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.</p></article>
      <article>
      <blockquote class="blockquote">
        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
      </blockquote>
    </article>
  </section>
  </div>
</div>

</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>