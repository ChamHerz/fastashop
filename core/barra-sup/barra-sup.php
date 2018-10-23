<?php
if(!isset($_SESSION)) {
	session_start(); 
}

if (isset($_SESSION['login'])) {
	include 'barra-login.php'; 
} 
else {
	include 'barra-public.php'; 
}
?>