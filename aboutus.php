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
        <h1>About us</h1>
            <div class="para1">
            <p>We are a team of four students from Metropolia, each with own talents.
            We have divided the production of this web app project to segments and everyone of us does some part.
            Miika focuses on doing nothing useful and mostly trying out stuff.
            Mikko focuses on documentation and writing presentations.
            Timo does the hard coding, both front and end. Superior guy.
            Peter tries stuff out and wastes time like a madlad.
            <br><br>
            This web app has been a long project and continues to drive us all insane.
            Our ultimate goal is to have a working habit table where one can put his or hers habits and track them.
            Also this will always stay in prototype state. Just because.
            </p>
            </div>

            <div class="para2">
            <p>

            </p>
            </div>
        </div>
    </div>
    <div class="footsies">
        <footer>
            <h3>Dailies Prototype - Contact Information</h3>
            <ul>
                <li>Miika Honni - miika.honni@metropolia.fi</li>
                <li>Mikko Iivarinen - mikko.iivarinen@metropolia.fi</li>
                <li>Timo Harju - timo.harju@metropolia.fi</li>
                <li>Peter Moilanen - peter.moilanen@metropolia.fi</li>
            </ul>
        </footer>
    </div>
</body>
</html>