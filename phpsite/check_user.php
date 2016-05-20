<?php
session_start();
	$connect = mysql_connect('localhost','php','12345');
	mysql_select_db('phpsite');

	if(isset($_POST['submit'])) {
	$login = $_POST['login'];
	$password=md5($_POST['password']);
	$login = htmlspecialchars($login);
		$query = mysql_query("SELECT * FROM users WHERE login = '$login'");
		$user_data = mysql_fetch_array($query);
		if($user_data['password']==$password){
			$_SESSION['login']=$user_data['login'];
			$_SESSION['username']=$user_data['username'];
			$_SESSION['id']=$user_data['id'];
		
			header("Location: index.php");
		
		
}
		else {
			header('Location: login.php?status=pass_fail');
		}

	}

	
?>
