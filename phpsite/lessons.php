<?php 
	include ("blocks/bd.php");
	
	$result = mysql_query("select title,meta_d,meta_k,text from settings where page = 'lessons'",$db);
	
	$myrow = mysql_fetch_array($result);
?>

<!doctype html>
<html>
<head>
<meta name="description" content=" <?php echo $myrow['meta_d'];?>">
<meta name="keywords" content="<?php echo $myrow['meta_k'];?> ">

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
        <table width="900" border="0" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <?php /*?><?php include ("blocks/lefttd.php"); ?><?php */?>
              <td valign="top">
              
                <?php /*?><p><?php echo $myrow['text'];?></p><?php */?>
              
              	<?php 
			  		$result = mysql_query ("select id, title, description, author, date from lessons",$db);
					
					$myrow = mysql_fetch_array($result);
					
					
			        do {	
                
						printf ("<table align='center' class='lesson'>
						  <tbody>
							<tr>
							  <td><div class='borderM'>%s</div></td>
							</tr>
							<tr>
							  <td class='lesson_title'>
							  
							  <p class='lesson_name'><a href='view_lesson.php?id=%s'>%s</a></p>
							  
							  <p class='lesson_adds'>Date loaded: %s</p>
							  
							  <p class='lesson_adds'>Author of the lesson: %s</p>
							  
							  </td>
							</tr>
							
						  </tbody>
						</table><br><br><div class='lineM'></div>",$myrow['description'], $myrow['id'], $myrow['title'], $myrow['date'], $myrow['author']);
					
					}
					
					while ($myrow = mysql_fetch_array($result));
				?>
              <p>&nbsp;</p></td>
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