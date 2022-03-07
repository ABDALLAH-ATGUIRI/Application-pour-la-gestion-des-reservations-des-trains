<?php
require_once '/xampp/htdocs/only_train/controller/admin.controller.php';
if (isset($_POST["submit"])) {
  $acc = new Voyage();
  $acc->add_voyage();
  $Trains = $data->getAllTrains();
}
require_once '/xampp/htdocs/only_train/view/inc/header.php';
require_once '/xampp/htdocs/only_train/view/admin/admin_page.php';
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
          <label for="depart">gare de départ</label>
          <input type="text" name="depart" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="arrive">gare de d'arrivée</label>
          <input type="text" name="arrive" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="text" name="price" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="train">Train</label>
          <select class="form-select" aria-label="Open this select menu" required>

            <option selected>Open this select menu</option>

            <?php foreach ($Trains as $train) : ?>
              <option value="<?= $train['Id_train'] ?>"><?= $train['nom_train'] ?></option>
            <?php endforeach ?>

          </select>
        </div>
        <div class="form-group">
          <label for="date">date</label>
          <input type="datetime-local" name="date" class="form-control" required>
        </div>

        <div class="form-group mt-3">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>


<?php
require_once '/xampp/htdocs/only_train/view/inc/footer.php';
?>