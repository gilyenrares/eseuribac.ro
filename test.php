<!DOCTYPE html>
<html lang="ro">
<head>
  <title>Test Area</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>

<body>
  <div class="parallax">

<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div class="container border-top border-danger p-3 mt-5 bg-hologram rounded">
    <div id='title'>
      <span>ESEURIBAC</span><br>
      <span>Contactează-ne</span>
    </div>
    <blockquote class="blockquote">
      <p class="mb-0 text-cal text-white text-center">"Scopul argumentaţiei sau al discuţiei nu trebuie să fie victoria, ci progesul."</p>
      <footer class="blockquote-footer text-right mr-5"><cite title="Source Title">Joseph Joubert</cite></footer>
    </blockquote> 
  </div>

<div class="container border-top border-danger text-white p-3 mt-5 bg-hologram rounded">
    <p>Această pagină este dedicată comunicării; în folosul evoluției și al rezolvării eventualelor probleme, în mod direct cu creatorii acestui web-site. <br> Am creat secțiunea următoare cu scopul de a facilita comunicarea cu noi în cel mai simplu și organizat mod cu putință. Nu ezitați să ne contactați în legătură cu orice nelămurire.</p>
    <form action="includes/contact.inc.php" method="post">
      <div class="form-group">
        <label for="email">Adresa de email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Email..." required="required" autocomplete="autocomplete" >
      </div>
      <div class="form-group">
        <label for="topic">Selectează un topic</label>
        <select class="form-control" id="topic" name="topic" required="required">
          <option>Opinie</option>
          <option>Intrebare</option>
          <option>Problema</option>
          <option>Contul Meu</option>
        </select>
      </div>
      <div class="form-group">
        <label for="message">Dezvoltă topicul ales.</label>
        <textarea class="form-control" id="message" name="message" rows="3" required="required"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" name="contact-submit" class="btn btn-outline-primary">Trimite Mesajul</button>
      </div>
    </form>
  
</div>

</div>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>

</html>