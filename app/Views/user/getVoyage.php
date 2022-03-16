<?php
require_once __DIR__ . '/../../Controller/UserController.php';
$data = new UserController();
$view_data = $data->getVoyage();

?>



<div class="table-responsive col-lg-10 m-auto w-100 mt-5" id="voyages">

    <?php if (!empty($view_data)) : ?>
        <div class=" block-spaced">
            <div class="container">
                <div class="d-flex fw-bold text-center mb-5 justify-content-center">
                    <div class=" p-3 m-1 font-bold bg-secondary ">
                        <span>Départ le : </span>
                        <span class="block-horaires--info--date-depart">
                            <?= date('d-m-20y', strtotime($view_data[0]['date_dep'])) ?>
                        </span>
                    </div>
                    <div class=" p-3 m-1  font-bold bg-info">
                        <span>Relation : </span>
                        <span class="block-horaires--info--relation-detail">
                            <?= $view_data[0]['depart'] . ' <span class=" font-bold color-danger">=></span> ' . $view_data[0]['arrive'] ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <table class="table table-striped table-hover">
            <thead class=" table-danger">
                <tr>
                    <th scope="col-1 " class="text-center">Départ</th>
                    <th scope="col-1 " class="text-center">Arrivée</th>
                    <th scope="col-1 " class="text-center">Train</th>
                    <th scope="col-1 " class="text-center">Price</th>
                    <th scope="col-1 " class="text-center">Réserver</th>

                </tr>

            </thead>
            <tbody>

                <?php foreach ($view_data as $voyage) : ?>
                    <tr>
                        <td class="text-center">
                            <?= date('H:i', strtotime($voyage['date_dep'])) ?>
                        </td>
                        <td class="text-center">
                            <?= date('H:i', strtotime($voyage['date_arr'])) ?>
                        </td>

                        <td class="text-center">
                            <?= $voyage['Id_train'] ?>
                        </td>
                        <td class="text-center"><b class="float-right">
                                <?= $voyage['price'] ?> DH
                            </b></td>

                        <td class="text-center"><a href="#" class="view" title="View Details" data-toggle="tooltip"><i class="material-icons">&#xE5C8;</i></a></td>

                    </tr>
                <?php endforeach; ?>


            </tbody>
        </table>

    <?php elseif (empty($view_data) && isset($_POST['search'])) : ?>

        <h1 class="text-danger text-center h-5">Aucun résultat ne correspond au terme de votre recherche.</h1>

    <?php endif ?>
</div>
</section>
<section>