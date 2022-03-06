<?php

require '../db/database.php';

class Clients
{
    static public function addClient($data)
    {
        $db = Database::connect()->prepare('INSERT INTO client(f_name,l_name,n_phone,email,password)
                VALUES(:f_name ,:l_name,:n_phone ,:email ,:password)');

        $db->bindParam(':f_name' ,$data['f_name']);
        $db->bindParam(':l_name',$data['l_name']);
        $db->bindParam(':n_phone',$data['n_phone']);
        $db->bindParam(':email',$data['email']);
        $db->bindParam(':password',$data['password']);

        try{
            $db->execute();
            header('location:home.php');
        }catch(PDOException $e){
            if(str_contains($e->getMessage(),"Duplicate")){
                echo "an account with this info already exists";
            }else{
                die($e->getMessage());
            }
        }
    }

    static public function get_client($data){
        $email = $data['Email'];
        try{
        $db = Database::connect()->prepare("SELECT * FROM client WHERE email = :Email");
        $db -> execute(array(':Email'=>$email));
        return $db->fetch(PDO::FETCH_OBJ);
        
        }catch(PDOException $a){
            return 'error' .$a->getMessage();
        }
    }
}
