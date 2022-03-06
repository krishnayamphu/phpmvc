<?php
spl_autoload_register(function ($filename){
    require_once "{$filename}.php";
});

$app = new Core\App();

