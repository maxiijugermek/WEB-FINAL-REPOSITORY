<?php
$connect = mysql_connect('localhost','php','12345') or die(mysql_error());
mysql_select_db('phpsite');
if(isset($_POST['submit'])) {

  $username=$_POST['username'];
  $login=$_POST['login'];
  $password=$_POST['password'];
  $re_password=$_POST['re_password'];
  if (empty($username) or empty($login) or empty($password) or empty($re_password)){
		header("Location:register.php?status=empty");
		
	}
  else{
  $result=mysql_query("SELECT * FROM users WHERE login='$login'");
  $myrow=mysql_fetch_array($result);
  if($myrow['login']==$login) {
    header('location:register.php?status=login_fail');
  	
  }else{
    if($password==$re_password){
      $password=md5($password);
      $finish=mysql_query("INSERT INTO users (id,username,login,password) VALUES(NULL,'$username','$login','$password')");
      if($finish=='TRUE'){
        header('location:login.php?status=reg_complete');
      	
	  }
	  
    }
  }
  }
  }

?>