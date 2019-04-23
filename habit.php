<?php include('server.php') ?>
<?php session_start(); ?>

<?php  
 $config = parse_ini_file("../../config.ini");
 $db = mysqli_connect($config["dbaddr"], $config["username"], $config["password"], $config["dbname"]);
 $db->set_charset("utf8mb4");
 $habitname = $_POST['habitname'];  
 $userid = $_SESSION['userid'];
 $number = 1;
 

 
 // counts the rows and adds the habits to the data base
 if($number == 1)  
 {  
      for($i=0; $i<$number; $i++)  
      {  

           {  
                $sql = "INSERT INTO habits (habitname) VALUES ('$habitname')";  
                mysqli_query($db, $sql);
                $last_id = $db->insert_id;
                $sql1="INSERT INTO addedhabit (habitid, userid) VALUES ('$last_id', '$userid')";
                mysqli_query($db, $sql1);
                          
           }  
      }  

      
 }  
