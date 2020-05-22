<?php 
require 'dbh.inc.php';

if (isset($_SESSION['accType'])) {
	$rank = $_SESSION['accType']; 
	$const ='Admin';
    if ($rank === $const) {
      	echo '<a><button type="button" data-toggle="modal" data-target="#categoryModal">
      	<img src="images/add.png" alt="Eseuribac.ro logo"></button></a>';
    }
}

$sql = "SELECT * FROM categories;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<a href="forum.php?catId='.$row["catId"].'&catName='.$row["catName"].'"  role="button"><img src="images/'.$row["catId"].'.png" alt=""></a>';
	}
}
 ?>