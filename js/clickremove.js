    //Clicking the add habit button runs this function load. It reads the input and runs the habit.php 
    $(document).ready(function(){  
      $('#submithabit').click(function(){            
           $.ajax({  
                url:"habit.php", 
                method:"POST",  
                data:$('#add_habit').serialize(),  
                success:function(data)  
                {  
                    
                     $('#add_habit')[0].reset();  
                     $("#tabler").load(window.location + " #tabler");

                }  
           });  
      });  
 });  

