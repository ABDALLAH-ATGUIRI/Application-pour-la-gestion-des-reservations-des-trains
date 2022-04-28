<?php
require __DIR__ . '/../db/database.php';

class Clients
{

    static public function addClient($data)
    {
        $db = Database::connect()->prepare('INSERT INTO client(f_name , l_name , n_phone,email,password)
                VALUES(:f_name , :l_name ,:n_phone ,:email ,:password)');

        $db->bindParam(':f_name', $data['f_name']);
        $db->bindParam(':l_name', $data['l_name']);
        $db->bindParam(':n_phone', $data['n_phone']);
        $db->bindParam(':email', $data['email']);
        $db->bindParam(':password', $data['password']);

        try {

            $db->execute();
            header('location:http://onlytrain.local');
        } catch (PDOException $e) {

            if (str_contains($e->getMessage(), "Duplicate")) {

                echo "an account with this info already exists";
            } else {

                die($e->getMessage());
            }
        }
    }

    static public function get_client($data)
    {
        $email = $data;
        try {

            $db = Database::connect()->prepare("SELECT * FROM client WHERE email = :Email");

            $db->execute(array(':Email' => $email));
            $db_data = $db->fetch(PDO::FETCH_ASSOC);
            return $db_data;
        } catch (PDOException $e) {
            return 'error' . $e->getMessage();
        }
    }

    static public function get_depart_Voyage()
    {
        $db = Database::connect()->prepare("SELECT DISTINCT depart FROM `voyage` WHERE Annuler = 0 ");
        $db->execute();
        return $db->fetchAll();
    }

    static public function get_arrive_Voyage()
    {
        $db = Database::connect()->prepare("SELECT DISTINCT arrive FROM `voyage` WHERE Annuler = 0   ");
        $db->execute();
        return $db->fetchAll();
    }

    static public function searchVoyage($data)
    {

        $db = Database::connect()->prepare("SELECT * FROM voyage WHERE depart = :depart AND arrive = :arrive AND CAST(date_dep AS DATE) = :date_dep AND Annuler = 0 AND date_dep > CURRENT_TIMESTAMP ");
        $db->bindParam(':depart', $data['depart']);
        $db->bindParam(':arrive', $data['arrive']);
        $db->bindParam(':date_dep', $data['date_dep']);
        if ($db->execute()) {
            return $db->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    static public function reserve_voyage($id)
    {
        $db = Database::connect()->prepare("SELECT * FROM voyage INNER JOIN train ON voyage.Id_train = train.Id_train AND voyage.Id_voyage = '$id' ");
        $db->execute();
        $db_data = $db->fetch(PDO::FETCH_ASSOC);
        return $db_data;
    }

    static public function client_reserve($data)
    {

        $db = Database::connect()->prepare("INSERT INTO `reservation`(`Id_voyage`, `client` , `user`) VALUES (:Id_voyage,:Id_client,:Id_user)");

        $db->bindParam(':Id_client', $data['Id_client']);
        $db->bindParam(':Id_voyage', $data['Id_voyage']);
        $db->bindParam(':Id_user', $data['Id_user']);
        if ($db->execute()) {
            return true;
        }
    }

    static public function user_reserve($data)
    {
        $db = Database::connect()->prepare('INSERT INTO user(f_name , l_name , n_phone ,email)
        VALUES(:f_name_user , :l_name_user ,:phone_user ,:email_user )');

        $db->bindParam(':f_name_user', $data['f_name_user']);
        $db->bindParam(':l_name_user', $data['l_name_user']);
        $db->bindParam(':phone_user', $data['phone_user']);
        $db->bindParam(':email_user', $data['email_user']);

        $db->execute();



        // var_dump($db);
        // header('location:http://onlytrain.local');
    }

    static public function get_user()
    {

        $db = Database::connect()->prepare("SELECT Id_user FROM user ORDER BY Id_user DESC");
        $db->execute();
        $data = $db->fetch(PDO::FETCH_NUM);
        return $data;
    }

    static public function getVoyages($id)
    {

        $db = Database::connect()->prepare("SELECT DISTINCT 'Id_voyage' FROM reservation WHERE client = '$id'");
        $db->execute();
        $data = $db->fetchAll(PDO::FETCH_NUM);

        return $data;
    }

    static public function myVoyages($id)
    {
        $db = Database::connect()->prepare("SELECT Id_voyage , Id_reserv ,anullation FROM `reservation` WHERE client = $id");
        $db->execute();
        $data = $db->fetchAll(PDO::FETCH_NUM);

        return $data;
    }

    static public function Annuler($data)
    {

        $db = Database::connect()->prepare("UPDATE reservation SET anullation = 1 WHERE Id_reserv = :Id_reserv AND client = :Id_client ");
        $db->bindParam(':Id_reserv', $data['Id_reserv']);
        $db->bindParam(':Id_client', $data['Id_client']);

        if ($db->execute()) {
            self::check($data['Id_voyage']);
            return true ;
        }
    }

    static public function trainPlace($id_voyage)
    {
        $db = Database::connect()->prepare("UPDATE voyage SET Annuler = 1 WHERE Id_voyage = '$id_voyage' AND (SELECT COUNT(*) FROM `reservation` WHERE Id_voyage = '$id_voyage' AND anullation = 0 ) >= (SELECT nb_places FROM voyage INNER JOIN train WHERE Id_voyage = '$id_voyage' AND voyage.Id_train = train.Id_train)");
        if ($db->execute()) {
            return true;
        }
    }

    static public function check($id_voyage)
    {
        $db = Database::connect()->prepare("UPDATE voyage SET Annuler = 0 WHERE Id_voyage = '$id_voyage' AND (SELECT COUNT(*) FROM `reservation` WHERE Id_voyage = '$id_voyage' AND anullation = 0 ) < (SELECT nb_places FROM voyage INNER JOIN train WHERE Id_voyage = '$id_voyage' AND voyage.Id_train = train.Id_train)");
        
        if ($db->execute()) {
            return true;
        }
    }


}
