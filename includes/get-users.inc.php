<?php 
require 'dbh.inc.php';
$sql = "SELECT * FROM `users`";
	
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
    if($row['userStatus']==1){
      $status='<span class="badge badge-success p-3">Active</span>';
      $actions='<div class="row">
        <button type="button" class="btn btn-primary m-1">View</button>
        <button type="button" class="btn btn-info m-1">Edit</button>
        <form action="includes/user-deactivate.inc.php" method="post">
          <input type="hidden" name="userId" value="'.$row['userId'].'">
          <button type="submit" name="deactivate-submit" class="btn btn-warning m-1">Deactivate</button>
        </form>
        <button type="button" class="btn btn-danger m-1">Delete</button>
      </div>';
    }else{
      $status='<span type="button" class="badge badge-secondary p-3">Inactive</span>';
      $actions='<form action="includes/user-activate.inc.php" method="post">
      <input type="hidden" name="userId" value="'.$row['userId'].'">
      <button type="submit" name="activate-submit" class="btn btn-success">Activate</button>
      </form>';
    }
    	echo '<tr>
            <th scope="row">'.$row['userId'].'</th>
            <td>'.$row['accType'].'</td>
            <td>'.$row['repPoints'].'</td>
            <td>'.$row['userName'].'</td>
            <td>'.$row['userEmail'].'</td>
            <td>'.$row['userJoined'].'</td>
            <td>'.$status.'</td>
            <td>'.$actions.'</td>
          </tr>';
  }
}else{
	echo '<div class="alert alert-info alert-dismissible fade show text-center p-5" role="alert">Momentan secțiune aceasta nu conține nici un user.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		</div>';
}
 ?>