<?php include "head.php" ?>

<div class= "container mt-3">
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/netflix.jpg" alt="Netflix" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Netflix</h3>
        <p>Peliculas y series ilimitadas y mucho mas!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/paramount.jpg" alt="Paramount" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Paramount Plus</h3>
        <p>Una montaña de entretenimiento con historias unica y estrellas iconicas...</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img src="images/disney.jpg" alt="Disney" class="d-block" style="width:100%">
      <div class="carousel-caption">
        <h3>Disney Plus</h3>
        <p>Tus historias favoritas en un mismo lugar.</p>
      </div>  
    
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<div class="container">
        <div class="col-md-12 row mt-4" style="padding-left: 4%;">
            <div class="col-md-4 text-center col-sm-12">
                <div class="card" style=" width:300px">
                    <img class="card-img-top" src="images/casa.jpg" alt="Card image">
                    <div class="card-body bg-dark">
                        <h4 class="card-title colortextlogo">Netflix</h4>
                        <a href="planes.php" class="btn btn-outline-warning">Compra aqui!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center col-sm-12">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="images/moon.jpg" alt="Card image">
                    <div class="card-body bg-dark">
                        <h4 class="card-title colortextlogo">Paramount Plus</h4>
                        <a href="planes.php" class="btn btn-outline-warning">Compra aqui!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center col-sm-12">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="images/icarly.jpg" alt="Card image">
                    <div class="card-body bg-dark">
                        <h4 class="card-title colortextlogo">Disney Plus</h4>
                        <a href="planes.php" class="btn btn-outline-warning">Compra aqui!</a>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php include "footer.php" ?>