  <?php 
    session_start(); 
    if (isset($_SESSION['currentSessionUrl'])) {
      $_SESSION['previousSessionUrl'] = $_SESSION['currentSessionUrl'];
    }
    $_SESSION['currentSessionUrl'] = $_SERVER['REQUEST_URI'];
    include'login-modal.sec.php';
    include'signup-modal.sec.php';
    include'account-modal.sec.php';
    include'logout-modal.sec.php';
    include'error-system.sec.php';
    include'video-modal.sec.php';
    ?>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="50" height="50" class="d-inline-block align-center" alt="">Eseuri Bac</a>  
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/i-news.png" width="30" height="30" alt="News logo image"><span class="badge badge-success ml-2">2</button>
      <div class="dropdown-menu dropdown-menu-lg-right bg-hologram mt-3" aria-labelledby="dropdownMenu2">
        <div class="col bg-transparent">
            <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#videoModal">De ce dăm Bacu'?</button>
            <a class="btn btn-success btn-block" type="button" href="la-cafea.php">Forumul La Cafea</a>
            <!-- <button class="btn btn-success btn-block" type="button"  data-toggle="modal" data-target="#signupModal">Înregistrare</button> -->
          </div>
      </div>
    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02"> 
  <?php
    $text=$_SERVER['PHP_SELF'];
    $rest = substr("$text", 1);
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">';
    if ($rest === 'index.php') {
      echo '<li class="nav-item active">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>';
    } else {
      echo '<li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>';
    }
    if ($rest === 'romana.php' || $rest === 'istorie.php') {
      echo '<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
      if ($rest === 'romana.php') {
        echo '<a class="dropdown-item active" href="romana.php">Limba si Literarura Romana</a>';
      } else {
        echo '<a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>';
      }
      if ($rest === 'istorie.php') {
        echo '<a class="dropdown-item active" href="istorie.php">Istorie</a>';
      } else {
        echo '<a class="dropdown-item" href="istorie.php">Istorie</a>';
      }       
      echo '  </div>
            </li>';
    } else {
      echo '<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
              </div>
            </li>';
    }
    if ($rest === 'la-cafea.php') {
      echo '<li class="nav-item active">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>';
    } else {
      echo '<li class="nav-item">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>';
    }
    if ($rest === 'despre-noi.php') {
      echo '<li class="nav-item active">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>';
    } else {
      echo '<li class="nav-item">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>';
    }
    if ($rest === 'contact.php') {
      echo '<li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>';
    } else {
      echo '<li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>';
    }
    echo '</ul>'; 
if (isset($_SESSION['userId'])) {
  echo '<div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="myAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/i-user.png" width="30" height="30" alt="User logo image"></button>
          <div class="dropdown-menu dropdown-menu-lg-right bg-hologram mt-3" aria-labelledby="navDrop">
            <div class="col bg-transparent">
              <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#accountModal">Contul meu</button>
              <button class="btn btn-danger btn-block" type="button"  data-toggle="modal" data-target="#logoutModal">Delogare</button>
            </div>
          </div>
        </div>';
} else {
  echo ' <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="myAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/i-user.png" width="30" height="30" alt="User logo image"></button>
          <div class="dropdown-menu dropdown-menu-lg-right bg-hologram mt-3" aria-labelledby="navDrop">
            <div class="col bg-transparent">
              <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#loginModal">Logare</button>
              <button class="btn btn-success btn-block" type="button"  data-toggle="modal" data-target="#signupModal">Înregistrare</button>
            </div>
          </div>
        </div>';
    }
?>
  </div>
</nav>