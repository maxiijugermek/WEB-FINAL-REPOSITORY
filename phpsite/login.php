<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="words1">
<h1 class="h11">Do you have an account?</h1>
<h1 class="h22">If you have an account just log in to our site.
If not just press the Sign button. You are welcome!</h1>
<h1 class="h33">This website provides you information about programming world.
First you just need to be logged in.</h1>
</div>

			<div class="logg">
              <div class="logg2">
              <form method="POST" action="check_user.php" role="form">
                  <div>
                  <label  for="exampleInputEmail1">Login</label>
                  <input  id="exampleInputEmail1" required placeholder="Login" type="email" name="login" style="border-radius:10px;">
                  </div>
                  <div>
                  <label  for="exampleInputPassword1">Password</label>
                  <input style="border-radius:10px;" id="exampleInputPassword1" required placeholder="Password" type="password" name="password">
                  </div>
                  <div>
                  <button style="border-radius:10px;background-color:#9BA6A5" type="submit"  name="submit">Login</button>
              	  </div>
              </form>
            
			<?php
						if(isset($_GET['status']) and $_GET['status']=='reg_complete'){
							echo "<h4 style='color: #005580;'>Thank you for your registration, now you can to log in! :)</h4>";
						}if(isset($_GET['status']) and $_GET['status']=='empty'){
							echo "<h4 class='status'>You didn't fill all the blanks</h4>";
						}if(isset($_GET['status']) and $_GET['status']=='log_fail'){
							echo "<h4 class='status'>You haven't registered.</h4>";
						}if(isset($_GET['status']) and $_GET['status']=='pass_fail'){
							echo "<h4 class='status'>Your password incorrect.Try again!</h4>";
						}
						 ?>
			  <div>				
              <button type="submit" style="border-radius:10px; background-color:#9BA6A5"><a href="register.php" style="text-decoration:none; color:black">Sign</a></button>
              </div>
              </div>
			</div>

<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="script.js"></script>            
</body>
</html>