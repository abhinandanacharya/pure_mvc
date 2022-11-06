<?php
include 'model.php';
class post_model extends Model {
    public function addPost($data,$file,$id){
        if(!empty($data)){
            $query = "INSERT INTO posts SET title = '".$data['title']."',short_dec ='".$data['short_desc']."',content ='".$data['content']."', cover ='".$file."', author = ".$id.", date ='". date('Y-m-d')."', category ='".$data['category']."'";
            $res = $this->insert($query);
            if($res){
                return HTTP_RESPONSE->success_200($res,"Post Added");
            }else{
                return HTTP_RESPONSE->failure_400(0,"Something went wrong!");
            }
        }else{
            return HTTP_RESPONSE->failure_500();
        }
    }

    public function getPosts($id = ''){
        $query = "select * from posts";
        if($id != '') $query .= " where id ='".$id."'";
        $res =  $this->show_data($query);
        if(!empty($res)){
             return HTTP_RESPONSE->success_200($res);
        }else{
            return HTTP_RESPONSE->failure_400(0,"Post not found");
        }
    }
}
?>