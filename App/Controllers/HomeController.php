<?php
use Core\Controller;
class HomeController extends Controller
{
    public function index()
    {
//        $users=array("ramesh","ram","hari");
//        $this->view("welcome",['users'=>$users]);
        $user=$this->model("User");
        $user->username="alex";
        echo $user->username;
    }

    public function test($msg='')
    {
        echo "testing something".$msg;;
    }
}
