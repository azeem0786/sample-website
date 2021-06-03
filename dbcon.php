<?php
session_start();
// error_reporting(0);
//connection
$con = new mysqli("localhost", "root", "", "covid");
// $con = new mysqli("localhost", "u352871344_covid", "Covid@digital123", "u352871344_covid");
if($con->connect_error){
	die('failed to connect'.$con->connect_error);
}