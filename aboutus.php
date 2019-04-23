<!DOCTYPE html>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<?php include('server.php') ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dropdown.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/clickremove.js" type="text/javascript"></script>
    <script src="js/addrow.js" type="text/javascript"></script>
    <script src="js/dropdown.js" type="text/javascript"></script>      
    <link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet"> 

</head>
<body>
<div class="container2">
    <div class="form-group">
        <div class="dropdown">
                <button onclick="drop()" class="dropbtn">Menu</button>
                    <div id="myDropdown" class="dropdown-content">
                        <p id="dropdown-welcome"><strong><?php echo $_SESSION['username'];?></strong></p>
                        <a href="#">Progress</a>
                        <a href="#">Achievements</a>
                        <a href="aboutus.php">About us</a>
                        <a href="index.php">Homepage</a>
                        <a href="index.php?logout='1'">Logout</a>
                    
        </div>
    </div>
        <div class="abtuscont">
            
        </div>
    </div>
</body>
</html>