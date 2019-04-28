function addRow()
            {
<<<<<<< HEAD
                
                // get input value for habit
                var habitname = document.getElementById('habitname').value;                             
               
               // if the input is empty alert is given and gives a false returns
                if (habitname === "") 
                {
                             
                    alert("Please enter a name for the habit!");
                    return false;
                  }            
                // creates the checkboxes         
                var checkbox1 = document.createElement("input");
                checkbox1.type = "checkbox";
                checkbox1.id = "monday";
                checkbox1.name = "checkbox1'.$habitname1";
=======
                // get input values
                
                var habitname = document.getElementById('habitname').value;
              
                var checkbox1 = document.createElement("input");
                checkbox1.type = "checkbox";
                checkbox1.id = "monday";
>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
                            
                var checkbox2 = document.createElement('input');
                checkbox2.type = "checkbox";
                checkbox2.id = "tuesday";

                var checkbox3 = document.createElement("input");
                checkbox3.type = "checkbox";
                checkbox3.id = "wednesday";

                var checkbox4 = document.createElement("input");
                checkbox4.type = "checkbox";
                checkbox4.id = "thursday";
                
                var checkbox5 = document.createElement("input");
                checkbox5.type = "checkbox";
                checkbox5.id = "friday";

                var checkbox6 = document.createElement("input");
                checkbox6.type = "checkbox";
                checkbox6.id = "saturday";

                var checkbox7 = document.createElement("input");
                checkbox7.type = "checkbox";
                checkbox7.id = "sunday";

<<<<<<< HEAD
                // get the html table
                // 0 = the first table
                var table = document.getElementsByTagName('table')[0];
                  
                // add new empty row to the table
                // -1 = in the end of table
                // table.rows.length/2+1 = the center
                var newRow = table.insertRow(-1);
                  
                // add cells to the row
                var cel1 = newRow.insertCell(0);
                var cel2 = newRow.insertCell(1);
                var cel3 = newRow.insertCell(2);
                var cel4 = newRow.insertCell(3);
                var cel5 = newRow.insertCell(4);
                var cel6 = newRow.insertCell(5);
                var cel7 = newRow.insertCell(6);
                var cel8 = newRow.insertCell(7);               
    
                // add values to the cells
                cel1.innerHTML = habitname;
                cel2.appendChild(checkbox1);      
                cel3.appendChild(checkbox2);
                cel4.appendChild(checkbox3);
                cel5.appendChild(checkbox4);
                cel6.appendChild(checkbox5);
                cel7.appendChild(checkbox6);
                cel8.appendChild(checkbox7);
                  
=======
                
                         
                  
                 // get the html table
                  // 0 = the first table
                  var table = document.getElementsByTagName('table')[0];
                  
                  // add new empty row to the table
                  // 0 = in the top 
                  // table.rows.length = the end
                  // table.rows.length/2+1 = the center
                  var newRow = table.insertRow(table.rows.length/2+1);
                  
                  
 

                  // add cells to the row
                  var cel1 = newRow.insertCell(0);
                  var cel2 = newRow.insertCell(1);
                  var cel3 = newRow.insertCell(2);
                  var cel4 = newRow.insertCell(3);
                  var cel5 = newRow.insertCell(4);
                  var cel6 = newRow.insertCell(2);
                  var cel7 = newRow.insertCell(3);
                  var cel8 = newRow.insertCell(4);
                  
              

                  
                  // add values to the cells
                  cel1.innerHTML = habitname;
                  cel2.appendChild(checkbox1);      
                  cel3.appendChild(checkbox2);
                  cel4.appendChild(checkbox3);
                  cel5.appendChild(checkbox4);
                  cel6.appendChild(checkbox5);
                  cel7.appendChild(checkbox6);
                  cel8.appendChild(checkbox7);
                  
                  
                 
              

>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
            }
