<?php
require_once __DIR__ . '/../inc/header.php';
require_once __DIR__ . '/../inc/navbar.php';
?>
<section class="col">
    <div class="row ">
        <div class="col mb-3">
            <div class="card">
                <div class="card-body w-100 align-self-center">

                    <form class="form reser p-3 pt-3" action="http://onlytrain.local/user/reserve" method="POST">
                        <div class="row p-1">
                            <div class="col">
                                <?php if (isset($_SESSION['user'])) : ?>
                                    <div class="row p-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Mon prénom *</label>
                                                <input class="form-control" type="text"  placeholder="Mon prénom" value="<?= $_SESSION['user']['f_name']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Mon nom *</label>
                                                <input class="form-control" type="text"  placeholder="Mon nom" value="<?= $_SESSION['user']['l_name']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-2"  >
                                        <div class="col">
                                            <div class="form-group">
                                                <label>E-mail *</label>
                                                <input class="form-control" type="email"  placeholder="user@example.com" value="<?= $_SESSION['user']['email']; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-2" >
                                        <div class="col">
                                            <div class="form-group">
                                                <label>N° de téléphone</label>
                                                <input class="form-control" type="number"  placeholder="N° de téléphone" value="<?= $_SESSION['user']['n_phone']; ?>" readonly>
                                            </div>
                                        </div>
                                    <?php else : ?>
                                        <div class="row p-2" >
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Mon prénom *</label>
                                                    <input class="form-control" type="text" name="f_name_user" placeholder="Mon prénom" required="required">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Mon nom *</label>
                                                    <input class="form-control" type="text" name="l_name_user" placeholder="Mon nom" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2" >
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>E-mail *</label>
                                                    <input class="form-control" type="email" name="email_user" placeholder="user@example.com" required="required">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2" >
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>N° de téléphone</label>
                                                    <input class="form-control" type="number" name="phone_user" placeholder="N° de téléphone" required="required">
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="col">
                                            <div class="form-group">
                                                <label>Aller</label>
                                                <input class="form-control" type="text" name="username" value="<?= date('d-m-20y', strtotime($view_data['date_dep'])) ?>" readonly>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row p-2" >
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Ma date de départ</label>
                                                    <input class="form-control" type="text" name="name" value="<?= date('d-m-20y H:i', strtotime($view_data['date_dep'])) ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Ma date de retour</label>
                                                    <input class="form-control" type="text" name="username" value="<?= date('d-m-20y H:i', strtotime($view_data['date_arr'])) ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2" >
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>La gare de départ</label>
                                                    <input class="form-control" type="text" name="name" value="<?= $view_data['depart'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Ma gare d'arrivée</label>
                                                    <input class="form-control" type="text" name="username" value="<?= $view_data['arrive'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2" >
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>La Traine</label>
                                                    <input class="form-control" type="text" name="name" value="<?= $view_data['nom_train'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Tarif</label>
                                                    <input class="form-control" type="text" name="username" value="<?= $view_data['price'] . ' DH' ?>" readonly>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                            </div>

                            <div class="row p-2">
                           
                                <div class="col d-flex justify-content-around">
                                    <input type="number"  name="Id_voyage" value="<?= $view_data['Id_voyage'] ?>" hidden>
                                    <a href="http://onlytrain.local" class="btn btn-danger w-20" >Retour</a>
                                    <input type="submit" name="select" class="btn btn-primary w-20" value="Sélectionner" type="submit">

                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</section>


<?php
require __DIR__ . '/../inc/footer.php';
?>