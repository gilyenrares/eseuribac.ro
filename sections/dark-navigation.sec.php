  <?php 
    session_start(); 
    include 'error-system.sec.php';
    ?>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="50" height="50" class="d-inline-block align-center" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02"> 
  <?php
    $nickname = $_SESSION['userName'];
    $rank = $_SESSION['accType']; 
    $text=$_SERVER['PHP_SELF'];
    $rest = substr("$text", 1);
    $const='Admin';
    if (!($rank === $const)) {
      $_SESSION['activityStatus'] = 'Acces interzis!<br> Contul tău nu are nivelul de autorizație necesar!';
      header('Location: ../index.php');
      exit();
    }
    switch ($rest) {
    case 'control-panel.php':
      echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item mx-1 active">
          <a class="nav-link bg-primary badge" href="control-panel.php"><img src="images/i-home.png" width="35" height="35" class="d-inline-block align-center" alt="">Home</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="ems.php"><img src="images/i-essays.png" width="35" height="35" class="d-inline-block align-center" alt="">EMS</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="ums.php"><img src="images/i-users.png" width="35" height="35" class="d-inline-block align-center" alt="">UMS</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="#"><img src="images/i-policy.png" width="35" height="35" class="d-inline-block align-center" alt="">PMS</a>
        </li>
      </ul>';
    break;
    case 'ems.php':
    echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="control-panel.php"><img src="images/i-home.png" width="35" height="35" class="d-inline-block align-center" alt="">Home</a>
        </li>
        <li class="nav-item mx-1 active">
          <a class="nav-link bg-primary badge" href="ems.php"><img src="images/i-essays.png" width="35" height="35" class="d-inline-block align-center" alt="">EMS</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="ums.php"><img src="images/i-users.png" width="35" height="35" class="d-inline-block align-center" alt="">UMS</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="#"><img src="images/i-policy.png" width="35" height="35" class="d-inline-block align-center" alt="">PMS</a>
        </li>
      </ul>';
    break;
    case 'users.php':
    echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="control-panel.php"><img src="images/i-home.png" width="35" height="35" class="d-inline-block align-center" alt="">Home</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="ems.php"><img src="images/i-essays.png" width="35" height="35" class="d-inline-block align-center" alt="">EMS</a>
        </li>
        <li class="nav-item mx-1 active">
          <a class="nav-link bg-primary badge" href="ums.php"><img src="images/i-users.png" width="35" height="35" class="d-inline-block align-center" alt="">UMS</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="#"><img src="images/i-policy.png" width="35" height="35" class="d-inline-block align-center" alt="">PMS</a>
        </li>
      </ul>';
    break;
    case 'policy.php':
    echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="control-panel.php"><img src="images/i-home.png" width="35" height="35" class="d-inline-block align-center" alt="">Home</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="ems.php"><img src="images/i-essays.png" width="35" height="35" class="d-inline-block align-center" alt="">EMS</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="ums.php"><img src="images/i-users.png" width="35" height="35" class="d-inline-block align-center" alt="">UMS</a>
        </li>
        <li class="nav-item mx-1 active">
          <a class="nav-link bg-primary badge" href="#"><img src="images/i-policy.png" width="35" height="35" class="d-inline-block align-center" alt="">PMS</a>
        </li>
      </ul>';
   
    default:
    echo '<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item mx-1 active">
          <a class="nav-link bg-primary badge" href="control-panel.php"><img src="images/i-home.png" width="35" height="35" class="d-inline-block align-center" alt="">Home</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="ems.php"><img src="images/i-essays.png" width="35" height="35" class="d-inline-block align-center" alt="">EMS</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="ums.php"><img src="images/i-users.png" width="35" height="35" class="d-inline-block align-center" alt="">UMS</a>
        </li>
        <li class="nav-item mx-1">
          <a class="nav-link bg-primary badge" href="#"><img src="images/i-policy.png" width="35" height="35" class="d-inline-block align-center" alt="">PMS</a>
        </li>
      </ul>';
break;
}

echo '<p class="text-white font-italic p-3 mt-2">Logged in as:<b> '.$nickname.'</b> ('.$rank .')</p><a href="index.php"><button type="button" class="btn  btn-outline-success mr-1">Bact to Main Website</button></a>';
?>
  </div>
</nav>