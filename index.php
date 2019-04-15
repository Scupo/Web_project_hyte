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



<html lang="en">>
<head>

     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home</title>
     
     <link rel="stylesheet" type="text/css" href="css/main.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
     <script src="js/clickremove.js" type="text/javascript"></script>  
     <link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet"> 

</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
               echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome your username is <strong><?php echo $_SESSION['username'];?></strong> and userid is <strong><?php echo $_SESSION['userid'];?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

<!--Background picture
<div class="bgcontainer">
            <div class="bg-image">
            </div>-->

<!-- Dynamic Form for adding habits -->
<div class="container">  
                <br />  
                <br />  

                <table class="habit-container">
	<thead>
		<tr>
			<th><h1>Habitname</h1></th>
			<th><h1>Monday</h1></th>
			<th><h1>Tuesday</h1></th>
               <th><h1>Wednesday</h1></th>
               <th><h1>Thursday</h1></th>
               <th><h1>Friday</h1></th>
               <th><h1>Saturday</h1></th>
               <th><h1>Sunday</h1></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Eat breakfast</td>
			<td></td>
			<td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
		</tr>
		<tr>
			<td>Read a book</td>
			<td></td>
			<td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
		</tr>
		<tr>
			<td>Meditate</td>
			<td></td>
			<td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>

		</tr>
    <tr>
			<td>Yoga</td>
			<td></td>
			<td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
		</tr>
    <tr>
			<td>Gym</td>
			<td></td>
			<td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
		</tr>
    <tr>
			<td>Good sleep</td>
			<td></td>
			<td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
		</tr>
	</tbody>
</table>                
                <h2>Add habits</h2>  
                <div class="form-group">  
                     <form name="add_habit" id="add_habit" method="post">  
                          <div class="table-responsive">  
                               <table class="table table-bordered" id="dynamic_field">  
                                    <tr>  
                                         <td><input type="text" name="habitname[]" placeholder="Habit" class="form-control name_list" /></td>  
                                         <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                    </tr>  
                               </table>  
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />  
                          </div>  
                     </form>  
                </div>  
           </div>   
           
<!--<div class="habit-success">
        <form method="get" id="HabitSuccess">
        <input type="checkbox" name="habit"> <br>  
        <div id="habitadder"></div>
        <input type="submit" value="Done!" name="checkhabit">
        </form>
</div> -->

</body> 
</html>
