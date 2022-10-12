<?php
include 'controller.php';
 use App\Controller\MainController as Controller;

class Product extends Controller{
    private $currpath = VIEW."/product/";
    private $schema;
    
    public function __construct($model)
    {
        $this->schema = $this->model(strtolower($model));
    }

    public function index(){
        $this->data['products'] = $this->schema->getProduct();
        $this->data['title'] = "Product Page";
        $this->view('product/index');
    }
}

?>