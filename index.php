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
	<title>Home</title>
     
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

<div class="content">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	
    <?php endif ?>
</div>

<div class="container2">  
<header>
           
           
<div class="form-group">  
                <form name="add_habit" id="add_habit" method="post">  
                    <input type="text" name="habitname" id="habitname" placeholder="Enter your habit" class="form-control name_list">         
                    <button type="button" onclick="addRow()" name="submithabit" id="submithabit" class="btn btn-info" value="Submit"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><g><path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></svg></button>  
                </form> 
                <div class="dropdown">
                <button onclick="drop()" class="dropbtn">Menu</button>
                    <div id="myDropdown" class="dropdown-content">
                        <p id="dropdown-welcome"><strong><?php echo $_SESSION['username'];?></strong></p>
                        <a href="#">Progress</a>
                        <a href="#">Achievements</a>
                        <a href="index.php?logout='1'">Logout</a>
                    
                </div>
            </div>
            </header>      
            <div class="habit-table">   
            <h2>Habits to complete</h2>               
            <table class ="habit-container">
               
            <tr>
                <th>Habitname</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
            </tr>
            
            <tr>

            </tr>
            
            <tr>

            </tr>
            
            <tr>

            </tr>
            
            <tr>

            </tr>
            
            <tr>

            
            </table>
                           
                     
            
</div>                
</div>   
           

</body> 
</html>
