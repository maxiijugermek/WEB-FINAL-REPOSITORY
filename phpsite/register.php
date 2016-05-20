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
<h1 class="h22">If you  do not have an account, just sign up here.
If you have, just press the Login button. You are welcome!</h1>
<h1 class="h33">This website provides you information about programming world.
First you just need to be logged in.</h1>
</div>


<div class="regg">
<div class="regg2">
			 <form method="POST" action="save_users.php">
             	  <div>
                  <label  for="exampleInputEmail1">Username</label>
                  <input style="border-radius:10px;" id="exampleInputEmail1" placeholder="Username" type="text" name="username" required>
                  </div>
                  <div>
                  <label for="login">Login</label>
                  <input style="border-radius:10px;" type="text"  placeholder="Login" name="login" required>
                  </div>
                  <div>
                  <label for="password">Password</label>
                  <input style="border-radius:10px;" type="password"  placeholder="Password" name="password" required>
                  </div>
                  <div>
                  <label  for="exampleInputPassword1">Re-password</label>
                  <input style="border-radius:10px;" id="exampleInputPassword1" placeholder="Re-password" type="password" name="re_password" required>
                  <div>
                  <button style="border-radius:10px;background-color:#9BA6A5" type="submit" name="submit" >Sign up</button>
                  </div>
              </form>
        				<?php
										if(isset($_GET['status']) and $_GET['status']=='empty'){
											echo "<h3 class='status'>You didn't fill all the blanks</h3>";
										}if(isset($_GET['status']) and $_GET['status']=='login_fail'){
											echo "<h3 class='status'>Sorry, but this login is already used.</h3>";
										}
								 ?>
					<div>		 
					<button style="border-radius:10px;background-color:#9BA6A5"  type="submit" ><a href="login.php"  style="text-decoration:none; color:black">Login</a></button>
                    </div>
                    </div>
</div>
<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>