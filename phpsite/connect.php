<?php 
	$db_host = 'localhost';
	$db_user = 'php';
	$db_pass = '12345';
	$db_database = 'phpsite';
	
	$link = mysql_connect($db_host,$db_user,$db_pass ) or die("Server can't access with database!");

	mysql_select_db($db_database,$link);
	mysql_query("SET names UTF8");

?>