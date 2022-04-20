<?php
require_once __DIR__ . '/../inc/header.php';
require_once __DIR__ . '/../admin/admin_page.php';
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <h1 class="text-center">Ajouter un </h1>
            <hr style="height: 1px;color: black;background-color: black;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="price">Nome de train</label>
                    <input type="text" name="N_train" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="depart">Gare de départ</label>
                    <input type="text" name="dep_train" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="arrive">Gare de d'arrivée</label>
                    <input type="text" name="arr_train" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="date">date de départ</label>
                    <input type="date" name="date_train" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="train">NB de places</label>
                    <input type="text" name="nb_places" class="form-control" required>
                </div>

                <div class="form-group mt-3">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
require_once __DIR__ . '/../inc/footer.php';
?>