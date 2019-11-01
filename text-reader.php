<!DOCTYPE html>
<html lang="en">
<head>
	<title>Text Reader</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<div class="container">
	<div class="shadow-lg p-3 mb-5 bg-white rounded">
	<section>
		<article>
			<form>
			<fieldset disabled>
<?php
	if (isset($_POST['get-document-submit'])) {
		$location = "documents/";
		$location .= $_POST['location'];
		$location .= "/";
		$myfilename = $_POST['doc-name'];
		$myfilename .= ".txt";
    	if(file_exists($location.$myfilename)){
    		echo '<label class="display-4 text-center" disabled>'.$_POST['doc-name'].'</label>';
      	echo file_get_contents($location.$myfilename);
      	$_POST = array();
		}else {
			echo "</article></section></div></div>";
			header("Location: index.php");
			exit;
		}
    }else {
    	echo "</article></section></div></div>";
			header("Location: index.php");
			exit;
		}
?>
			</fieldset>
			</form>
		</article>
	</section>
	</div>
</div>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>