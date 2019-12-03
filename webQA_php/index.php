<?php
session_start();
define('TEMPLATE', true);
include_once('config/connect.php');

if(isset($_SESSION['mail']) && isset($_SESSION['pass'])){
	include_once('layout.php');
}
else{
	include_once('sign_in.php');	
}
?>
