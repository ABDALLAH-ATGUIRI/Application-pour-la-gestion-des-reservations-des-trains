<?php
// header('http://onlytrain.local/admin/Clients');
if (isset($_SESSION['email'])) :

    require_once __DIR__ . '/../admin/admin_page.php';

?>

    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto p-4 border mb-5">

                <h3 class="alert alert-success text-center"></h3>

                <h3 class="alert alert-danger text-center"></h3>

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col text-center">ID</th>
                            <th scope="col text-center">Nom</th>
                            <th scope="col text-center">Prénom</th>
                            <th scope="col text-center">Nom de télé</th>
                            <th scope="col text-center">Email</th>
                            <!-- <th scope="col">-</th>
                            <th scope="col">-</th> -->
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // var_dump($view_data);
                        foreach ($view_data as $client) : ?>
                            <tr>
                                <td class="text-center"> <?= $client['Id_client'] ?> </td>
                                <td class="text-center"> <?= $client['f_name'] ?> </td>
                                <td class="text-center"> <?= $client['l_name'] ?></td>
                                <td class="text-center"><?= $client['n_phone'] ?></td>
                                <td class="text-center"> <?= $client['email'] ?> </td>
                                
                                <!-- <td>
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
    View::load('admin/index');
endif;
?>