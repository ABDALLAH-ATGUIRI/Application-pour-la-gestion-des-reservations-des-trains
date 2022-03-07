<?php
require '/xampp/htdocs/only_train/model/admin.model.php';

class Voyage
{
    public function add_voyage()
    {


        $data = array(
            "depart" => $_POST["depart"],
            "arrive"  => $_POST["arrive"],
            "price" => $_POST["price"],
            "train" => $_POST["train"],
            "date"  => $_POST["date"]

        );
        $result = Voyages::addVoyage($data);
        header('location:index.php');
    }
    public function updateVoyage()
    {
        $data = array(
            "depart" => $_POST["depart"],
            "arrive"  => $_POST["arrive"],
            "price" => $_POST["price"],
            "train" => $_POST["train"],
            "date"  => $_POST["date"],
            "id"  => $_POST["id"]

        );
        Voyages::editVoyage($data);
        header('location:index.php');
    }

    public function getAllVoyages()
    {
        return Voyages::getVoyages();
    }

    public function getOneVoyage()
    {
        $id = $_POST['Id_voyage'];
        return Voyages::getOneVoyage($id);
    }



    public function add_train()
    {


        $data = array(
            "train" => $_POST["train"],
            "dep_train"  => $_POST["dep_train"],
            "arr_train" => $_POST["arr_train"],
            "date_train" => $_POST["date_train"],
            "nb_places"  => $_POST["nb_places"]

        );
        $result = Voyages::addTrain($data);
        header('location:trains.php');
    }
    public function getAllTrains()
    {
        return Voyages::getTrains();
    }
}
