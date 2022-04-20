<?php

    require_once __DIR__ . '/../admin/admin_page.php';

?>

    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto p-4 border mb-5">

                <!-- <h3 class="alert alert-success text-center"></h3>

                <h3 class="alert alert-danger text-center"></h3> -->

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Gare de départ</th>
                            <th scope="col">Gare d'arrivée</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date de départ</th>
                            <th scope="col">Date d'arrivée</th>
                            <th scope="col">Train</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Annuler</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // var_dump($view_data);
                        foreach ($view_data as $voyage) : ?>
                            <tr>
                                <td class="text-center"> <?= $voyage['Id_voyage'] ?> </td>
                                <td class="text-center"> <?= $voyage['depart'] ?> </td>
                                <td class="text-center"> <?= $voyage['arrive'] ?></td>
                                <td class="text-center"><b class="float-right"> <?= $voyage['price'] ?> DH </b></td>
                                <td class="text-center"> <?= $voyage['date_arr'] ?> </td>
                                <td class="text-center"> <?= $voyage['date_dep'] ?> </td>
                                <td class="text-center"> <?= $voyage['nom_train'] ?> </td>

                                <td>
                                    <form method="POST" action="http://onlytrain.local/admin/editVoyage">
                                        <input type="hidden" name="Id_voyage" value="<?= $voyage['Id_voyage'] ?>">
                                        <input type="submit" name="edit-submit" class="btn btn-info" value="Edit">

                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="http://onlytrain.local/admin/annulerVoyages">
                                        <input type="hidden" name="Id_voyage" value="<?= $voyage['Id_voyage'] ?>">
                                        <input type="submit" name="Annuler-submit" class="btn btn-danger" value="Annuler">
                                    </form>
                                </td>

                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
<?php
    require_once __DIR__ . '/../inc/footer.php';
?>