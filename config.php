<?php


//ini_set('display_errors','on');
//error_reporting(E_ALL);

class Myautoload {

    public static function start() {

        spl_autoload_register(array(__CLASS__, 'autoload'));

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];

        define('HOST', 'http://'.$host.'/ecrivain/');
        define('ROOT', $root.'/ecrivain/');

        define('CONTROLER', ROOT.'controler/');
        define('VIEW', ROOT.'view/');
        define('MODEL', ROOT.'model/');

        define('ASSETS', HOST.'assets/');
    }

    public static function autoload($class) {
        $class = str_replace('projet4\\', '', $class);
        if(file_exists(MODEL.$class.'.php')) {
            include_once(MODEL.$class.'.php');
        } 
        else if(file_exists(CONTROLER.$class.'.php')) {
            include_once(CONTROLER.$class.'.php');
        } 
        
        else if(file_exists(VIEW.$class.'.php')) {
            include_once(VIEW.$class.'.php');
        } 

        else {
            echo '<p class="erreur">OOOoohhh erreur 404 !</p>';
        }
        
    }
}



