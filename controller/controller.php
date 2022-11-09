<?php
 namespace App\Controller;

class MainController{
    public $data = array();
    public function view($view){
        extract($this->data);
        require_once VIEW.'/layout/header.php';
        require_once VIEW.$view.".php";
        require_once VIEW.'/layout/footer.php';
    }
    public function model($model) {
        require_once MODEL.$model.".php";
        $model = $model."_model";
        return  new $model();
    }

    public function redirect($path = '')  {
        header("location:".SITE_URL.$path);
    }

    public function Auth($key = '') {
        if(isset($_SESSION['Auth'])){
            if(isset($_SESSION['Auth'][$key])){
                return $_SESSION['Auth'][$key];
            }else if($key == ''){
                return $_SESSION['Auth'];
            }else{
               return null;
            }
        }else{
            if($key  == ''){
                return false;
            }else{
            $this->redirect("auth");
            }
        }
        
    }

    public function imageValidator($image){
        $imgres  = array();
        if(!empty($image)){
            if($image['size'] > 2000000){
                $imgres['sizeerr'] = "Image size must be lower or equal to 2 mb"; 
            }
            if(!in_array(strtolower($image['type']),['image/png','image/jpeg','image/jpg'])){
                $imgres['typeerr'] = "Image type only in jpb/png/jpeg"; 
            }
        }else{
            $image['err'] = "something went wrong";
        }

        return $imgres;
    }
}

?>