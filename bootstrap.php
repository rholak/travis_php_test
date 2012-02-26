<?php
function autoload($class) {
    $file = $class.'.php';
    try{
        include_once $file;
    } catch (Exception $e) {

    }
}
spl_autoload_register('autoload');
