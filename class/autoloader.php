<?php

/**
 * Created by PhpStorm.
 * User: Aldeguer Thomas
 * Date: 06/01/2017
 * Time: 14:48
 */
/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        require 'class/' . $class . '.php';
    }

}