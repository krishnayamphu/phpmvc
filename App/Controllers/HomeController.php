<?php
require_once 'App\Core\Controller.php';
require_once 'App\Dao\UserDao.php';

use Core\Controller;
use Dao\UserDao;
class HomeController extends Controller
{
    public function index()
    {
        $users=UserDao::getAllUsers();
        $this->view("welcome",['users'=>$users]);
//        $user=$this->model("User");
//        $user->username="alex";
//        echo $user->username;
    }

    public function test($msg='')
    {
        echo "testing something".$msg;;
    }
}
