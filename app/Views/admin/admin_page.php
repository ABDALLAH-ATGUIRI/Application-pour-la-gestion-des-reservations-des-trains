<?php

require_once __DIR__ . '/../inc/header.php';

?>

<body>
  <main class="d-flex " id="wrapper">

    <div class="bg-white" id="sidebar-wrapper">
      <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
        <img src="/img/logo_onlytrain_new.png" class="fas fa-user-secret me-2" alt="logo">
      </div>
      <div class="list-group list-group-flush my-3">
        <a href="http://onlytrain.local/admin/dashboard" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Afficher les voyages</a>
        <a href="http://onlytrain.local/admin/addVoyage" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Ajouter un voyage</a>
        <a href="http://onlytrain.local/admin/clients" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Les Clients</a>
        <!-- <a href="http://onlytrain.local/admin/trains" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-paperclip me-2"></i>Trains</a> -->
        <a href="http://onlytrain.local/admin/travelers" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Travelerst</a>
        <a href="http://onlytrain.local/admin/logoutAdmin" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
      </div>
    </div>

    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
        <div class="d-flex align-items-center">
          <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
          <h2 class="fs-2 m-0">Dashboard</h2>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
              <a class="nav-link  second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user me-2"></i><?= $_SESSION['email']; ?></a>
              <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul> -->
            
          </ul>
        </div>
      </nav>
 



