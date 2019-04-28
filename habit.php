<?php include('server.php') ?>
<?php session_start(); ?>

<?php  
 $config = parse_ini_file("../../config.ini");
 $db = mysqli_connect($config["dbaddr"], $config["username"], $config["password"], $config["dbname"]);
 $db->set_charset("utf8mb4");
 $habitname = $_POST['habitname'];  
 $userid = $_SESSION['userid'];
 $number = 1;
 

 
 // adds habits to the data base 
 if($number == 1)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
        
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
 }  

?>