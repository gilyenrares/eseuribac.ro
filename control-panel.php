<!DOCTYPE html>
<html lang="ro">
<head>
	<title>EBCP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body class="bg-black">
	<!-- Navigation -->
<?php 
include 'sections/dark-navigation.sec.php'; 
$const='Admin';
$acTy= $_SESSION['accType'];
if (!($acTy === $const)) {
	header('Location: index.php?error=unauthorised');
} ?>
<!-- Main body content -->
<div class="m-5 bg-dark">
	<div class="shadow-lg border-top border-danger text-white p-3 rounded">
		<h1 class="display-4 text-center">Eseuri Bac - Control Panel</h1>
	</div>
</div>
<div class="m-5 bg-dark">
	<div class="shadow-lg border-top border-danger text-white p-3 rounded">
		<div class="row px-3">
			<a href="ems.php" class="col-md d-block card card-link bg-primary m-2">
				<img src="images/i-essays.png" class="card-img-top p-5 " alt="...">
				<div class="card-body">
    				<h5 class="card-title text-white text-center">Essay Management System</h5>
  				</div>
			</a>
			<a href="#" class="col-md d-block card card-link bg-primary m-2">
				<img src="images/i-users.png" class="card-img-top p-5" alt="...">
				<div class="card-body">
    				<h5 class="card-title text-white text-center">User Management System</h5>
  				</div>
			</a>
			<a href="#" class="col-md d-block card card-link bg-primary m-2">
				<img src="images/i-policy.png" class="card-img-top p-5" alt="...">
				<div class="card-body">
    				<h5 class="card-title text-white text-center">Policy Management System</h5>
  				</div>
			</a>
		</div>	
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