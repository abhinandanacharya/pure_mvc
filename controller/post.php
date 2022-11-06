<?php
include 'controller.php';

use App\Controller\MainController as Controller;

class Post extends Controller
{
    public function index()
    {
        $this->data['title'] = 'Posts';
        $this->data['source'] = "post";
        $Post = $this->model('Post');
        
        $this->data['posts'] = $Post->getPosts();
        
        $this->view('posts/index');
    }

    public function write()
    {
        if (!$this->Auth()) {
            $this->redirect('auth/');
        }
        $this->data['title'] = "Write Your Post";
        $this->data['source'] = "post";
        if (isset($_POST['write_post'])) {
            $target_file = '';
            if (isset($_FILES['cover'])) {
                $target_file = './uploads/' . random_int(10, 1000) . '-' . $_FILES['cover']['name'];
                $temp_name = $_FILES['cover']['tmp_name'];
                move_uploaded_file($temp_name, $target_file);
            }
            $Post  = $this->model('Post');
            $this->data['response']  = $Post->addPost($_POST, $target_file, $this->Auth('id'));
        }
        $this->view('posts/write');
    }

    public function readmore($id = ''){
        if($id != ''){
           $this->data['title'] = 'Single Post View';
           $Post = $this->model("Post");
           $response = $Post->getPosts($id);
           if($response['status'] == 200){
                $this->data['title'] = $response['data'][0]['title'];
            }
            $this->data['post'] = $response;
        }else{
            $this->redirect('post');
        }
        $this->view('posts/single_post');
    }
}
