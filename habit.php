<?php include('server.php') ?>
<?php session_start(); ?>

<?php  
<<<<<<< HEAD
 $config = parse_ini_file("../../config.ini");
=======
 $config = parse_ini_file("../../../../config.ini");
>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
 $db = mysqli_connect($config["dbaddr"], $config["username"], $config["password"], $config["dbname"]);
 $db->set_charset("utf8mb4");
 $habitname = $_POST['habitname'];  
 $userid = $_SESSION['userid'];
 $number = 1;
 

 
<<<<<<< HEAD
 // adds habits to the data base 
=======
 // counts the rows and adds the habits to the data base
>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
 if($number == 1)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
<<<<<<< HEAD
        
        //if the inputfield is empty habit isn't added to the database 
        if ($habitname === "") 
        {
            return false;
        }   
          else
          {  
                //inserts habits into habits and addedhabit table based on the inserted habitname and userid
                $sql = "INSERT INTO habits (habitname) VALUES ('$habitname')";  
                mysqli_query($db, $sql);
                $last_id = $db->insert_id;
                
                //inserts the habit to the addedhabit table 
                $sql1="INSERT INTO addedhabit (habitid, userid) VALUES ('$last_id', '$userid')";
                mysqli_query($db, $sql1);   
                
                //inserts the connectid to the habitcheck table which connects user and habit to the habitcheck table
                $sql2="INSERT INTO habitcheck (connectid) SELECT connectid FROM addedhabit WHERE habitid = '$last_id'";
                mysqli_query($db, $sql2);
          }  
      }  
=======

           {  
                $sql = "INSERT INTO habits (habitname) VALUES ('$habitname')";  
                mysqli_query($db, $sql);
                $last_id = $db->insert_id;
                $sql1="INSERT INTO addedhabit (habitid, userid) VALUES ('$last_id', '$userid')";
                mysqli_query($db, $sql1);
                          
           }  
      }  

      
>>>>>>> e9ee61279c5d1bcf58a8ecd184ed17f720b22c89
 }  

?>