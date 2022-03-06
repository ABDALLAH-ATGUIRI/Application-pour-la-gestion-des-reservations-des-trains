<?php
require_once './inc/header.php'
?>

<body>
  <?php
  require_once './inc/navbar.php'
  ?>
  <section class="search-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <form class="form-group htv">
            <div id="content">
              <div>
                <div class="mb-3 frn">
                  <i class="fa fa-location-arrow" aria-hidden="true"></i>

                  <input type="text" id="input-group" class="form-control" placeholder="Ma date de départ" />
                </div>
                <div class="mb-3 frn">
                  <i class="fa fa-location-arrow" aria-hidden="true"></i>

                  <input type="text" id="input-group" class="form-control" placeholder="Ma gare de d'arrivée" />
                </div>
              </div>
              <div>
                <div class="mb-3 frn">
                  <i class="fa fa-calendar" aria-hidden="true"></i>

                  <input type="date" id="input-group" class="form-control" placeholder="Ma date de départ" />
                </div>
                <div class="mb-3 frn">
                  <i class="fa fa-calendar" aria-hidden="true"></i>

                  <input type="date" id="input-group" class="form-control" placeholder="Ma gare de d'arrivée" />
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btnf">RECHERCHÉ</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/andy-pearce-1Z_mX3zzEBc-unsplash.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Acheter mon billet</h5>
          <p>
            Pour mieux apprécier vos voyages, OnlyTrain met à votre
            disposition chaque jour et à chaque moment de la journée, des
            trains et des autocars vers vos destinations préférées.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/image.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>
            Ils relient toutes les villes du Royaume en trajets directs ou
            avec correspondances. Réservez sans tarder vos billets et pensez à
            anticiper vos achats pour profiter des meilleurs prix.
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../img/istockphoto-488212336-612x612.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block">
          <h5>Bon voyage sur nos lignes !</h5>
          <p></p>
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

  <section class="container">

  </section>

  <?php
  require_once './inc/footer.php'
  ?>