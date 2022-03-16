<?php
require __DIR__ . '/../db/database.php';
class Clients
{
    static public function addClient($data)
    {
        $db = Database::connect()->prepare('INSERT INTO client(f_namen_phone,email,password)
                VALUES(:f_name ,:n_phone ,:email ,:password)');

        $db->bindParam(':f_name', $data['f_name']);
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
        $db = Database::connect()->prepare("SELECT DISTINCT depart FROM `voyage` ");
        $db->execute();
        return $db->fetchAll();
    }

    static public function get_arrive_Voyage()
    {
        $db = Database::connect()->prepare("SELECT DISTINCT arrive FROM `voyage` ");
        $db->execute();
        return $db->fetchAll();
    }


    static public function searchVoyage($data)
    {

        $db = Database::connect()->prepare("SELECT * FROM voyage WHERE depart = :depart AND arrive = :arrive AND CAST(date_dep AS DATE) = :date_dep");
        $db->bindParam(':depart', $data['depart']);
        $db->bindParam(':arrive', $data['arrive']);
        $db->bindParam(':date_dep', $data['date_dep']);
        if ($db->execute()) {
            return $db->fetchAll(PDO::FETCH_ASSOC);
        }
    }
}
