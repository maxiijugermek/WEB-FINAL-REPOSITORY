﻿<?php
	include ("lock.php");
	include("blocks/bd.php");
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Page of editing texts</title>

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
                    <p><strong>Choose the page for editing the data:</strong></p>
                    
					<?php
					if (isset($_GET['id'])){
						$id = $_GET['id'];	
					}
					
					if (!isset($id)){
					
                    	$result = mysql_query("select title,id from settings");
						
						$myrow = mysql_fetch_array($result);
						
						do{
							printf ("<p class='linkk'><a href='edit_text.php?id=%s'>%s</p>",$myrow['id'],$myrow['title']);	
						} while ($myrow = mysql_fetch_array($result));
					}
					
					else{
						
						$result = mysql_query("select * from settings where id=$id");
						
						$myrow = mysql_fetch_array($result);
						
print <<<HERE
						<form action="update_text.php" method="post" name="form1">
                      <p>
                      <label for="title">Enter name of the page (tag title):<br>
                        </label>
                      <input value="$myrow[title]" name="title" type="text" id="title"></p>
                      <p>
                        <label for="meta_d">Enter a brief description of the page:<br>
                        </label>
                        <input value="$myrow[meta_d]" type="text" name="meta_d" id="meta_d">
                      </p>
                      <p>
                        <label for="meta_k">Enter the keywords of the page: <br>
                        </label>
                        <input value="$myrow[meta_k]" type="text" name="meta_k" id="meta_k">
                      </p>
                      <p>
                        <label for="text">Enter the whole text of your page with any tags:</label>
                        <br>
<textarea name="text" cols="45" rows="20" id="text">$myrow[text]</textarea>
                      </p>
					  <input type="hidden" name="id" value="$myrow[id]">
                      <p>
                        <input type="submit" name="submit" id="submit" value="Save the changes">
                        <br>
                      </p>
                    </form>
HERE;
					}
					?>
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