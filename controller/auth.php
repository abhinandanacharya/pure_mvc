<?php
include 'controller.php';

use App\Controller\MainController as Controller;

class Auth extends Controller
{
    public function index()
    {
        if (!$this->Auth()) {
            $this->data['title']  = "Login";
            if (isset($_POST['login'])) {
                $Auth =  $this->model('Auth');
                $response = $Auth->login($_POST);
                if ($response['status'] == 200) {
                    $this->redirect("home");
                } else {
                    $this->data['response'] = $response;
                }
            }
            $this->view("auth/login");
        } else {
            $this->redirect("home");
        }
    }



    public function register()
    {
        if (!$this->Auth()) {
            $this->data['title']  = "Register";
            if (isset($_POST['register'])) {
                $Auth =  $this->model('Auth');
                $response = $Auth->register($_POST);
                if ($response['status'] == 200) {
                    $this->redirect('auth/');
                } else {
                    $this->data['response'] = $response;
                }
            }

            $this->view("auth/register");
        } else {
            $this->redirect("product/index");
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect();
    }
}
