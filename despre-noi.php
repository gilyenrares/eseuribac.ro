<!DOCTYPE html>
<html lang="ro">
<head>
	<title>Despre Noi</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>
<!-- 3D Jumbotron -->
<div class="scene">
    <div class="book-wrap">
      <div class="left-side">
        <div class="book-cover-left"></div>
        <div class="layer1">
          <div class="page-left"></div>
        </div>
        <div class="layer2">
          <div class="page-left"></div>
        </div>
        <div class="layer3">
          <div class="page-left"></div>
        </div>
        <div class="layer4">
          <div class="page-left"></div>
        </div>
        <div class="layer-text">
          <div class="page-left-2">
            <div class="corner"></div>
            <div class="corner2"></div>
            <div class="corner-fold"></div>
            <div class="page-text w-richtext">
              <h3 class="text-center p-3"><strong>Despre Noi</strong></h3>
              <h3>Plăcută-i lauda de sine, deşi nu miroase bine."</h3>
              <h3 class="blockquote-footer text-right mr-5">Harry Ross</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="center"></div>
      <div class="right-side">
        <div class="book-cover-right"></div>
        <div class="layer1">
          <div class="page-right"></div>
        </div>
        <div class="layer2 right">
          <div class="page-right"></div>
        </div>
        <div class="layer3 right">
          <div class="page-right"></div>
        </div>
        <div class="layer4 right">
          <div class="page-right"></div>
        </div>
        <div class="layer-text right">
          <div class="page-right-2">
            <div class="page-text">
              <h3><strong>Eseuribac.ro</strong></h3>
              <h6>Noi vrem să venim cu mai multe modalități interactive și un conținut mai ușor de "digerat" (VIDEOCLIPURI/ PODCASTURI / EXERCIȚII / JOCURI) la care , publicul să se simță relaxat, la o țigară :)), poate o bere ( nu fumați nu e sănătos) și să nu creadă că depune un efort în plus. Stiu cum este să ai Bacalaureatul în 2 luni și să nu înveți nimic pentru că este prea multă materie și tu nu ai o memorie de elefant, pe lângă că e foarte multă, mai este structurată anapoda și predată de o mare majoritate de oameni pregătiți cu scopul interactive pentru elevii care au dificultăți sau sunt speriați de examenul de Bacalaureat.</h6>
              <h6>Acum să nu credeți că noi suntem profesioniști în domeniu, pe naiba, suntem la fel că voi cu note nu prea bune la școală , dar cu un proiect și o idee în minte. Probabil la început lucrurile nu vor fi perfecte și vom greșii... poate am greșeli și în ce am scris acum... dar important este să creem o comunitate și să ne ajutăm reciproc.   Scopul nostru este să găsim oamenii pasionați de meseria pe care o fac și să le unim forțele pentru a crea materiale interactive.</h6>
              <h6>‍Prin urmare daca cineva vrea să contribuie la acest proiect ne puteți (CONTACTA AICI- >), Nu tindem să creem olimpici, nici pe departe. Noi vrem doar să venim în ajutorul celor care găsesc plictisitoare  sau  greu de învățat materia de Bacalaureat și și vor vor să înțeleagă anumite subiecte într-un timp cât mai scurt. Nu zic că aici este ,, cheia ,,care vă deschide ușa spre o notă mare ( acea cheie este la fiecare dintre voi și se numește muncă), dar pot să zic că informația prezentată pe site o să vă aducă un plus  la examenul de Bacalaureat într-un mod cât mai plăcut. Învățatul nu trebuie să fie o povară, ci o joaca. Deci hai să ne "jucăm" cu toții.</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Main body content -->
<div class="parallax">
  <div id='stars'></div>
  <div id='stars2'></div>
  <div id='stars3'></div>
  <!-- Title -->
  <div class="container border-top border-danger p-3 mt-5 bg-hologram rounded">
    <h1 id='title'><span>ESEURIBAC</span><br><span>Despre Noi</span></h1>
  </div>
  <!-- Quote -->
  <div class="container border-top border-primary p-3 mt-5 bg-hologram text-white rounded">
    <blockquote class="blockquote">
      <p class="mb-0 text-cal text-white text-center">Lauda de sine nu miroase a bine...</p>
      <footer class="blockquote-footer text-right mr-5">Proverbe Românești<cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
  <!-- Books -->
  <div class="container border-top border-primary p-3 mt-5 bg-hologram text-white rounded">
    <div class="row mb-5">
      <ul class="align">
        <?php include'includes/despre-open.inc.php'; ?>
      </ul> 
    </div>
  </div>
  <!-- The end -->
  <div class="container text-center mt-5 bg-transparent rounded">.</div>
</div>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>
</html>
