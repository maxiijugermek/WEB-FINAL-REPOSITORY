<?php 
	include ("lock.php");
	include("blocks/bd.php");
	
	if (isset($_POST['title'])){
		$title = $_POST['title'];
		if ($title == ''){
			unset($title);	
		}	
	}
	if (isset($_POST['meta_d'])){
		$meta_d = $_POST['meta_d'];
		if ($meta_d == ''){
			unset($meta_d);	
		}		
	}
	if (isset($_POST['meta_k'])){
		$meta_k = $_POST['meta_k'];
		if ($meta_k == ''){
			unset($meta_k);	
		}		
	}
	if (isset($_POST['text'])){
		$text = $_POST['text'];	
		if ($text == ''){
			unset($text);	
		}	
	}
	if (isset($_POST['id'])){
		$id = $_POST['id'];	
		if ($id == ''){
			unset($id);	
		}	
	}
	
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Handler</title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" class="main_border">
  <tbody>
    <?php include("blocks/header.php");?>
    <tr>
      <td>
        <table width="690" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <?php include ("blocks/lefttd.php"); ?>
              <td valign="top">

					<?php 
					
						if (isset($title) && isset($meta_d) && isset($meta_k) && isset($text)){
							/*We can insert data into database*/
							$result = mysql_query("UPDATE settings SET title='$title', meta_d='$meta_d', meta_k='$meta_k', text='$text' WHERE id='$id'");
							if ($result == true){
								echo "<p>Data of your page was changed successfully!</p>";
							}
							else {
								echo "<p>Unfortunately the data of your page wasn't changed</p>";	
							}
						}
						
						else {
							echo "<p>You didn't entered all the information need to be inserted into database to be changed instead, please feel all the fields</p>";
						}
					?>
                                    
              </td>
            </tr>
          </tbody>
      </table></td>
    </tr>
    <?php include("blocks/footer.php");?>
  </tbody>
</table>
</body>
</html>