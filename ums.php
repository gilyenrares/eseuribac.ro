<!DOCTYPE html>
<html lang="ro">
<head>
	<title>UMS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body class="bg-black">
	<!-- Navigation -->
<?php 
include 'sections/dark-navigation.sec.php'; 
?>
<!-- Main body content -->
<div class="mx-5 mt-5 bg-dark">
	<div class="shadow-lg border-top border-danger text-white p-3 rounded">
		<h1 class="display-4 text-center">Eseuri Bac - User Management System</h1>
	</div>
</div>

<!-- UMS nav bar -->
<div class="btn-group ml-5" role="group" aria-label="Toolbar">
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#users" aria-expanded="true" aria-controls="users">Users</button>
	<!-- <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#test" aria-expanded="false" aria-controls="test">test</button> -->
</div>

<!-- Acordion interface -->
<div class="accordion" id="interfaceU">

<!-- User interface -->
	<div class="card m-5 bg-dark collapse show" id="users" data-parent="#interfaceU">
		<div class="shadow-lg border-top border-danger text-white p-3 rounded">
			<form action="ums.php" class="pb-3 m-2 d-flex flex-row" method="POST">
				<input class="form-control" type="text" name="searchUsers" placeholder="Search users">
				<button class="btn btn-outline-primary px-5 ml-2" name="searchU-submit" type="submit">Search</button>
			</form>
      <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Account Type</th>
            <th scope="col">Rep points</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Joined</th>
            <th scope="col">Status</th>
            <th scope="col" style="width: 27%" >Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php 
						include 'includes/user-search.inc.php';
						include 'includes/get-users.inc.php';
					?> 
        </tbody>
      </table>
		</div>
	</div>

</div>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>