<?php

require_once __DIR__ . '/../inc/header.php';

$data = new userController();
$view_data = $data->login();
?>

<body>


    <main class="d-flex" id="wrapper">

        <div class="bg-white w-50" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="../img/logo_onlytrain_new.png" class="fas fa-user-secret " alt="logo">
            </div>
            <div class="list-group list-group-flush w-100">

                <div class="list-group list-group-flush login-form  w-100">
                    <div class="row gutters-lg">
                        <div class="col-md-4 mb-3 w-100">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150" />

                                        <div class="row about-list w-100">

                                            <div class="col-md-6 w-100">
                                                <div class="text-center">
                                                    <label>E-mail : <span><?php echo $view_data[3]['email']; ?></span> </label>

                                                </div>
                                                <div class="media">
                                                    <label>Phone : <span>820-885-3321</span></label>

                                                </div>
                                                <div class="media">
                                                    <label>Skype : <span>skype.0404</span></label>

                                                </div>
                                                <div class="media">
                                                    <label>Freelance : <span>Available</span></label>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="../user/logout" class="list-group-item list-group-item-action bg-transparent text-danger text-center fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>

            </div>
        </div>

        </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0"></h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>John Doe</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


        </div>

    </main>

    <!-- <div class="list-group list-group-flush login-form my-3">
                <div class="list-group list-group-flush login-form my-3">
                    <div class="row gutters-lg">
                        <div class="col-md-4 mb-3 w-100">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h4>John Doe</h4>
                                            <p class="text-secondary mb-1">Full Stack Developer</p>
                                            <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                            <button class="btn btn-primary">Follow</button>
                                            <button class="btn btn-outline-primary">Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div> -->


</body>
<?php
require __DIR__ . '/../inc/footer.php';
?>