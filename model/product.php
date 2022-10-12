<?php
include 'model.php';
class product_model extends Model{

    public function getProduct($data = null){
       $query = "select * from product";
       $res  = $this->show_data($query);
       return $res;
    }
}

?>