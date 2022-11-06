<?php
include 'model.php';
class auth_model extends Model {
    private function isExist($data,$type) {
        if($data == '' || $type == ''){
            return false;
        }else{
            $query = "select $type from user where $type = '".$data."'";
            $res = $this->total($query);
            return $res;
        }
    }

    public function register($data = ''){
        if(is_array($data) && !empty($data)){
            if($this->isExist($data['email'],'email')){
                return HTTP_RESPONSE->failure_422($data['email'],"Email already exist");
            }else{
                $query = "INSERT INTO user SET email = '".$data['email']."', password = '".$data['password']."'";
                $res = $this->insert($query);
                if($res){
                    return HTTP_RESPONSE->success_200('','Register Success');  
                }else{
                    return HTTP_RESPONSE->failure_400("","Something Wrong!");
                }
            }
        }else{
           return HTTP_RESPONSE->failure_500();
        }
    }

    public function login($data = ''){
        if(is_array($data) && !empty($data)){
            $user = $this->show_data("select * from user where email ='".$data['email']."' and password = '".$data['password']."'");
            if(!empty($user)){
                $_SESSION['Auth'] = $user[0];
                return HTTP_RESPONSE->success_200('','Login Success');  
            }else{
                return HTTP_RESPONSE->failure_400("","Incorrect email or password");
            }
        }else{
            return HTTP_RESPONSE->failure_400("","Something Wrong!");
        }
    }
}


?>