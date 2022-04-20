<?php

if (isset($_SESSION['email'])) :
    $voyages = Admin::getVoyages();
    // var_dump($voyages);
    // var_dump($view_data);
    require_once __DIR__ . '/../admin/admin_page.php';



?>

    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto p-4 border mb-5">

                <div class="alert alert-success text-center">
                    <form action="http://onlytrain.local/admin/travelers" method="POST">

                        <select class="form-select form-control " name="voyages" required>
                        <option value=""></option>

                            <?php foreach ($voyages as $data) : ?>
                                <option value="<?= $data['Id_voyage']; ?>"><?= $data['depart'] . ' => ' . $data['arrive'] . '  |==>  ' . $data['date_dep'] ?></option>
                            <?php endforeach; ?>
                        </select>

                        <input type="submit" name="edit-submit" class="btn btn-info">

                    </form>
                </div>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col " class="text-center"> Id </th>
                            <th scope="col " class="text-center">Nom</th>
                            <th scope="col " class="text-center">Prénom</th>
                            <th scope="col " class="text-center">Télé</th>
                            <th scope="col " class="text-center">Email</th>
                            <!-- <th scope="col">-</th>
                            <th scope="col">-</th> -->

                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // var_dump($view_data);
                        foreach ($view_data as $voyage => $value) : ?>
                            <tr>
                                <td class="text-center"> <?= $voyage += 1 ?> </td>
                                <td class="text-center"> <?= $value['f_name'] ?> </td>
                                <td class="text-center"> <?= $value['l_name'] ?> </td>
                                <td class="text-center"> <?= $value['n_phone'] ?></td>
                                <td class="text-center"> <?= $value['email'] ?> </td>

                                <!-- 
                                <td>
                                    <form method="POST" action="http://onlytrain.local/admin/editVoyage">
                                        <input type="hidden" name="Id_voyage" value="<= $voyage['Id_voyage'] ?>">
                                        <input type="submit" name="edit-submit" class="btn btn-info" value="Edit">

                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="http://onlytrain.local/admin/annulerVoyages">
                                        <input type="hidden" name="Id_voyage" value="<= $voyage['Id_voyage'] ?>">
                                        <input type="submit" name="Annuler-submit" class="btn btn-danger" value="Annuler">
                                    </form>
                                </td> -->

                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
<?php
    require_once __DIR__ . '/../inc/footer.php';
else :
    header('location:http://onlytrain.local');
endif;
?>