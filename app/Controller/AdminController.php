<?php
session_start();
require __DIR__ . '/../Model/client.model.php';

class adminController
{
    public function addVoyage()
    {
        $acc = new Voyages();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = array(
                "date_dep"  => $_POST["date_dep"],
                "date_arr"  => $_POST["date_arr"],
                "depart" => $_POST["depart"],
                "arrive"  => $_POST["arrive"],
                "price" => $_POST["price"],
                "train" => $_POST["train"]


            );
            if ($acc->addVoyage($data)) {
                header('location:http://onlytrain.local');
            }
        } else {
            View::load('admin/addVoyage');
        }
    }



    public function EditVoyage()
    {
        if (isset($_POST["edit-submit"])) {

            $id = $_POST['Id_voyage'];

            $view_data = Voyages::getOneVoyage($id);
            return View::load('admin/editVoyage', $view_data);
        }


        if (isset($_POST["submit"])) {
            $data = array(
                "depart" => $_POST["depart"],
                "arrive"  => $_POST["arrive"],
                "price" => $_POST["price"],
                "train" => $_POST["train"],
                "date_dep"  => $_POST["date_dep"],
                "date_arr"  => $_POST["date_arr"],
                "id"  => $_POST["id"]
            );

            Voyages::editVoyage($data);
        }
    }






    public function getAllVoyages()
    {

        $view_data = Voyages::getVoyages();
        return $view_data;
    }





    public function addTrain()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                "N_train" => $_POST["N_train"],
                "dep_train"  => $_POST["dep_train"],
                "arr_train" => $_POST["arr_train"],
                "date_train" => $_POST["date_train"],
                "nb_places"  => $_POST["nb_places"]

            );

            $result = Voyages::addTrain($data);
            header('location:trains.php');
        }
    }



    public function trains()
    {

        $data = Voyages::getAllTrains();
        return  $data;
    }
}
