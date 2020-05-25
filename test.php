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
</head>
<!-- Navigation -->
<?php include 'sections/navigation.sec.php'; ?>

<body>
<!-- Generated markup by the plugin -->
<div class="body w-100 h-100">
  <div class="position-absolute w-100">
    <div class="container border-top border-danger p-3 mt-5 mx-auto bg-hologram rounded">
      <h1 id='title'><span>ESEURIBAC</span><br><span>Bun venit!</span></h1>
    </div>
  </div>
  <div id="drag-container">
    <img class="bg-primary" src="images/logo.png" data-toggle="tooltip" title="Some tooltip text!">
    <div id="spin-container">
    <!-- Add your images (or video) here -->
    <a href="romana.php"  role="button"><img src="images/romana.png" alt=""></a>
    <a href="article.php?essayName=Programa%20Bacalaureat%20Limba%20si%20Literatura%20Română%202019-2020&essayTimeStamp=2020-05-16%2017:43:10"  role="button"><img class="bg-black" src="images/programa-romana.png" alt=""></a>
    <a href="istorie.php"  role="button"><img src="images/istorie.png" alt=""></a>
    <a href="article.php?essayName=Programa%20Bacalaureat%20la%20Istorie%20pentru%20anul%202019-2020&essayTimeStamp=2020-05-17%2008:10:27"  role="button"><img class="bg-black" src="images/programa-istorie.png" alt=""></a>
    <a href="la-cafea.php"  role="button"><img src="images/la-cafea.png" alt=""></a>
    <a href="despre-noi.php"  role="button"><img src="images/despre-noi.png" alt=""></a>
    <a href="contact.php"  role="button"><img src="images/contact.png" alt=""></a>
    <a href="" role="button" data-toggle="modal" data-target="#videoModal"><img src="images/video.png" alt=""></a>
    
    <!-- Example add video  -->
    <!-- video controls autoplay="autoplay" loop>
      <source src="#" type="video/mp4">
    </video> -->
    <!-- Text at center of ground -->
    <p>Eseuribac.ro</p>
  </div>
  <div id="ground"></div>
  </div>

  <div id="music-container"></div>
  </div>
</body>
<!-- Footer -->
<?php include 'sections/footer.sec.php'; ?>

<script>

// You can change global variables here:
var radius = 340; // how big of the radius
var autoRotate = true; // auto rotate or not
var rotateSpeed = -60; // unit: seconds/360 degrees
var imgWidth = 150; // width of images (unit: px)
var imgHeight = 200; // height of images (unit: px)

// Link of background music - set 'null' if you dont want to play background music
var bgMusicURL = 'https://eseuribac.ro/sounds/index.mp3';
var bgMusicControls = true; // Show UI music control

// ===================== start =======================
// animation start after 1000 miliseconds
setTimeout(init, 1000);

var odrag = document.getElementById('drag-container');
var ospin = document.getElementById('spin-container');
var aImg = ospin.getElementsByTagName('img');
var aVid = ospin.getElementsByTagName('video');
var aEle = [...aImg, ...aVid]; // combine 2 arrays

// Size of images
ospin.style.width = imgWidth + "px";
ospin.style.height = imgHeight + "px";

// Size of ground - depend on radius
var ground = document.getElementById('ground');
ground.style.width = radius * 3 + "px";
ground.style.height = radius * 3 + "px";

function init(delayTime) {
  for (var i = 0; i < aEle.length; i++) {
    aEle[i].style.transform = "rotateY(" + (i * (360 / aEle.length)) + "deg) translateZ(" + radius + "px)";
    aEle[i].style.transition = "transform 1s";
    aEle[i].style.transitionDelay = delayTime || (aEle.length - i) / 4 + "s";
  }
}

function applyTranform(obj) {
  // Constrain the angle of camera (between 0 and 180)
  if(tY > 180) tY = 180;
  if(tY < 0) tY = 0;

  // Apply the angle
  obj.style.transform = "rotateX(" + (-tY) + "deg) rotateY(" + (tX) + "deg)";
}

function playSpin(yes) {
  ospin.style.animationPlayState = (yes?'running':'paused');
}

var sX, sY, nX, nY, desX = 0,
    desY = 0,
    tX = 0,
    tY = 10;

// auto spin
if (autoRotate) {
  var animationName = (rotateSpeed > 0 ? 'spin' : 'spinRevert');
  ospin.style.animation = `${animationName} ${Math.abs(rotateSpeed)}s infinite linear`;
}

// add background music
if (bgMusicURL) {
  document.getElementById('music-container').innerHTML += `
<audio src="${bgMusicURL}" ${bgMusicControls? 'controls': ''} autoplay loop>    
<p>If you are reading this, it is because your browser does not support the audio element.</p>
</audio>
`;
}

// setup events
document.onpointerdown = function (e) {
  clearInterval(odrag.timer);
  e = e || window.event;
  var sX = e.clientX,
      sY = e.clientY;

  this.onpointermove = function (e) {
    e = e || window.event;
    var nX = e.clientX,
        nY = e.clientY;
    desX = nX - sX;
    desY = nY - sY;
    tX += desX * 0.1;
    tY += desY * 0.1;
    applyTranform(odrag);
    sX = nX;
    sY = nY;
  };

  this.onpointerup = function (e) {
    odrag.timer = setInterval(function () {
      desX *= 0.95;
      desY *= 0.95;
      tX += desX * 0.1;
      tY += desY * 0.1;
      applyTranform(odrag);
      playSpin(false);
      if (Math.abs(desX) < 0.5 && Math.abs(desY) < 0.5) {
        clearInterval(odrag.timer);
        playSpin(true);
      }
    }, 17);
    this.onpointermove = this.onpointerup = null;
  };

  return false;
};

document.onmousewheel = function(e) {
  e = e || window.event;
  var d = e.wheelDelta / 20 || -e.detail;
  radius += d;
  init(1);
};

</script>
</html>