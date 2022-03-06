<?php
require_once 'App\Core\Controller.php';
use Core\Controller;

class AboutController extends Controller
{
    public function index(){
        $msg="Hello World";
       $this->view('about',['msg'=>$msg]);
    }
}
