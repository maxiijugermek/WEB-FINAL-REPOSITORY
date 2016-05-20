<?php 
	include ("lock.php");
	include("blocks/bd.php");
	
	
	if (isset($_POST['id'])){
		$id = $_POST['id'];		
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
					
						if (isset($id)){
							/*We can insert data into database*/
							$result = mysql_query("delete from lessons where id='$id'",$db);
							if ($result == true){
								echo "<p>Data was deleted successfully!</p>";
							}
							else {
								echo "<p>Unfortunately the data wasn't deleted</p>";	
							}
						}
						
						else {
							echo "<p>You didn't choose any of the lessons, so we cannot delete anything</p>";
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