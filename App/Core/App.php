<?php
namespace Core;
class App
{
    protected $controller = 'HomeController';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        $controllerName = ucfirst($url[0]);
        $fileName = 'App/Controllers/' . $controllerName . 'Controller.php';
        if (file_exists($fileName)) {
            $controllerClass = $controllerName . 'Controller';
            $this->controller = $controllerClass;
            unset($url[0]);
        }
        require_once 'App/Controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller();
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}
