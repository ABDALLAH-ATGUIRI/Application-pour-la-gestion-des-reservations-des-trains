<?php

require_once '/xampp/htdocs/only_train/view/inc/header.php';
require_once '/xampp/htdocs/only_train/view/admin/admin_page.php';
require_once '/xampp/htdocs/only_train/controller/admin.controller.php';
$data = new Voyage();
$voyages = $data->getAllVoyages();

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
                        <th scope="col">Gare de départ</th>
                        <th scope="col">Gare de d'arrivée</th>
                        <th scope="col">Price</th>
                        <th scope="col">Date de départ</th>
                        <th scope="col">Train</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Annuler</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach ($voyages as $voyage) : ?>
                    <tr>
                        <td> <?= $voyage['Id_voyage'] ?> </td> 
                        <td> <?= $voyage['depart'] ?> </td>
                        <td> <?= $voyage['arrive'] ?></td>
                        <td><b class="float-right"> <?= $voyage['price'] ?> DH </b></td>
                        <td class="text-center"> <?= $voyage['date'] ?> </td>
                        <td></td>
                        <td>
                            <form method="post" action="edit_voyage.php">
                                <input type="hidden" name="Id_voyage" value="<?= $voyage['Id_voyage'] ?>">
                                <input type="submit" name="edit-submit" class="btn btn-info" value="Edit">
                            </form>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">Annuler</a>
                        </td>
                    </tr>
                    <?php endforeach ?>

                </tbody>
            </table>


        </div>
    </div>
</div>
<?php
require_once '/xampp/htdocs/only_train/view/inc/footer.php';
?>