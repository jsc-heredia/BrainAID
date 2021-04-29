<!DOCTYPE html>
<html>
<head>
	<title>Login BrainAID</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" href="css/inicio.css">
	<link rel="shortcut icon" href="img/foco.ico">
</head>
<body>
  
    <form method="post">
	<h2 id="Rot"><img src="img/Grupo 339.png" width="220" height="200"></h2>
    	<h1>Ingresa tus datos</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="email" name="email" placeholder="Email">
    	<input type="submit" name="register">
    </form>
        <?php
        include("registrar.php");
        ?>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</body>
<footer>
    <div class="container">
  <div class="row row-cols-3">
    <div class="col-sm">
    <a id="social" title="Facebook" href="https://www.facebook.com/BrainAid-100625851834160"><img src="img/face.png"
            width="50" height="50">Facebook-BrainAID</a></div>
    </div>
    <div class="col-sm">
    <a id="social" title="Twitter" href="https://twitter.com/aid_brain"><img src="img/twitt.png" width="50"
            height="50">Twitter-BrainAID</a>
    </div>
    <div class="col-sm">
    <a id="social" title="Instagram" href="https://www.instagram.com/BrainAID_EC/"><img src="img/insta.png"
            width="50" height="50">Instagram-BrainAID</a>
    </div>
  </div>
</footer>
</html>
