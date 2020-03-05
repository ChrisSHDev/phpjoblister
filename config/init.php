<?php 
    //start session

    session_start();

    require_once 'config.php';

    //Include helpers
    require_once 'helper/system_helper.php';


    function __autoload($class_name){
        require_once 'lib/'.$class_name.'.php';
    }