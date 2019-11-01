<!DOCTYPE html>
<html lang="en">
<head>
	<title>Limba si Literatura Romana</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>
<!-- Jumbotron -->
<img src="images/jumbotron.jpg" class="img-fluid" alt="Responsive image">
<!-- Main body content -->
<div class="container">
	<div class="shadow-lg p-3 mb-5 bg-white rounded">
	<section>
		<article>
			<h1 class="display-1">Display 1</h1>
			<h1 class="display-2">Display 2</h1>
			<h1 class="display-3">Display 3</h1>
			<h1 class="display-4">Display 4</h1>
			<p>Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.</p>
			<p>Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.Text in here, text in there, basicaly text everywhere.</p></article>
			<article>
			<blockquote class="blockquote">
  			<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  			<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
			</blockquote>
		</article>
	</section>
	<section>
		<form action="text-reader.php" method="post">
			<input type="hidden" name="location" value="romana">
		  <div class="form-group">
		    <label for="exampleFormControlSelect2">Example multiple select</label>
		    <select multiple name="doc-name" class="form-control" id="exampleFormControlSelect2" required="required">
		      <option>Essay 1</option>
		      <option>Essay 2</option>
		      <option>Essay 3</option>
		      <option>Essay 4</option>
		      <option>Essay 5</option>
		    </select>
		  </div>
		  <button type="submit" name="get-document-submit" class="btn btn-outline-primary">Deschide document</button>
		</form>
	</section>
	<section>
		<article>
			
		</article>
	</section>
	</div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>