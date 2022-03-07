<?php
require_once '/xampp/htdocs/only_train/controller/admin.controller.php';
if (isset($_POST["edit-submit"])) {
    $data=new Voyage();
    $voyage =  $data->getOneVoyage();
    

};

if (isset($_POST["submit"])) {
  $data=new Voyage();
  $data->updateVoyage();
};
require_once '/xampp/htdocs/only_train/view/inc/header.php';
require_once '/xampp/htdocs/only_train/view/admin/admin_page.php';
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
                <input value="<?= $voyage['depart'] ?>" type="text" name="depart" class="form-control">
              </div>
              <div class="form-group">
                <label for="arrive">gare de d'arrivée</label>
                <input type="text" value="<?= $voyage['arrive'] ?>" name="arrive" class="form-control">
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" value="<?= $voyage['price'] ?>" name="price" class="form-control">
              </div>
              <div class="form-group">
                <label for="train">Train</label>
                <input type="text" value="<?= $voyage['train'] ?>" name="train" class="form-control">
              </div>
              <div class="form-group">
                <label for="date">date</label>
                <input type="datetime-local" value="<?= $voyage['date'] ?>" name="date" class="form-control">
              </div>
              <input type="hidden" name="id" value="<?= $voyage['Id_voyage'] ?>">
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