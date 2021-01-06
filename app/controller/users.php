<?php
include_once("app/model/post.php");
class Controller extends appController
{
    function index()
    {
        $data["users"] = $this->model->coreAll("blog_users");
        $data["count"] = $this->model->coreCount("blog_users");
        //var_dump($data);exit;

        $this->load->display("users", "index.php", $data);
    }
}
