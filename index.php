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

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======


>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
>>>>>>> c5414d06aede77b75d58eddfe3d084bb4f86af0d
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <title>Home</title>
     
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> c5414d06aede77b75d58eddfe3d084bb4f86af0d
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/dropdown.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="js/clickremove.js" type="text/javascript"></script>
    <script src="js/addrow.js" type="text/javascript"></script>
    <script src="js/dropdown.js" type="text/javascript"></script>      
    <link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet"> 

<<<<<<< HEAD

</head>
<body class = "index">

=======
=======
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <link rel="stylesheet" type="text/css" href="css/dropdown.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <script src="js/clickremove.js" type="text/javascript"></script>
     <script src="js/addrow.js" type="text/javascript"></script>
     <script src="js/dropdown.js" type="text/javascript"></script>      
     <link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet"> 
>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89


</head>


<body>

<<<<<<< HEAD
>>>>>>> c5414d06aede77b75d58eddfe3d084bb4f86af0d
<!--Container for background image-->
<div class="container2">  

<header>      
<div class="form-group">  
                
                <!-- Form for adding the habit -->
                <form name="add_habit" id="add_habit" method="post">  
                    <input type="text" name="habitname" id="habitname" placeholder="Enter your habit" class="form-control name_list">         
                    <button type="button" onclick="addRow()" name="submithabit" id="submithabit" class="btn btn-info" value="Submit"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><g><path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></svg></button>  
                </form> 

                <!--Dropdown menu-->              
                <div class="dropdown">
                <button onclick="drop()" class="dropbtn">Menu</button>
                
                <!-- Small divider to seperate the droodown content and button from eachother -->
                <div class="divider1"><div>
                    <div id="myDropdown" class="dropdown-content">
                        <p id="dropdown-welcome"><strong><?php echo $_SESSION['username'];?></strong></p>
                        <a href="#">Progress</a>
                        <a href="#">Achievements</a>
                        <a href="index.php?logout='1'">Logout</a> 
                </div>
<<<<<<< HEAD
=======
=======
<div class="content">
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	
    <?php endif ?>
