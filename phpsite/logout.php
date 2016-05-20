<?php
unset($_SESSION['login']);
unset($_SESSION['id']);
unset($_SESSION['username']);
session_destroy();
header('location:login.php');
 ?>


<?php /*?><?php 
	include("index.php");
?>
<?php 
	session_start();
	session_destroy();
	session_unset();
?><?php */?>