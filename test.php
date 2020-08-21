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
  <div>
    <?php 
      $person1 = new NewClass();
      $person1->setName('Rares');
      echo $person1->name;
     ?>
  </div>
	<!-- <iframe src="http://docs.google.com/gview?url=http://infolab.stanford.edu/pub/papers/google.pdf&embedded=true" style="width:100%; height:80vh;" frameborder="0"></iframe> -->
	<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.cusd80.com/cms/lib/AZ01001175/Centricity/Domain/2192/Characteristics%20of%20Life%20GOOD%20Presentation.ppt" allowfullscreen></iframe>
</div>
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