<?php

require_once __DIR__ . '/../inc/header.php';
$view_data = userController::getMyVoyage();

?>

<body>


    <main class="d-flex" id="wrapper">

        <div class="bg-white " id="sidebar-wrapper">
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
                                                <div class="media">
                                                    <label class="nav-link fw-bold"><?= $_SESSION['user']['f_name'] . ' ' . $_SESSION['user']['l_name']; ?></label>

                                                </div>
                                                <div class="media">
                                                    <label>E-mail : <span><?= $_SESSION['user']['email']; ?></span> </label>

                                                </div>
                                                <div class="media">
                                                    <label>Phone : <span><?= $_SESSION['user']['n_phone']; ?></span></label>

                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="http://onlytrain.local" class="list-group-item list-group-item-action bg-transparent  text-center fw-bold"><i class="fas fa-home me-2"></i>Home</a>
                <a href="../user/logoutClient" class="list-group-item list-group-item-action bg-transparent text-danger text-center fw-bold" name="logout"><i class="fas fa-power-off me-2"></i>Logout</a>

            </div>
        </div>

        </div>
        </div>

        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>

                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>


            <?php if (sizeof($view_data) > 0) :
                foreach ($view_data as $value) :
                    $data = Clients::reserve_voyage($value[0]);
                    
            ?>


                    <div class="row px-5">

                        <article class="card card-flf fl-left">
                            <section class="date">
                                <time datetime="23th feb">
                                    <span><?= date('d - m', strtotime($data['date_dep'])) ?></span>
                                </time>
                            </section>

                            <section class="card-cont kk">

                                <h2><?= $data['depart'] . ' <span class=" font-bold color-danger"> -> </span> ' . $data['arrive'] ?></h2>
                                <div class="even-date">
                                    <i class="fa fa-calendar"> </i>
                                    <time>
                                        <span> <?= date('d-m-20y', strtotime($data['date_dep'])) ?></span>
                                    </time>
                                </div>

                                <div class="even-date">
                                    <i class="fa fa-map-marker"></i>
                                    <span>
                                        Départ : <?= date('H:i', strtotime($data['date_dep'])) . ' à ' . $data['depart'] ?>
                                    </span>
                                </div>

                                <div class="even-date">
                                    <i class="fa fa-map-marker"></i>

                                    <span>
                                        Arrivée : <?= date('H:i', strtotime($data['date_arr'])) . ' à ' . $data['arrive'] ?>
                                    </span>
                                </div>

                                <div class="even-date">
                                    <i class="fa fa-price"></i>
                                    <span>Price : <?= $data['price'] ?> DH</span>
                                </div>
                            </section>


                            <section class="card-cont kk">
                                <h2 class="color-Light h-5"> <span class=" font-bold color-Light"> # </span></h2>

                                <div class="even-date">

                                    <i class="fa fa-train"></i>

                                    <span><?= 'Train : ' . $data['nom_train'] ?> </span>
                                </div>
                                <div class="even-date">
                                    <i class="fa fa-user"></i>
                                    <time>
                                        <span><?= 'Mon nom : ' . $_SESSION['user']['f_name'] . ' ' . $_SESSION['user']['l_name'] ?></span>
                                    </time>
                                </div>
                                <div class="even-date">
                                    <i class="fa fa-gmail"></i>

                                    <span>
                                        Email : <?= $_SESSION['user']['email'] ?>
                                    </span>


                                </div>
                                <div class="even-date">
                                    <i class="fa fa-phone"></i>

                                    <span>
                                        N° de téléphone : <?= $_SESSION['user']['n_phone'] ?>
                                    </span>


                                </div>

                                <?php if($value[2] == 0):?>
                                <form action="/user/Annuler" method="POST">
                                    <input type="hidden" name="date_dep" value="<?= $data['date_dep']?>">
                                    <input type="hidden" name="Id_reserv" value="<?= $value[1] ?>">
                                    <input type="hidden" name="Id_voyage" value="<?= $value[0] ?>">
                                    <button type="submit" class="btn-danger" title="View Details" data-toggle="tooltip">Annuler</button>
                                </form>
                                <?php endif ;?>
                            </section>

                        </article>

                    </div>
            <?php
                endforeach;
            endif; ?>

            <?php
            require __DIR__ . '/../inc/footer.php';
            ?>
        </div>

    </main>

</body>
<script>


</script>