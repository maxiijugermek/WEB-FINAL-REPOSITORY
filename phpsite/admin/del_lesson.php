<?php
	include ("lock.php");
	include("blocks/bd.php");
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Delete lesson</title>

<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php include("blocks/header.php");?>
<div class="marginer">
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" class="main_border">
  <tbody>
    <?php /*?><?php include("blocks/header.php");?><?php */?>
    <tr>
      <td>
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <?php /*?><?php include ("blocks/lefttd.php"); ?><?php */?>
              <td valign="top">
					<div class="lesson_title">
					<p><strong>Choose lesson to delete:</strong></p>

					<form action="drop_lesson.php" method="post">
                    
					<?php
					
                    	$result = mysql_query("select title,id from lessons");
						
						$myrow = mysql_fetch_array($result);
						
						do{
							printf ("<p><input name='id' type='radio' value='%s'><label> %s</label></p>",$myrow['id'],$myrow['title']);	
						} while ($myrow = mysql_fetch_array($result));
					
					?>
                    
                   	  <p><input type="submit" name="submit" value="Delete lesson"></p>
                    
                </form>             
              </div>
              <br><br><div class='lineM'></div>
              </td>
              
            </tr>
          </tbody>
      </table></td>
    </tr>
    <?php /*?><?php include("blocks/footer.php");?><?php */?>
  </tbody>
</table>
</div>
</body>
</html>