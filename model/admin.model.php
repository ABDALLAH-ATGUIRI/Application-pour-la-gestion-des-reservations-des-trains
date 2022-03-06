<?php

require '/xampp/htdocs/only_train/db/database.php';
class Voyages
{
    static public function addVoyage($data)
    {
        $db = Database::connect()->prepare("INSERT INTO voyage (date,depart,arrive,Id_train,price)VALUES(:date,:depart,:arrive,:train,:price)");
        $db->bindParam(':date', $data['date']);
        $db->bindParam(':depart', $data['depart']);
        $db->bindParam(':arrive', $data['arrive']);
        $db->bindParam(':train', $data['train']);
        $db->bindParam(':price', $data['price']);

        $db->execute();
    }

    static public function getVoyages()
    {
        $db = Database::connect()->prepare("select * from voyage");
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function editVoyage($data)
    {
        $db = Database::connect()->prepare("update voyage set date = :date,depart = :depart,
        arrive = :arrive,Id_train = :Id_train,price = :price 
        where Id_voyage = :Id");
        $db->bindParam(':date', $data['date']);
        $db->bindParam(':depart', $data['depart']);
        $db->bindParam(':arrive', $data['arrive']);
        $db->bindParam(':Id_train', $data['train']);
        $db->bindParam(':price', $data['price']);
        $db->bindParam(':Id', $data['id']);
        $db->execute();
    }

    static public function getOneVoyage($id)
    {
        $db = Database::connect()->prepare("select * from voyage where Id_voyage = :Id");
        $db->execute(array(':Id' => $id));
        return $db->fetch(PDO::FETCH_ASSOC);
    }

    static public function addTrain($data)
    {
        $db = Database::connect()->prepare("INSERT INTO train (nom_train,depart_train,arrive_train,date_dep,nb_places)VALUES(:N_train,:dep_train,:arr_train,:date_train,:nb_places)");
        $db->bindParam(':N_train', $data['N_train']);
        $db->bindParam(':dep_train', $data['dep_train']);
        $db->bindParam(':arr_train', $data['arr_train']);
        $db->bindParam(':date_train', $data['date_train']);
        $db->bindParam(':nb_places', $data['nb_places']);
        $db->execute();
    }

    static public function getTrains()
    {
        $db = Database::connect()->prepare("select * from train");
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }
}
