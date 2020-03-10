<?php
$pass="";$err_pass="";
$uname="";$err_uname="";
	if(isset($_POST['login']))
	{
		if(empty($_POST['uname'])){$err_uname="*Username Required";}
			else{$uname=htmlspecialchars($_POST['uname']);}
		if(empty($_POST['pass'])){$err_pass="*Password Required";}
			else{$pass=htmlspecialchars($_POST['pass']);}
		if($uname=="admin" && $pass=="admin")
		{
			header("Location:Admin_index.php");
		}
		if($uname=="user" && $pass=="user")
		{
			header("Location:gen_user_index.php");
		}
		if($uname=="sponsor" && $pass=="sponsor")
		{
			header("Location:Sponsor_index.php");
		}
		else{$err_uname="*Invalid Username or Password!!";}
	}



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="log_in_style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bellota:ital,wght@1,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="login-form">
      <form class="" action="" method="post">
        <h1>Log In</h1>
        <span style="color: red"><?php echo $err_uname;?></span><br>
        <input type="text" placeholder="Username" class="txtb" name="uname" value="<?PHP echo $uname;?>">
        <input type="password" placeholder="Password" class="txtb" name="pass">
        
        <input type="submit" name="login" value="Log In" class="login-btn">
        <a href="gen_user_signup.php">Create an account</a>
    </div>
  </body>
</html>
