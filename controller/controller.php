<?php
 namespace App\Controller;

class MainController{
    public $data = array();
    public function view($view){
        extract($this->data);
        require_once VIEW.$view.".php";
    }
    public function model($model) {
        require_once MODEL.$model.".php";
        $model = $model."_model";
        return  new $model();
    }
}

?>