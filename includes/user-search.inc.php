<?php 
if (isset($_POST['searchU-submit']) && !empty($_POST['searchUsers'])) {
  require 'dbh.inc.php'; 
	$search = mysqli_real_escape_string($conn, $_POST['searchUsers']);
	$sql = "SELECT * FROM users WHERE (userName LIKE '%$search%' OR userEmail LIKE '%$search%')";
	$result= mysqli_query($conn, $sql);
	$queryResults = mysqli_num_rows($result);
  $results = ($queryResults==1) ? 'user' : 'users' ;
	echo '<h2 class="text-white">Search Found <span class="badge bg-black">'.$queryResults.'</span> matching '.$results.'.</h2>';
	if ($queryResults > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
    if($row['userStatus']==1){
      $status='<span class="badge badge-success p-3">Active</span>';
      $view='<button class="btn btn-primary m-1" type="button" data-toggle="collapse" data-target="#vE'.$row['userId'].'" aria-expanded="false" aria-controls="vE'.$row['userId'].'">
            View
          </button>';
      $edit='<button class="btn btn-info m-1" type="button" data-toggle="collapse" data-target="#eE'.$row['userId'].'" aria-expanded="false" aria-controls="eE'.$row['userId'].'">
            Edit
          </button>';
      $setStatus='<form action="includes/user-deactivate.inc.php" method="post">
          <input type="hidden" name="userId" value="'.$row['userId'].'">
          <button type="submit" name="deactivate-submit" class="btn btn-warning m-1">Deactivate</button>
        </form>';
      $delete='<button class="btn btn-danger m-1" type="button" data-toggle="collapse" data-target="#dE'.$row['userId'].'" aria-expanded="false" aria-controls="dE'.$row['userId'].'">
            Delete
          </button>';
      $collapse='<div class="collapse" id="vE'.$row['userId'].'">
            <div class="alert " role="alert">
              <h4 class="alert-heading">Account Details</h4>
              <table class="table table-striped table-dark bg-black">
                <thead>
                  <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Data</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Account Type</th>
                    <td>'.$row['accType'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Reputation Points</th>
                    <td>'.$row['repPoints'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Username</th>
                    <td>'.$row['userName'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Email</th>
                    <td>'.$row['userEmail'].'</td>
                  </tr>
                  <tr>
                    <th scope="row">Joined</th>
                    <td>'.$row['userJoined'].'</td>
                  </tr>
                  <tr>
                  <th scope="row"></th>
                    <td><button class="btn btn-danger ml-5" type="button" data-toggle="collapse" data-target="#vE'.$row['userId'].'" aria-expanded="false" aria-controls="vE'.$row['userId'].'">Close</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="collapse" id="eE'.$row['userId'].'">
            <div class="alert" role="alert">
              <h4 class="alert-heading">Edit Account Details</h4>
              <hr>
                <form action="includes/user-edit.inc.php" method="post">
                <div class="col form-group">             
                  <input type="hidden" name="userId" value="'.$row['userId'].'">
                  <label for="aT">Account Type</label>
                    <input type="text" name="accType" value="'.$row['accType'].'" class="form-control" id="aT" aria-describedby="noteAT" placeholder="Enter account type" required="required">
				            <small id="noteAT" class="form-text text-muted">Enter account type into this field.</small>
                    <hr>
                  <label for="rP">Reputation Points</label>
                    <input type="number" name="repPoints" value="'.$row['repPoints'].'" class="form-control" id="rP" aria-describedby="noteRP" placeholder="Enter points" required="required">
				            <small id="noteRP" class="form-text text-muted">Enter the amount of reputation points into this field.</small>
                    <hr>
                  <label for="uN">Reputation Points</label>
                    <input type="text" name="userName" value="'.$row['userName'].'" class="form-control" id="uN" aria-describedby="noteUN" placeholder="Enter username" required="required">
				            <small id="noteUN" class="form-text text-muted">Enter username into this field.</small>
                    <hr>
                  <button type="submit" name="editU-submit" class="btn btn-success mx-5">Confirm</button>
                 <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#eE'.$row['userId'].'" aria-expanded="false" aria-controls="eE'.$row['userId'].'">Cancel</button>
                </div>
                </form>
            </div>
          </div>
          <div class="collapse" id="dE'.$row['userId'].'">
            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">DELETE ACCOUNT! Are you sure about this action?</h4>
              <p>You are about to DELETE an account which is an irreversible action!   If you want to proceed press Confirm otherwise please Cancel this action.</p>
              <hr>
                <form action="includes/user-delete.inc.php" method="post">
                  <input type="hidden" name="userId" value="'.$row['userId'].'">
                  <button type="submit" name="deleteU-submit" class="btn btn-danger mx-5">Confirm</button>
                 <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#dE'.$row['userId'].'" aria-expanded="false" aria-controls="dE'.$row['userId'].'">Cancel</button>
                </form>
            </div>
          </div>';
    }else{
      $status='<span type="button" class="badge badge-secondary p-3">Inactive</span>';
      $view='';
      $edit='';
      $setStatus='<form action="includes/user-activate.inc.php" method="post">
      <input type="hidden" name="userId" value="'.$row['userId'].'">
      <button type="submit" name="activate-submit" class="btn btn-success">Activate</button>
      </form>';
      $delete='';
      $collapse='';
    }
    	echo '<tr class="bg-black">
            <th scope="row">'.$row['userId'].'</th>
            <td>'.$row['accType'].'</td>
            <td>'.$row['repPoints'].'</td>
            <td>'.$row['userName'].'</td>
            <td>'.$row['userEmail'].'</td>
            <td>'.$row['userJoined'].'</td>
            <td>'.$status.'</td>
            <td><div class="row">'.$view.$edit.$setStatus.$delete.$collapse.'</div></td>
          </tr>';
  }
}else{
	echo '<div class="alert alert-info alert-dismissible fade show text-center p-5" role="alert">Momentan secțiune aceasta nu conține nici un user.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>';
}
}
?>