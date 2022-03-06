<?php if (!isset($_SESSION)) session_start();

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container">
    <a class="navbar-brand" href="../view/home.php"><img src="../img/logo_onlytrain_new.png" alt="logo" id="logo" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#home">Réserver et planifier</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Abonnements et réductions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">Tarifs et promos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">Infos et services</a>
            </li>
          </ul>
        </div> -->

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <?php if (isset($_SESSION['email'])) : ?>
              <a class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user me-2"></i> <?php echo ($_SESSION['email']); ?> </a>
              <ul class="dropdown-menu row no-gutters w-100" aria-labelledby="navbarDropdown" style="  padding: 0; margin-top: 8%;">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#"> </a></li>
                <li><a class="dropdown-item" href="./logout.php">Logout</a></li>
              </ul>
            <?php else : ?>
              <a class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user me-2"></i> login </a>
              <ul class="dropdown-menu row no-gutters pro" aria-labelledby="navbarDropdown" style="  padding: 0; left: -130%; min-width: 335px; margin-top: 8%;">
                <?php require_once '/xampp/htdocs/only_train/view/login.php' ?>
              </ul>
            <?php endif ?>

          </li>
        </ul>
      </div>
    </div>
</nav>