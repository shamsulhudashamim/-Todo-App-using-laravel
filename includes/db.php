<?php
//create database connection globally cz its easy and efficient to use in every pages we have to include db connection it automatically does a connection we need not to establish every time connection.
//all this are in super global form and constant variable used inside of the loop for making the connection for all global . it is the best way not doing connect everytime in database connection.
$db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] = "";
$db["db_name"] = "php_cms";
foreach($db as $key => $value){
	//constant variable : define($name , $value);
	define(strtoupper($key) , $value);
}
//database connection
$connection = mysqli_connect(DB_HOST , DB_USER, DB_PASS, DB_NAME);
//checking connection
if(!$connection){
	echo 'no connection';
}
?>