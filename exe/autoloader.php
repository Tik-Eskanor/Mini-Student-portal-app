<?php

spl_autoload_register('autoloader');

function autoloader($classname)
{
    $path = "classes/";
    $extension = ".php";
    $fullpath = $path.$classname.$extension;

    include_once($fullpath);
}
session_start();