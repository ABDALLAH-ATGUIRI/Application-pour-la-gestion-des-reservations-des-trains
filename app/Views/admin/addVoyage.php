<?php
require_once __DIR__ . '/../inc/header.php';
require_once __DIR__ . '/../admin/admin_page.php';
require_once __DIR__ . '/../../Controller/AdminController.php';
$data = new AdminController();
$data = $data->Trains();
?>
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <h1 class="text-center">Ajouter un voyage</h1>
      <hr style="height: 1px;color: black;background-color: black;">
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 mx-auto">
      <form action="" method="POST">
        <div class="form-group">
          <label for="depart">Gare de départ</label>
          <input type="text" name="depart" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="arrive">Gare d'arrivée</label>
          <input type="text" name="arrive" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="text" name="price" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="train">Train</label>

          <select class="form-select " name="train" id="exampleSelect1">
            <?php
            foreach ($data as $train) : ?>
              <option value="<?= $train['Id_train']; ?>"><?= $train['nom_train']; ?></option>
            <?php endforeach; ?>

          </select>

          <!-- <input type="text" name="train" class="form-control" required> -->

        </div>
        <div class="form-group">
          <label for="date">Date de départ</label>
          <input type="datetime-local" value="<?=  date("Y-m-d h:ia")  ?>" name="date_dep" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="date">Date d'arrivée</label>
          <input type="datetime-local" name="date_arr" value="<?= date("Y-m-d h:ia")   ?>" class="form-control" required>
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