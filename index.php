<?php
//turn on debugging messages
ini_set('display_errors', 'On');
error_reporting(E_ALL);
//Autoloader class to load all the different directories
include_once "autoload.php";
//put your database credentials here
include_once "database.php";

//start of the program
$response = http\processRequest::createResponse();

//  A good way to improve it is namespaces and making the scope of properties and functions to be correctly private, public, or protected
//YOu can also correctly apply abstract and final
//you can also look for lines that can be removed by just doing it in the return
?>