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

?>