<?php
include 'model.php';
class post_model extends Model {
    public function addPost($data,$file,$id){
        if(!empty($data)){
            $query = "INSERT INTO posts SET title = '".$data['title']."',short_dec ='".$data['short_desc']."',content ='".$data['content']."', cover ='".$file."', author = ".$id.", date ='". date('Y-m-d')."', category ='".$data['category']."'";
            $res = $this->insert($query);
            if($res){
                return $this->httpResponse->success_200($res,"Post Added");
            }else{
                return $this->httpResponse->failure_400(0,"Something went wrong!");
            }
        }else{
            return $this->httpResponse->failure_500();
        }
    }

    public function getPosts($id = ''){
        $query = "select * from posts";
        if($id != '') $query .= " where id ='".$id."'";
        $res =  $this->show_data($query);
        if(!empty($res)){
             $res[0]['postedby'] = $this->author($res[0]['author']); 
             return $this->httpResponse->success_200($res);
        }else{
            return $this->httpResponse->failure_400(0,"Post not found");
        }
    }

    public function author($id){
        return $this->show_data("select name from user where id = $id")[0]['name'];
    }
}
?>