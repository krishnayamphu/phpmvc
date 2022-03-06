<?php
//spl_autoload_register(function ($filename){
//    $file_path="{$filename}.php";
//    if(file_exists($file_path)){
//        require_once $file_path;
//    }
//
//});
require_once 'App\Core\App.php';
$app = new Core\App();

