   <?php
    require_once __DIR__ . '/../inc/header.php';
    require_once __DIR__ . '/../inc/navbar.php';
    ?>


   <section>
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
   </section>


   <section class="container">
     <div class="row text-center pt-5 pb-5">
       <div class="col-lg-4">
         <img class="news rounded-circle" src="../img/504367.jpg" alt="">
         <h2>Heading</h2>
         <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
         <p><a class="btn btn-danger" href="#">View details &raquo;</a></p>
       </div>
       <div class="col-lg-4">
         <img class="news rounded-circle" src="../img/596297.jpg" alt="">

         <h2>Heading</h2>
         <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
         <p><a class="btn btn-danger" color="red" href="#">View details &raquo;</a></p>
       </div>
       <div class="col-lg-4">
         <img class="news rounded-circle" src="../img/775631.jpg" alt="">



         <h2>Heading</h2>
         <p>And lastly this, the third column of representative placeholder content.</p>
         <p><a class="btn btn-danger" href="#">View details &raquo;</a></p>
       </div>
     </div>

     <hr class="featurette-divider">

     <div id="background" class="row  featurette pt-5 pb-5">
       <div class="col-md-6">
         <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
         <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
       </div>
       <div class="col-md-6">
         <?php require_once __DIR__ . '/search.php'; ?>
       </div>
     </div>

     <hr class="featurette-divider">

     <div class="row featurette pt-5 pb-5">

       <div class="col-md-12 order-md-1">
         <div class="table-responsive col-lg-10 m-auto w-100 mt-5" id="voyages">

           <?php
            if (isset($view_data['trip']) && sizeof($view_data['trip']) > 0) : ?>

             <h1><?= $view_data['trip'][0]['depart'] . ' <span class=" font-bold color-danger"> => </span> ' . $view_data['trip'][0]['arrive'] ?></h1>
             <?php foreach ($view_data['trip'] as $voyage) : ?>
               <section class="container">

                 <div class="row">
                   <article class="card card-flf fl-left">
                     <section class="date">
                       <time datetime="23th feb">
                         <span><?= date('d-m', strtotime($view_data['trip'][0]['date_dep'])) ?></span>
                       </time>
                     </section>

                     <section class="card-cont">

                       <h2><?= $view_data['trip'][0]['depart'] . ' <span class=" font-bold color-danger"> -> </span> ' . $view_data['trip'][0]['arrive'] ?></h2>
                       <div class="even-date">
                         <i class="fa fa-calendar"></i>
                         <time>
                           <span><?= date('d-m-20y', strtotime($view_data['trip'][0]['date_dep'])) . ' a ' . date('H:i', strtotime($voyage['date_dep'])) . ' to ' . date('H:i', strtotime($voyage['date_arr'])) ?></span>

                         </time>
                       </div>
                       <div class="even-date">
                         <i class="fa fa-map-marker"></i>

                         <span>
                           Départ
                           <?= date('H:i', strtotime($voyage['date_dep'])) . ' ' . $voyage['depart'] ?>
                         </span>


                       </div>
                       <div class="even-date">
                         <i class="fa fa-map-marker"></i>

                         <span> Arrivée : <?= date('H:i', strtotime($voyage['date_arr'])) . ' ' . $voyage['arrive'] ?> </span>


                       </div>
                       <div class="even-date">
                         <i class="fa fa-calendar"></i>

                         <span><?= $voyage['price'] ?> DH</span>


                       </div>

                       <form action="/user/reservation" method="POST">

                         <input type="hidden" name="id" value="<?= $voyage['Id_voyage'] ?>">
                         <button type="submit" class="view" title="View Details" data-toggle="tooltip">Réserver</button>

                       </form>

                     </section>

                   </article>

                 </div>
               </section>
             <?php endforeach; ?>
         </div>

       <?php elseif (isset($_POST['search'])) : ?>

         <h1 class="text-danger text-center h-5">Aucun résultat ne correspond au terme de votre recherche.</h1>

       <?php endif; ?>
       </div>
   </section>
   <section>
     </div>
     </div>

     <hr class="featurette-divider">

   </section>


   <?php
    require __DIR__ . '/../inc/footer.php';
    ?>