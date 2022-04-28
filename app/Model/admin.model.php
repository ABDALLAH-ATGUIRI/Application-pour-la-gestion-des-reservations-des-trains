<?php

require __DIR__ . '/../db/database.php';
class Admin
{
    public function addVoyage($data)
    {

        $db = Database::connect()->prepare("INSERT INTO voyage (date_dep,date_arr,depart,arrive,Id_train,price)
                                            VALUES(:date_dep,:date_arr,:depart,:arrive,:train,:price)");
        $db->bindParam(':date_dep', $data['date_dep']);
        $db->bindParam(':date_arr', $data['date_arr']);
        $db->bindParam(':depart', $data['depart']);
        $db->bindParam(':arrive', $data['arrive']);
        $db->bindParam(':train', $data['train']);
        $db->bindParam(':price', $data['price']);
        $db->execute();
        return true ;

    }

    static public function get_admin($data)
    {

        try {

            $db = Database::connect()->prepare("SELECT * FROM admin WHERE email = '$data[email]' AND password = '$data[pass]' ");

            $db->execute();
            if ($db->fetch(PDO::FETCH_OBJ))
                return 1;
            return 0;
        } catch (PDOException $e) {
            return 'error' . $e->getMessage();
        }
    }

    static public function editVoyage($data)
    {
        $id = $data['id'];
        $db = Database::connect()->prepare("UPDATE voyage SET date_dep = :date_dep,date_arr = :date_arr,depart = :depart,
        arrive = :arrive, price = :price , Id_train = :Id_train where Id_voyage = '$id' ");
        $db->bindParam(':date_dep', $data['date_dep']);
        $db->bindParam(':date_arr', $data['date_arr']);
        $db->bindParam(':depart', $data['depart']);
        $db->bindParam(':arrive', $data['arrive']);
        $db->bindParam(':price', $data['price']);
        $db->bindParam(':Id_train', $data['train']);

        if ($db->execute())
            header('location:http://onlytrain.local/admin/dashboard');
    }

    static public function annulerVoyage($id)
    {
        $db = Database::connect()->prepare("UPDATE voyage SET Annuler = 1 WHERE Id_voyage = $id ");
        if ($db->execute())
            header('location:http://onlytrain.local/admin/dashboard');
    }

    static public function getVoyages()
    {

        $db = Database::connect()->prepare("SELECT * FROM voyage INNER JOIN train ON voyage.Id_train = train.Id_train WHERE Annuler = 0");
        $db->execute();
        $data = $db->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    static public function getOneVoyage($id)
    {

        $db = Database::connect()->prepare("SELECT * from voyage where Id_voyage = :Id");
        $db->execute(array(':Id' => $id));
        $data = $db->fetch(PDO::FETCH_ASSOC);
        return $data;
    }

    static public function addTrain($data)
    {
        $db = Database::connect()->prepare("INSERT INTO train (nom_train,depart_train,arrive_train,date_dep,nb_places) 
                                            VALUES (:N_train,:dep_train,:arr_train,:date_train,:nb_places)");
        $db->bindValue(':N_train', $data['N_train']);
        $db->bindValue(':dep_train', $data['dep_train']);
        $db->bindValue(':arr_train', $data['arr_train']);
        $db->bindValue(':date_train', $data['date_train']);
        $db->bindValue(':nb_places', $data['nb_places']);
        $db->execute();
    }

    static public function getAllTrains()
    {
        $db = Database::connect()->prepare("SELECT * FROM train");
        $db->execute();
        return $db->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function getAllClients()
    {
        $db = Database::connect()->prepare("SELECT `email`, `n_phone`, `f_name`, `Id_client`, `l_name` FROM `client`");
        $db->execute();
        $data = $db->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    static public function getTravelersUser($voyage)
    {
        $db = Database::connect()->prepare("SELECT `Id_user`,`email`, `n_phone`, `f_name`, `l_name` FROM `reservation` as r, user as u where r.Id_voyage LIKE $voyage and r.user like u.Id_user");
        $db->execute();
        $data = $db->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    
    static public function getTravelersClient($voyage)
    {
        $db = Database::connect()->prepare("SELECT Id_client , `email`, `n_phone`, `f_name`, `l_name` FROM `reservation` as r, client as c where r.Id_voyage LIKE $voyage and r.client like c.Id_client");
        $db->execute();
        $data = $db->fetchAll(PDO::FETCH_ASSOC);
        return $data;

    }

}
