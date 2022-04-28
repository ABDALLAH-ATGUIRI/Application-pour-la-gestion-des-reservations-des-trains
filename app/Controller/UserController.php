<?php

require __DIR__ . '/../Model/client.model.php';

class userController
{

    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['Password'] === $_POST['confirm_password']) {
                $data = array(
                    'f_name' => $_POST['username'],
                    'l_name' => $_POST['lastname'],
                    'n_phone' => $_POST['phone'],
                    'password' => password_hash($_POST['Password'], PASSWORD_BCRYPT),
                    'email' => $_POST['email']
                );
                Clients::addClient($data);
            } else {
                echo '<script>alert("Confirmer le mot de passe incorrect , Réessayer !!!");
                        history.back()
                </script>';
                
            }
        }else{
            View::load('user/signup');
        }
    }

    public function login()
    {
         if (isset($_POST["login"])) {
            $email = $_POST['email'];
            $result = Clients::get_client($email);

            if (!empty($result)   && password_verify($_POST['password'], $result['password']) == 1) {
                // $_SESSION['Id_client'] = $result['Id_client'];
                $_SESSION['user'] = $result;
                $this->afterLogin($_SESSION);
                View::load('home', $_SESSION['user']);
            } else {
                View::load('home');
            }
        }
    }

    public function afterLogin($result)
    {

        $_SESSION['Id_client'] = $result['user']['Id_client'];
        $_SESSION['user'] = $result['user'];
        View::load('home', $result);
    }

    static public function logoutClient()
    {
        session_unset();
        session_destroy();
        $_SESSION[] = NULL;
        header('location:http://onlytrain.local');
    }

    public function getVoyage()
    {

        $data = array(
            'depart' => $_POST['gare_dep'],
            'arrive' => $_POST['gare_arr'],
            'date_dep' => $_POST['date']

        );
        $view_data['trip'] = Clients::searchVoyage($data);
        View::load('home', $view_data);
    }

    static public function search()
    {
        $view_data['depart'] = Clients::get_depart_Voyage();
        $view_data['arrive'] = Clients::get_arrive_Voyage();
        // View::load('home', $view_data);
        return $view_data;
    }

    public function profile()
    {

        $id = $_SESSION['Id_client'];

        $view_data = Clients::getVoyages($id);
        // return $view_data;
        View::load('user/profile', $view_data);
    }

    public function reservation()
    {
        $id = $_POST['id'];
        $view_data = Clients::reserve_voyage($id);
        View::load('user/reservation', $view_data);
    }

    public function reserve()
    {
        if (isset($_POST['select'])) {

            $data['Id_voyage'] = $_POST['Id_voyage'];

            if (isset($_SESSION['user'])) :

                $data['Id_client'] = $_SESSION['Id_client'];

            else :

                $this->user();
                $id = Clients::get_user();

                $data['Id_user'] = $id[0];
            endif;
            $retur = Clients::client_reserve($data);
            if ($retur == true) {
                Clients::trainPlace($data['Id_voyage']);
                header('location:http://onlytrain.local');
            }


            // var_dump($data);  

        }
    }

    public function user()
    {
        $data = array(
            'f_name_user' => $_POST['f_name_user'],
            'l_name_user' => $_POST['l_name_user'],
            'email_user' => $_POST['email_user'],
            'phone_user' => $_POST['phone_user'],
        );

        Clients::user_reserve($data);
    }

    static public function getMyVoyage()
    {

        $id = $_SESSION['Id_client'];
        $data = Clients::myVoyages($id);
        return $data;
    }

    static public function Annuler()
    {
        $time =  strtotime($_POST['date_dep']) - strtotime('now')+60*60;
        echo date('h:i',$time);
        if ($time > '1:00' ) {
            $data['Id_client'] = $_SESSION['Id_client'];
            $data['Id_reserv'] = $_POST['Id_reserv'];
            $data['Id_voyage'] = $_POST['Id_voyage'];
            Clients::Annuler($data);
            header('location:http://onlytrain.local/user/profile');
        } else {
            echo '<script>
                        alert("Vous ne pouvez pas effectuer cette opération"); 
                        history.back(); 
                  </script>';
            
        }
    }
    
}
//  $bro=new Client::cree_compte($data);
