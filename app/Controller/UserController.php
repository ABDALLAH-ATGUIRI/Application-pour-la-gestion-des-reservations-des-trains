<?php
require __DIR__ . '/../Model/client.model.php';

class userController
{


    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'f_name' => $_POST['username'],
                'n_phone' => $_POST['phone'],
                'password' => password_hash($_POST['Password'], PASSWORD_BCRYPT),
                'email' => $_POST['email']
            );
            Clients::addClient($data);
        } else {
            View::load('user/signup');
        }
    }

    public function login()
    {
        
        if (isset($_POST["login"])) {

            $email = $_POST['email'];

            
            $result = Clients::get_client($email);
           
            if ($result['email'] === $_POST['email'] && password_verify($_POST['password'], $result['password']))  {

                if (!isset($_SESSION)) {
                    session_start();
                    $_SESSION['Id_client'] = $result['Id_client'];
                    
                    return View::load('home', $result);
                    // header('location:http://onlytrain.local');
                }

                
            } else {
                // header('location:http://onlytrain.local');
                // echo "<h6 class=''>The info that you've entered is incorrect.</h6>";
            }
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        $_SESSION = NULL;
        header('location:http://onlytrain.local');
    }

    public function getVoyage()
    {
        if (isset($_POST['search'])) {
            $data = array(
                'depart' => $_POST['gare_dep'],
                'arrive' => $_POST['gare_arr'],
                'date_dep' => $_POST['date']
            );
            $view_data = Clients::searchVoyage($data);
            return $view_data;
        }
    }
    public function search()
    {
        $view_data['depart'] = Clients::get_depart_Voyage();
        $view_data['arrive'] = Clients::get_arrive_Voyage();

        return $view_data;
    }
    public function profile()
    {
        View::load('user/profile');
    }
}
//  $bro=new Client::cree_compte($data);
