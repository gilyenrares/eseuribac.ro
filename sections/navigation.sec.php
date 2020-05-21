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
    ?>
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="50" height="50" class="d-inline-block align-center" alt="">Eseuri Bac</a>  
  <div class="spinner-grow text-success mt-1" role="status">
    <span class="sr-only">Noutăți</span>
  </div>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Noutăți <span class="badge badge-success">1</button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
      <button class="dropdown-item" type="button"><a class="card-link" href="index.php#video">De ce dăm Bacu'?</a></button>
    </div>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02"> 
  <?php
    $text=$_SERVER['PHP_SELF'];
    $rest = substr("$text", 1);
    switch ($rest) {
    case 'index.php':
      echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Acasa</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="la-cafea.php">La Cafea</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="despre-noi.php">Despre noi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>';
    break;
    case 'romana.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item  active" href="romana.php">Limba si Literarura Romana</a>
              <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>';
    break;
    case 'istorie.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle  active" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item active" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>';
    break;
    case 'la-cafea.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>';
    break;
    case 'shop.php':
      echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Acasa</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="la-cafea.php">La Cafea</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="despre-noi.php">Despre noi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>';
    break;
    case 'despre-noi.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>';
    break;
    case 'contact.php':
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Acasa</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="la-cafea.php">La Cafea</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="despre-noi.php">Despre noi</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>';
    break;
    default:
    echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Acasa</a>
        </li>
        <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="romana.php">Limba si Literarura Romana</a>
                <a class="dropdown-item" href="istorie.php">Istorie</a>
            </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="la-cafea.php">La Cafea</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="despre-noi.php">Despre noi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>';
break;
} 
if (isset($_SESSION['userId'])) {
  echo '<div class="btn-group" role="group" aria-label="Conectează-te Înregistrează-te">
    <button type="button" class="btn btn-success mr-1" data-toggle="modal" data-target="#accountModal">Contul meu</button>
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#logoutModal">Deloghează-te</button>
      </div>';
  } else {
    echo '<div class="btn-group" role="group" aria-label="Loghează-te Înregistrează-te">
    <button type="button" class="btn btn-success mr-1" data-toggle="modal" data-target="#loginModal">Loghează-te</button>
    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#signupModal">Înregistrează-te</button>
      </div>';
    }
?>
  </div>
</nav>