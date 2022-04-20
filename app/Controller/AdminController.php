<?php
require __DIR__ . '/../Model/admin.model.php';

class adminController
{
    
    public function __construct()
    {
    }

    public function index()
    {
        View::load('admin/index');
    }

    public function addVoyage()
    {
        $acc = new Admin();
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
                header('location:http://onlytrain.local/admin/dashboard');
            }
        } else {
            View::load('admin/addVoyage');
        }
    }

    public function login()
    {

        if (!isset($_SESSION['email'])) {
            if (isset($_POST["loginAdmin"])) {


                $data = array(
                    'email' => $_POST['email'],
                    'pass' => $_POST['password']
                );
                $result = Admin::get_admin($data);

                if ($result === 1) {

                    $_SESSION['email'] = $_POST['email'];

                    $this->dashboard();
                } else {
                    echo ' <h1 class="text-danger text-center h-5">Aucun résultat ne correspond au terme de votre recherche.</h1>';
                    View::load('admin/index');
                }
            } else {
                View::load('admin/dashboard');
            }
        }else{
            View::load('admin/dashboard');
        }
    }

    public function logoutAdmin()
    {

        session_unset();
        session_destroy();
        $_SESSION[] = NULL;
        View::load('admin/index');
    }

    public function dashboard()
    {
        if(isset($_SESSION['email']))
        {
            $view_data = Admin::getVoyages();
            View::load('admin/dashboard', $view_data);
        }else{
            View::load('admin/index');
        }
        
    }


    public function EditVoyage()
    {
        if (isset($_POST["edit-submit"])) {

            $id = $_POST['Id_voyage'];

            $view_data = Admin::getOneVoyage($id);
            $view_data['trains'] = $this->trains();
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
                "id"  => $_POST["id"],

            );

            Admin::editVoyage($data);
        }
    }

    public function annulerVoyages()
    {
        if (isset($_POST["Annuler-submit"])) {

            $id = $_POST['Id_voyage'];
            Admin::annulerVoyage($id);
        }
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

            $result = Admin::addTrain($data);
            header('location:trains.php');
        }
    }

    public function trains()
    {

        $train = Admin::getAllTrains();
        return $train;
    }


    public function Clients()
    {
        $view_data = Admin::getAllClients();
        View::load('admin/Clients', $view_data);
    }

    public function Travelers()
    {


        if (isset($_POST['voyages'])) {
            $voyage = $_POST['voyages'];
            $view_data = Admin::getTravelersUser($voyage);
            $view_data += Admin::getTravelersClient($voyage);
            View::load('admin/Travelers', $view_data);
            header('');
        } else {
            View::load('admin/Travelers');
        }
    }
}
