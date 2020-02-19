<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="50" height="50" class="d-inline-block align-center" alt="">Eseuri Bac</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02"> 
  <?php
  session_start();
    $text=$_SERVER['PHP_SELF'];
    $rest = substr("$text", 1);
    switch ($rest) {
    case 'index.php':
      echo '<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
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
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>';
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
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>';
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
            <li class="nav-item  active">
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
              <a class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Materia</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
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
} 
if (isset($_SESSION['userId'])) {
  echo '<div class="btn-group" role="group" aria-label="Loghează-te Înregistrează-te">
    <a href="cont.php"><button type="button" class="btn btn-success mr-1">Contul meu</button></a>
    <a href="includes/logout.inc.php"><button type="button" class="btn btn-outline-success">Delogează-te</button></a>
      </div>';
  } else {
    echo '<div class="btn-group" role="group" aria-label="Loghează-te Înregistrează-te">
    <a href="logare.php"><button type="button" class="btn btn-success mr-1">Loghează-te</button></a>
    <a href="inregistrare.php"><button type="button" class="btn btn-outline-success">Înregistrează-te</button></a>
      </div>';
    }
?>
  </div>
</nav>