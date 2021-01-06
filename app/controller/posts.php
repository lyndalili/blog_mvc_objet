<?php
include_once("app/model/post.php");
class Controller extends appController
{

    
    function index()
    {
        if (isset($this->params["page"])){
        $offset = ($this->params["page"] - 1) * NBPAGE ;    
        }else {
            $offset = 0;  
        }

        
        global $count;
        //echo "Route : ?module=posts";
        $data["posts"] = $this->model->postList(NBPAGE, $offset);
        $data["count"] = $this->model->coreCount("blog_posts");
        $data ["nbPages"]= ceil($data["count"] / NBPAGE);
        //var_dump($data);
        $this->load->display("posts", "index.php", $data);
    }
    function view()
    {
        if (!isset($this->params["id"])){
             die ("Erreur de paramétre !");
           
        }
        $id = $this->params["id"];  
        $data = $this->model->postRead($id);
        //var_dump($data); exit;
        $this->load->display("posts", "view.php", $data);
    }
    function page404()
    {
        echo "posts: 404 not found !!!!" ;
        $this->load->flash_create("404 detecté !", "danger");
    }
}
