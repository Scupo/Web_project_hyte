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
    <title>HABIT</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet"> 

</head>
<body>

	<div class="container">
            <div class="bg-image">
            </div>

						<div class="login">
  <form method="post" action="login.php">
		<h1>Dailies</h1>
  	<?php include('errors.php'); ?>
							<fieldset>
                <h2>Log In</h2>
                <p><br> <input type="text" name="username" title="Username accepts only alphabetical characters. No spaces, numbers or special characters." id="username" placeholder="Username" /></p>
                <p><br> <input type="password" name="password" title="Password should be 8-16 characters long." id="pw" placeholder="**********"/></p>
                <p><input type="submit" class="btn" name="login_user" value="Log In" id="submit" /></p>
            	</fieldset>
		<p style="color:whitesmoke;">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
	</div>
</div>
	<footer>
        <p>(C) Metropolia AMK - HYTE</p>
    </footer>


</body>
</html>