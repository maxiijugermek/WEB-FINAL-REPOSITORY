<?php 
	include ("lock.php");
?>
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Add article</title>

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
					<p><strong>Want to add some article?</strong></p>
                    
                    <form action="add_article.php" method="post" name="form1">
                      <p>
                      <label for="title">Enter name of the article:<br>
                        </label>
                      <input name="title" type="text" id="title"></p>
                      <p>
                        <label for="meta_d">Enter a brief description:<br>
                        </label>
                        <input type="text" name="meta_d" id="meta_d">
                      </p>
                      <p>
                        <label for="meta_k">Enter keywords:<br>
                        </label>
                        <input type="text" name="meta_k" id="meta_k">
                      </p>
                      <p>
                        <label for="date">Enter the date:</label>
                        <br>
<input name="date" type="text" id="date" placeholder="YYYY-MM-DD">
                      </p>
                      <p>
                        <label for="description">Enter a brief description of article with &lt;p&gt;&lt;/p&gt; tags:<br>
                        </label>
                        <textarea name="description" cols="45" id="description" width="160px"></textarea>
                      </p>
                      <p>
                        <label for="text">Enter the whole text of your article with any tags:</label>
                        <br>
<textarea name="text" cols="45" rows="20" id="text"></textarea>
                      </p>
                      <p>
                        <label for="author">Enter the author:</label>
                        <br>
<input type="text" name="author" id="author">
                      </p>
                      <p>
                        <input type="submit" name="submit" id="submit" value="Send article to db">
                        <br>
                      </p>
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