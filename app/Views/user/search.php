<?php
// require_once __DIR__ . '/../../Controller/UserController.php';

$search = userController::search();



?>
<section>

    <!-- <div class="row"> -->
    <div class="col-lg-10 mx-auto">
        <form class="form-group " action="http://onlytrain.local/user/getVoyage#voyages" method="POST">

            <div class="qsqs flex-colomn align-items-center ">
                <div class="mb-3 frn">
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>

                    <select class="form-select form-control" id="exampleInputEmail1" name="gare_dep" placeholder="Ma gare d'arrivée" id="exampleSelect1" required>
                        <option value="">Ma gare de depart</option>
                        <?php foreach ($search['depart'] as $data) :
                        ?>
                            <option value="<?= $data['depart'] ?>"><?= $data['depart'] ?></option>
                        <?php
                        endforeach; ?>
                    </select>
                </div>
                <div class="mb-3 frn">
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>

                    <select class="form-select form-control " id="" name="gare_arr" id="exampleSelect1" required>
                        <option value="">Ma gare d'arrivée</option>
                        <?php foreach ($search['arrive'] as $data) :
                        ?>
                            <option value="<?= $data['arrive']; ?>"><?= $data['arrive']; ?></option>
                        <?php
                        endforeach; ?>
                    </select>
                </div>
                <div class="mb-3 frn">
                    <i class="fa fa-calendar" aria-hidden="true"></i>

                    <input type="date" class="form-control" name='date' placeholder="Ma date de départ" required />
                </div>
                <div class="btn-stl">
                    <button type="submit" name="search" class="btn btn-success ">RECHERCHÉ</button>
                </div>

            </div>


        </form>
    </div>
    <!-- </div> -->

</section>