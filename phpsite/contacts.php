<?php 
	include ("blocks/bd.php");
	
	$result = mysql_query("select title, meta_d,meta_k, text from settings where page = 'contacts'",$db);
	
	$myrow = mysql_fetch_array($result);
?>

<!doctype html>
<html>
<head>
<meta name="description" content=" <?php echo $myrow['meta_d'];?>">
<meta name="keywords" content=" <?php echo $myrow['meta_k'];?>">

<meta charset="utf-8">
<title><?php echo $myrow['title'];?></title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
    session_start();
    $connect = mysql_connect('localhost','php','12345');
  	mysql_select_db('phpsite');
    if(empty($_SESSION['login']) or empty($_SESSION['id']) or empty($_SESSION['username'])){
      header('Location:login.php');
    }
    $log=$_SESSION['login'];
    $result=mysql_query("SELECT * FROM users WHERE login='$log'");
    $myrow=mysql_fetch_array($result);
        ?>
<?php include("blocks/header.php");?>
<div class="marginer">
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" class="main_border">
  
  <tbody>
    
    <tr>
      <td>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <?php /*?><?php include ("blocks/lefttd.php"); ?><?php */?>
              <td valign="top">
              
              
              <?php 
			  
			  	include ("blocks/bd.php");
	
	$result = mysql_query("select title, meta_d,meta_k, text from settings where page = 'contacts'",$db);
	
	$myrow = mysql_fetch_array($result);
			  
			  echo $myrow['text'];?>
              
                  </td>
            </tr>
          </tbody>
      </table></td>
    </tr>
    <?php /*?><?php include("blocks/footer.php");?><?php */?>
  </tbody>
</table>
<?php include("blocks/footerr.php");?>
</div>

<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>