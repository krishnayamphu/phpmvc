<?php
namespace Dao;
require_once 'App\Database\ConnectDB.php';
require_once 'App\Models\User.php';
use database\ConnectDB;
use PDO;
use User;

class UserDao
{
    public static function getAllUsers()
    {
        $users = array();
        $con = ConnectDB::connect();
        $sql = "SELECT * FROM users";
        $stmt = $con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $key => $u) {
            $user = new User();
            $user->setId($u['id']);
            $user->setUsername($u['username']);
            $user->setPassword($u['password']);
            $user->setCreatedDate($u['created_date']);
            $users[] = $user;
        }
        return $users;
    }
}
