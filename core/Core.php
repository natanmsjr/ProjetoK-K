<?php

class Core {
        
    public function run(){
        $parameters = array();
        
        $url = explode('index.php', $_SERVER['PHP_SELF']);
        $url = end($url);        
        
        if(empty($url) || $url=='/'){
            $_SESSION['controller'] = 'homeController';
            $_SESSION['action'] = 'index';
        } else {
            $url = explode('/', $url);           
            array_shift($url);
            
            if(isset($url[0])){
                $_SESSION['controller'] = $url[0].'Controller';
                array_shift($url);
            } else{
                $_SESSION['controller'] = 'homeController';
            }
            if(isset($url[0])){
                $_SESSION['action'] = $url[0];
                array_shift($url);
            } else{
                $_SESSION['action'] = 'index';
            }
            
            if(count($url) > 0){
                $_SESSION['parameters'] = $url;
            }
        }
        
        if (class_exists($_SESSION['controller']) && method_exists($_SESSION['controller'], $_SESSION['action'])) {
            $controller = new $_SESSION['controller']();
            $action = $_SESSION['action'];
            $parameters = $_SESSION['parameters'];
            call_user_func_array(array($controller, $action), $parameters);        
        }
        elseif (class_exists($_SESSION['controller']) && !method_exists($_SESSION['controller'], $_SESSION['action'])) {
            $controller = new $_SESSION['controller']();
            $action = 'index';
            $parameters = $_SESSION['parameters'];
            call_user_func_array(array($controller, $action), $parameters);
        }
        else {
            $currentController = 'errorController';
            $action = 'index';
            $controller = new $currentController();
            call_user_func_array(array($controller, $action), $parameters);
        }
    }
}