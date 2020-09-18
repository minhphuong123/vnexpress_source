<?php
spl_autoload_register(function($classname){
    $exp = str_replace('_','/',$classname);
    $path = str_replace('libs','',dirname(__FILE__));
    include_once $path.'/'.$exp.'.php';
});