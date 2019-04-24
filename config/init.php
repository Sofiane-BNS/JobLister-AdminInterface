<?php
// Start Session
session_start();

 //Config File
require_once 'config.php';
 //Autoloader

// Include Helpers
require_once 'helpers/system_helper.php';

spl_autoload_register(function($class) {
    include 'lib/' . $class . '.php';
});
