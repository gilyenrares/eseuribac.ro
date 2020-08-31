<?php include'includes/new-class.inc.php' ?>
<!DOCTYPE html>
<html lang="ro">
<head>
  <title>Test Area</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles/style.css">
  <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <!-- 
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script> -->
<script type="text/javascript" id="MathJax-script" async
  src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-chtml.js">
</script>
</head>
<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>


<body>


<form id="tryitform" name="tryitform" action="result.php" target="view" method="post">

 <input type="submit" value="Submit" /> 
 <strong> Preview</strong> 

<textarea class="container" height="300px" id="code" name="code" style="height: 300px;" >
 
</textarea>

<iframe width="100%" height="900px" frameborder="0" src="result.php" name="view" id="view"> </iframe>

</form>



  <div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="row no-gutters">
    <div class="col-md-2 my-3">
      <img src="images/i-pdf.png" alt="PDF File">
    </div>
    <div class="col-md-10 mt-3">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary m-3">Go somewhere</a><a href="#" class="btn btn-primary m-3">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
  <div>
    <?php 
      $person1 = new NewClass();
      $person1->setName('Rares');
      echo $person1->name;
     ?>
  </div>
	<!-- <iframe src="http://docs.google.com/gview?url=http://infolab.stanford.edu/pub/papers/google.pdf&embedded=true" style="width:100%; height:80vh;" frameborder="0"></iframe> -->
	<!-- <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="#" allowfullscreen></iframe>
</div> -->
<p>When \(a \ne 0\), there are two solutions to \(ax^2 + bx + c = 0\) and they are \({L_F} = \vec F \cdot \vec d\) 
	\({}\)
$$x = {-b \pm \sqrt{b^2-4ac} \over 2a}.$$</p>

\( \vec F \)

<?php 
  include 'includes/get-class.inc.php'; 
  include 'includes/get-subject.inc.php'
?>


</body>
</html>