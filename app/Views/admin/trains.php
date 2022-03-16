<?php

require_once __DIR__ . '/../inc/header.php';
require_once __DIR__ . '/../admin/admin_page.php';
require_once __DIR__ . '/../../Controller/AdminController.php';
$data = new adminController();
$Trains = $data->trains();

?>

<div class="container">
    <div class="row">
        <div class="col-10 mx-auto p-4 border mb-5">

            <h3 class="alert alert-success text-center"></h3>

            <h3 class="alert alert-danger text-center"></h3>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome de train</th>
                        <th scope="col">Gare de départ</th>
                        <th scope="col">Gare de d'arrivée</th>
                        <th scope="col">Date de départ</th>
                        <th scope="col">NB de places</th>
                        <!-- <th scope="col">Edit</th>
                        <th scope="col">Annuler</th> -->
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($Trains as $train) : ?>
                        <tr>
                            <td> <?= $train['Id_train'] ?> </td>
                            <td> <?= $train['nom_train'] ?> </td>
                            <td> <?= $train['depart_train'] ?></td>
                            <td> <?= $train['arrive_train'] ?> </td>
                            <td> <?= $train['date_dep'] ?> </td>
                            <td class="text-center"> <?= $train['nb_places'] ?> </td>

                            <!-- <td>
                                <form method="post" action="edit_voyage.php">
                                    <input type="hidden" name="Id_voyage" value="<= $train['Id_train'] ?>">
                                    <input type="submit" name="edit-submit" class="btn btn-info" value="Edit">
                                </form>
                            </td> -->

                            <td>
                                <a href="" class="btn btn-danger">Annuler</a>
                            </td>
                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
            <form method="post" class="d-grid gap-2 col-6 mx-auto" action="http://onlytrain.local/admin/addTrain">
                <!-- <input type="hidden" name="Id_voyage" value="<?= $voyage['Id_voyage'] ?>"> -->
                <input type="submit" name="edit-submit" class="btn btn-primary" value="Ajouter un train">
            </form>
            <!-- <div >
                <a href="http://onlytrain.local/admin/addTrain" class="btn btn-primary">Ajouter un train</a>
            </div> -->
        </div>
    </div>
</div>
<?php
require_once __DIR__ . '/../inc/footer.php';
?>