<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "php_sample_quize_db";
// $dbhost = "ec2-54-159-175-38.compute-1.amazonaws.com";
// $dbuser = "dcjxsnywbmcass";
// $dbpass = "7316e6d56c7471bee0861510d6e85d5d466a2c816bb16cc5c6df50e80f3cfdf4";
// $dbname = "d9g6hif8u6569b";

// $dbhost = "localhost";
// $dbuser = "id19374795_phpquizzeskhmer";
// $dbpass = "@CEmbM7fb&IOwm+x";
// $dbname = "id19374795_php_sample_quize_db";

if($con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	// echo 'Connected';
}else{
	die("Failed to connect!");
}
