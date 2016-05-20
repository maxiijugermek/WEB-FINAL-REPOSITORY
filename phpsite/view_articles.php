<?php 
	include ("blocks/bd.php");
	
	if (isset($_GET['id'])){
		$id = $_GET['id'];	
	}
	
	$result = mysql_query("select * from articles where id = '$id'",$db);

	$myrow = mysql_fetch_array($result);
?>

<!doctype html>
<html>
<head>
<meta name="description" content="<?php echo $myrow['meta_d'];?> ">
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
              
              <td valign="top">
             
                <br><br><div class='lineB'></div>
                <br><br><div class='lineB'></div>
                <br><br>  
                <div class="lineBB">
                <p class="view_title"><?php 
					include ("blocks/bd.php");
	
	if (isset($_GET['id'])){
		$id = $_GET['id'];	
	}
	
	$result = mysql_query("select * from articles where id = '$id'",$db);

	$myrow = mysql_fetch_array($result);
				echo $myrow['title'];?></p>
                <p class="view_date">Date loaded: <?php echo $myrow['date'];?></p>
                <p class="view_date">Author: <?php echo $myrow['author'];?></p>
                <p><?php echo $myrow['text'];?></p>
                </div>
                <br><br><div class='lineB'></div> 
                <br><br><div class='lineB'></div>
                <br><br>  
                <div class="cover1">
                <div class="comme">
                	<form action="comment.php" name="comment" method="post">
                    <p>
                        <label for="textt" style="color:black">Leave a comment:<br><br>
                        </label>
                        <input type="text" name="textt" id="textt" style="border-radius:6px;">
                      </p>
                      
                      <p>
                        <input type="submit" name="submit" id="submit" value="Send comment to db" style="border-radius:5px">
                        <br>
                      </p>
                      <input type="hidden" name="id" id="textt" value="<?php echo $id; ?>">
                    </form>
                </div>
                </div>  
                <br><br>
                <div class="cover2">
                <?php 
					$result = mysql_query("select * from comment where comment_id='$id'",$db);
					$myrow = mysql_fetch_array($result);
					
					do { printf ("<div class='comer'>
						<p>User name is: %s<p>
						<p>User comment is: %s</p>
					</div>"
					,$myrow['user_name'],$myrow['comment_text']);
						
					} while($myrow = mysql_fetch_array($result));
				?>
                </div>
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