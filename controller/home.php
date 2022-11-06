<?php
include 'controller.php';

use App\Controller\MainController as Controller;
class Home extends Controller{

    public function index(){
        $this->data['title'] = "Home";
        $this->data['source'] = "home";
        if($this->Auth()){
            $this->data['welcome']  = $this->Auth('id');
        }else{
            $this->data['welcome']  = "User";
        }
        $this->view("common/home");
    }
}

?>