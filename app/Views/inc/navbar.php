<?php
// if (!isset($_SESSION)) session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="../img/logo_onlytrain_new.png" alt="logo" id="logo" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <?php

            if (isset($_SESSION['Id_client'])) :
            ?>

              <a class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user me-2"></i> <?php echo $view_data['f_name'] .' '.$view_data['l_name']; ?>
              </a>
              <ul class="dropdown-menu row no-gutters w-100" aria-labelledby="navbarDropdown">



                <div class="login-form">
                  <form action="" method="post">
                    <div class="avatar"><i class=" fa fa-user"></i></div>
                    <h4 class="modal-title"> <?php echo $view_data['f_name'] .' '.$view_data['l_name']; ?></h4>
                    <div><a class="dropdown-item text-center fw-bold" href="../user/profile">Profile</a></div>
                    <div><a class="dropdown-item text-center fw-bold" href="../user/logout">Logout</a></div>

                  </form>

                </div>

              </ul>
            <?php else : ?>

              <a class="nav-link dropdown-toggle second-text fw-bold" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-user me-2"></i> login </a>
              <ul class="dropdown-menu row no-gutters dropdown" aria-labelledby="navbarDropdown">
                <?php
                require_once __DIR__ . '/../user/login.php';
                ?>
              </ul>
            <?php
            endif
            ?>

          </li>
        </ul>
      </div>
    </div>
</nav>