<?php
require_once('https.php');
?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration page</title>
    <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet"> 
</head>
<body>

<div class="container3">
            
            
	<div class = "login">
  <form method="post" action="register.php" class="loginform">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
	</form>
	</div>
	<footer>
        <p>(C) Metropolia AMK - HYTE</p>
    </footer>
</div>
</body>
</html>