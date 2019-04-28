<<<<<<< HEAD
    //Clicking the add habit button runs this function load. It reads the input and runs the habit.php 
    $(document).ready(function(){  
=======

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

>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
      $('#submithabit').click(function(){            
           $.ajax({  
                url:"habit.php", 
                method:"POST",  
                data:$('#add_habit').serialize(),  
                success:function(data)  
                {  
                     $('#add_habit')[0].reset();  
                }  
           });  
      });  
 });  

<<<<<<< HEAD
=======

// Toggle function to toggle elements 
$(document).ready(function(){
	$('#submit').click(function(){
      $('#HabitSuccess').toggle(500);
      
  });
}); 
>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
