<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Istorie</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>

<!-- 3D Jumbotron -->
<div class="scene">
    <div class="book-wrap">
      <div class="left-side">
        <div class="book-cover-left"></div>
        <div class="layer1">
          <div class="page-left"></div>
        </div>
        <div class="layer2">
          <div class="page-left"></div>
        </div>
        <div class="layer3">
          <div class="page-left"></div>
        </div>
        <div class="layer4">
          <div class="page-left"></div>
        </div>
        <div class="layer-text">
          <div class="page-left-2">
            <div class="corner"></div>
            <div class="corner2"></div>
            <div class="corner-fold"></div>
            <div class="page-text w-richtext">
              <h3 class="text-center p-3"><strong>Istorie</strong></h3>
              <h3>"Cei ce nu-şi pot aminti istoria sunt condamnaţi să o repete."</h3>
              <h3 class="blockquote-footer text-right mr-5">George Santayana</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="center"></div>
      <div class="right-side">
        <div class="book-cover-right"></div>
        <div class="layer1">
          <div class="page-right"></div>
        </div>
        <div class="layer2 right">
          <div class="page-right"></div>
        </div>
        <div class="layer3 right">
          <div class="page-right"></div>
        </div>
        <div class="layer4 right">
          <div class="page-right"></div>
        </div>
        <div class="layer-text right">
          <div class="page-right-2">
            <div class="page-text">
              <h3><strong>Cuprins</strong></h3>
              <h6> Autonomii Locale ----------------------------------------------- 1.</h6>
              <br>
              <h6> Romanitatea Românilor --------------------------------------- 2. </h6>
              <br>
              <h6>‍ Etnogeneza Românească între Știință și Politică ------ 3.</h6>
              <br>
              <h6> Evul Mediu -------------------------------------------------------- 4.</h6>
              <br>
              <h6> Politica Externa a Voievozilor Români --------------------- 5.</h6>
              <br>
              <h6> Consecințele Luptelor Voievozilor Români --------------- 6. </h6>
              <br>
              <h6> "autonomii|Autonomii Locale",<br>"romanitatea|Romanitatea Românilor",<br>"etnogeneza|Etnogeneza Românească între Știință și Politică",<br>"evul|Evul Mediu",<br>"consecinte|Consecințele Luptelor Voievozilor Români",<br>"politica|Politica Externa a Voievozilor Români"</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Main body content -->

<div class="container">
	<div class="shadow-lg border-top border-primary p-3 my-5 bg-white rounded">
		<form action="cautare.php" class=" m-2 d-flex flex-row" method="POST">
            <input class="form-control" type="text" name="search" placeholder="Istorie">
            <input type="hidden" name="subject" value="Istorie">
            <button class="btn btn-outline-success ml-2" name="submit-search" type="submit">Caută</button>
          </form>
	</div>
</div>
<div class="container">
	<div class="shadow-lg p-3 my-5 bg-white rounded">
		<h1 class="text-center">Istorie</h1>
		<div class="row mb-5">
			<ul class="align">
				<?php include'includes/istorie-open.inc.php'; ?>
			</ul>	
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>