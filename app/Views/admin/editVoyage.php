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
        <h1 class="text-center">Edit un voyage</h1>
        <hr style="height: 1px;color: black;background-color: black;">
      </div>
    </div>
    <div class="row">
      <div class="col-md-5 mx-auto">
        <form action="" method="POST">
          <div class="form-group">

            <label for="depart">gare de départ</label>
            <input value="<?= $view_data['depart'] ?>" type="text" name="depart" class="form-control">
          </div>
          <div class="form-group">
            <label for="arrive">gare d'arrivée</label>
            <input type="text" value="<?= $view_data['arrive'] ?>" name="arrive" class="form-control">
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" value="<?= $view_data['price'] ?>" name="price" class="form-control">
          </div>
          <div class="form-group">
            <label for="train">Train</label>
            <!-- <input type="text" value="<= $view_data['Id_train'] ?>" name="train" class="form-control"> -->
            <select class="form-select " name="train" id="exampleSelect1">
            <?php 
            foreach ($data as $train) : ?>
              <option value="<?= $train['Id_train']; ?>"><?= $train['nom_train']; ?></option>
            <?php endforeach; ?>
          </select>
          </div>
          <div class="form-group">
            <label for="date">date de départ</label>
            <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($view_data['date_dep'])); ?>" name="date_dep" class="form-control">
          </div>
          <div class="form-group">
            <label for="date">date d'arrivée</label>
            <input type="datetime-local" value="<?php echo date('Y-m-d\TH:i', strtotime($view_data['date_arr'])); ?>" name="date_arr" class="form-control">
          </div>
          <input type="hidden" name="id" value="<?= $view_data['Id_voyage'] ?>">
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