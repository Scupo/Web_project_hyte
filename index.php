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


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
   
	<link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
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
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
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
                <h2 align="center">Add habits</h2>  
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
           
<div class="habit success">
        <form method="get" id="HabitSuccess">
        <input type="checkbox" name="habit"> <?php echo $_SESSION['habitname'];?> <br>  
        <input type="submit" value="Done!" name="checkhabit">
        </form>
</div> 
 
</body> 
</html>

<script>
    //Adds new rows where you can add habits
    $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="habitname[]" placeholder="Habit" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  

     //Removes a row 
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
      // when you click the submit button habit is added database

      $('#submit').click(function(){            
           $.ajax({  
                url:"habit.php", 
                method:"POST",  
                data:$('#add_habit').serialize(),  
                success:function(data)  
                {  
                     alert(data);  
                     $('#add_habit')[0].reset();  
                }  
           });  
      });  
 });  


 </script>
 <script>
$(document).ready(function(){
	$('#submit').click(function(){
  		$('#HabitSuccess').toggle(500);
  });
});
</script>