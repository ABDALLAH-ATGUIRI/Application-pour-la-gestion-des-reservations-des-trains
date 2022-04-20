<?php
require_once __DIR__ . '/../inc/header.php';
?>
<!-- <php foreach ($view_data as $voyage) : ?> -->
<section class="container">

    <div class="row">
        <article class="card card-flf fl-left">
            <section class="date dahd">
                <time datetime="23th feb">
                    <span><?= date('d-m', strtotime($view_data['date_dep'])) ?></span>
                </time>
            </section>

            <section class="card-cont kk">

                <h2><?= $view_data['depart'] . ' <span class=" font-bold color-danger"> -> </span> ' . $view_data['arrive'] ?></h2>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>
                    <time>
                        <span><?= date('d-m-20y', strtotime($view_data['date_dep'])) . ' a ' . date('H:i', strtotime($view_data['date_dep'])) . ' to ' . date('H:i', strtotime($view_data['date_arr'])) ?></span>

                    </time>
                </div>
                <div class="even-date">
                    <i class="fa fa-map-marker"></i>

                    <span>
                        Départ : <?= date('H:i', strtotime($view_data['date_dep'])) . ' à ' . $view_data['depart'] ?>
                    </span>


                </div>
                <div class="even-date">
                    <i class="fa fa-map-marker"></i>

                    <span>
                        Arrivée : <?= date('H:i', strtotime($view_data['date_arr'])) . ' à ' . $view_data['arrive'] ?>
                    </span>


                </div>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>

                    <span><?= $view_data['price'] ?> DH</span>


                </div>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>

                    <span><?= 'Train : ' . $view_data['nom_train'] ?> </span>


                </div>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>

                    <span><?= $view_data['nom_train'] ?> DH</span>


                </div>

                <form action="/user/reservation" method="POST">

                    <input type="hidden" name="id" value="<?= $view_data['Id_voyage'] ?>">
                    <button type="submit" class="view" title="View Details" data-toggle="tooltip">Réserver</button>

                </form>

            </section>


            <section class="card-cont kk">
            <h2><?=  '' ?></h2>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>
                    <time>
                        <span><?= 'Mon nom : '.$_SESSION['user']['f.name'].' '.$_SESSION['user']['l.name'] ?></span>

                    </time>
                </div>
                <div class="even-date">
                    <i class="fa fa-map-marker"></i>

                    <span>
                        Email : <?= $_SESSION['user']['email'] ?>
                    </span>


                </div>
                <div class="even-date">
                    <i class="fa fa-map-marker"></i>

                    <span>
                    N° de téléphone : <?= $_SESSION['user']['n_phone'] ?>
                    </span>


                </div>
               

                <form action="/user/reservation" method="POST">

                    <input type="hidden" name="id" value="<?= $view_data['Id_voyage'] ?>">
                    <button type="submit" class="view" title="View Details" data-toggle="tooltip">Réserver</button>

                </form>

            </section>

        </article>

    </div>
</section>
<!-- <php endforeach; ?> -->