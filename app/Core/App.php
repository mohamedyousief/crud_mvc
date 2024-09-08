<?php
/*
 * 
 * front end controller
 * 
 * */


class App
{
    protected $controller = "HomeController";
    protected $action = "index";

    protected $params = [];

    function __construct()
    {
        $this->preper_url();
        $this->render();
    }


    /**
     * 
     * exetract controller , action and parameters
     * @return void
     * 
     */
    private function preper_url()
    {
        $url = '';
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        }
        if (!empty($url)) {
            $url = trim($url, '/');
            $url = explode('/', $url);

            $this->controller = isset($url[0]) ? ucwords($url[0]) . "Controller" : "HomeController";
            $this->action = isset($url[1]) ? $url[1] : "index";

            unset($url[0], $url[1]);

            $this->params = $url;
        }
    }

    /**
     * render function
     */

    private function render()
    {
        if (class_exists($this->controller)) {
            $controller = new $this->controller;
            if (method_exists($controller, $this->action)) {
                call_user_func_array([$controller, $this->action], $this->params);
            } else {
                echo "method => " . $this->action . " not exeists";
            }
        } else {
            echo "controller => " . $this->controller . " not found";
        }
    }
}