>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
>>>>>>> c5414d06aede77b75d58eddfe3d084bb4f86af0d
</div>
</header>    
          <!-- Table for the habits-->  
          <div class="habit-table">   
          <h2>Your daily habits</h2>               
          <form name="habit_checkbox" id="habit_checkbox" method="post">  
          <table id="tabler" class ="habit-container" >
          
          <!-- Default placeholders for habit and days-->     
          <tr><th>Habit</th><th>Monday</th><th>Tuesday</th><th>Wednesday</th><th>Thursday</th><th>Friday</th><th>Saturday</th><th>Sunday</th></tr> 
            
          <?php
          //Checks the saved habits for the current user based on his userid and prints them in the table
          $userid = $_SESSION['userid'];
          $query = "SELECT habitname, ad.connectid, Checkmark_Mon, Checkmark_Tue, Checkmark_Wed, Checkmark_Thu, Checkmark_Fri, Checkmark_Sat, Checkmark_Sun FROM habits as ha INNER JOIN addedhabit as ad ON ha.habitid = ad.habitid INNER JOIN users ur ON ad.userid = ur.userid INNER JOIN habitcheck as hc ON ad.connectid=hc.connectid WHERE ur.userid='$userid'"; 
          $results = mysqli_query($db, $query);
          while($row = mysqli_fetch_assoc($results))  
          {      
<<<<<<< HEAD
            //define array and remove whitespaces
            $habitname1 = str_replace(' ', '',$row['habitname']);
            //Gets the saved habits from the database and creates the rows in the table, checkboxes included 
            echo"<tr><td>{$row['habitname']} <input type='hidden' id='habitId' name='habitId' value='{$row['connectid']}' \> </td><td><input type='checkbox' name='checkbox1$habitname1' id='checkbox1' value='{$row['Checkmark_Mon']}'"; if(isset($_POST['checkbox1'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Mon']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox2$habitname1' id='checkbox2' value='{$row['Checkmark_Tue']}'"; if(isset($_POST['checkbox2'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Tue']=='Yes'){echo "checked";} echo " /></td><td><input type='checkbox' name='checkbox3$habitname1' id='checkbox3' value='{$row['Checkmark_Wed']}'"; if(isset($_POST['checkbox3'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Wed']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox4$habitname1' id='checkbox4' value='{$row['Checkmark_Thu']}'"; if(isset($_POST['checkbox4'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Thu']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox5$habitname1' id='checkbox5' value='{$row['Checkmark_Fri']}'"; if(isset($_POST['checkbox5'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Fri']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox6$habitname1' id='checkbox6' value='{$row['Checkmark_Sat']}'"; if(isset($_POST['checkbox6'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Sat']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox7$habitname1' id='checkbox7' value='{$row['Checkmark_Sun']}'"; if(isset($_POST['checkbox7'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Sun']=='Yes'){echo "checked";} echo "/></td><tr>";
            
            
            //checkboxex get the inherit 
            if(isset($_POST['checkbox1'.$habitname1])) {

                $sql4 = "UPDATE habitcheck SET Checkmark_Mon = 'Yes' WHERE connectid = '{$row['connectid']}'";
                    $results4 = mysqli_query($db, $sql4);
                
            } 
            if(isset($_POST['checkbox2'.$habitname1])) {

                $sql4 = "UPDATE habitcheck SET Checkmark_Tue = 'Yes' WHERE connectid = '{$row['connectid']}'";
                    $results4 = mysqli_query($db, $sql4);
                
            } 
            if(isset($_POST['checkbox3'.$habitname1])) {

                $sql4 = "UPDATE habitcheck SET Checkmark_Wed = 'Yes' WHERE connectid = '{$row['connectid']}'";
                    $results4 = mysqli_query($db, $sql4);
                
            } 
            if(isset($_POST['checkbox4'.$habitname1])) {

                $sql4 = "UPDATE habitcheck SET Checkmark_Thu = 'Yes' WHERE connectid = '{$row['connectid']}'";
                    $results4 = mysqli_query($db, $sql4);
                
            } 
            if(isset($_POST['checkbox5'.$habitname1])) {

                $sql4 = "UPDATE habitcheck SET Checkmark_Fri = 'Yes' WHERE connectid = '{$row['connectid']}'";
                    $results4 = mysqli_query($db, $sql4);
                
            } 
            if(isset($_POST['checkbox6'.$habitname1])) {

                $sql4 = "UPDATE habitcheck SET Checkmark_Sat = 'Yes' WHERE connectid = '{$row['connectid']}'";
                    $results4 = mysqli_query($db, $sql4);
                
            } 
            if(isset($_POST['checkbox7'.$habitname1])) {

                $sql4 = "UPDATE habitcheck SET Checkmark_Sun = 'Yes' WHERE connectid = '{$row['connectid']}'";
                    $results4 = mysqli_query($db, $sql4);
                
            } 
=======
             $habitname1= $row['habitname'];
            //Gets the saved habits from the database and creates the rows in the table, checkboxes included 
            echo"<tr><td>{$row['habitname']} <input type='hidden' id='habitId' name='habitId' value='{$row['connectid']}' \> </td><td><input type='checkbox' name='checkbox1$habitname1' id='checkbox1' value='{$row['Checkmark_Mon']}'"; if(isset($_POST['checkbox1'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Mon']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox2$habitname1' id='checkbox2' value='{$row['Checkmark_Tue']}'"; if(isset($_POST['checkbox2'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Tue']=='Yes'){echo "checked";} echo " /></td><td><input type='checkbox' name='checkbox3$habitname1' id='checkbox3' value='{$row['Checkmark_Wed']}'"; if(isset($_POST['checkbox3'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Wed']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox4$habitname1' id='checkbox4' value='{$row['Checkmark_Thu']}'"; if(isset($_POST['checkbox4'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Thu']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox5$habitname1' id='checkbox5' value='{$row['Checkmark_Fri']}'"; if(isset($_POST['checkbox5'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Fri']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox6$habitname1' id='checkbox6' value='{$row['Checkmark_Sat']}'"; if(isset($_POST['checkbox6'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Sat']=='Yes'){echo "checked";} echo "/></td><td><input type='checkbox' name='checkbox7$habitname1' id='checkbox7' value='{$row['Checkmark_Sun']}'"; if(isset($_POST['checkbox7'.$habitname1])) echo "checked='checked'"; if($row['Checkmark_Sun']=='Yes'){echo "checked";} echo "/></td><tr>";
            
            if(isset($_POST['checkbox1'.$habitname1])) {

<<<<<<< HEAD
            $sql4 = "UPDATE habitcheck SET Checkmark_Mon = 'Yes' WHERE connectid = '{$row['connectid']}'";
                $results4 = mysqli_query($db, $sql4);
            
          } 
          if(isset($_POST['checkbox2'.$habitname1])) {

            $sql4 = "UPDATE habitcheck SET Checkmark_Tue = 'Yes' WHERE connectid = '{$row['connectid']}'";
                $results4 = mysqli_query($db, $sql4);
            
          } 
          if(isset($_POST['checkbox3'.$habitname1])) {

            $sql4 = "UPDATE habitcheck SET Checkmark_Wed = 'Yes' WHERE connectid = '{$row['connectid']}'";
                $results4 = mysqli_query($db, $sql4);
            
          } 
          if(isset($_POST['checkbox4'.$habitname1])) {

            $sql4 = "UPDATE habitcheck SET Checkmark_Thu = 'Yes' WHERE connectid = '{$row['connectid']}'";
                $results4 = mysqli_query($db, $sql4);
            
          } 
          if(isset($_POST['checkbox5'.$habitname1])) {

            $sql4 = "UPDATE habitcheck SET Checkmark_Fri = 'Yes' WHERE connectid = '{$row['connectid']}'";
                $results4 = mysqli_query($db, $sql4);
            
          } 
          if(isset($_POST['checkbox6'.$habitname1])) {

            $sql4 = "UPDATE habitcheck SET Checkmark_Sat = 'Yes' WHERE connectid = '{$row['connectid']}'";
                $results4 = mysqli_query($db, $sql4);
            
          } 
          if(isset($_POST['checkbox7'.$habitname1])) {

            $sql4 = "UPDATE habitcheck SET Checkmark_Sun = 'Yes' WHERE connectid = '{$row['connectid']}'";
                $results4 = mysqli_query($db, $sql4);
            
          } 
>>>>>>> c5414d06aede77b75d58eddfe3d084bb4f86af0d
            
            }
          ?>
          </table>
<<<<<<< HEAD
=======
=======
<div class="container2">  
<header>
           
           
<div class="form-group">  
                <form name="add_habit" id="add_habit" method="post">  
                    <input type="text" name="habitname" id="habitname" placeholder="Enter your habit" class="form-control name_list">         
                    <button type="button" onclick="addRow()" onSubmit="return false;" name="submithabit" id="submithabit" class="btn btn-info" value="Submit"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve"><g><path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></svg></button>  
                </form> 
                <div class="dropdown">
                <button onclick="drop()" class="dropbtn">Menu</button>
                <div class="divider1"><div>
                    <div id="myDropdown" class="dropdown-content">
                        <p id="dropdown-welcome"><strong><?php echo $_SESSION['username'];?></strong></p>
                        <a href="#">Progress</a>
                        <a href="#">Achievements</a>
                        <a href="aboutus.php">About us</a>
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
            
            </table>
</tr>               
<button type="button">Save</button>
            
</div>                
</div>   
           
>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
>>>>>>> c5414d06aede77b75d58eddfe3d084bb4f86af0d

          <!-- Save button for saving progress-->              
          <input type="submit" name="habitsave" id="saveit" value="Save"> 
          </form>
          </div>                
</div>   
</body> 
</html>
