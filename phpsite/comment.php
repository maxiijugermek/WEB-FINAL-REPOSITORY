<?php
session_start(); 
$db = mysql_connect("localhost","php","12345");
mysql_select_db("phpsite",$db);

if (isset($_POST['textt'])){
	$textt = $_POST['textt'];	
}

if (isset($_POST['id'])){
	$id = $_POST['id'];	
}

echo $id;


$name = $_SESSION['username'];

$result = mysql_query("insert into comment (comment_id,user_name,comment_text) values ('$id','$name','$textt')",$db);

?>