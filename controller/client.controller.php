<?php
require '../model/client.model.php';

class Client
{
    public function cree_compte()
    {

        $data = array(
            'f_name' => $_POST['First_Name'],
            'l_name' => $_POST['Last_Name'],
            'n_phone' => $_POST['phone'],
            'password' => password_hash($_POST['Password'], PASSWORD_BCRYPT),
            'email' => $_POST['email']
        );

        $result = Clients::addClient($data);
    }
    public function login()
    {
        $data['Email'] = $_POST['Email'];

        $result = Clients::get_client($data);
        if ($result->email === $_POST['Email'] && password_verify($_POST['password'], $result->password)) {
            if (!isset($_SESSION)) session_start();
            $_SESSION['email'] = $result->email;
            // die($_SESSION['email']);
            header('location:home.php');
        }
    }
}
//  $bro=new Client::cree_compte($data);
