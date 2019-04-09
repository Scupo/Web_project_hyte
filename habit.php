<?php include('server.php') ?>
<?php session_start(); ?>

<?php  
 $config = parse_ini_file("../../config.ini");
 $db= mysqli_connect($config["dbaddr"], $config["username"], $config["password"], $config["dbname"]);
 $db->set_charset("utf8mb4");
 $number = count($_POST["habitname"]);  
 $username = $_SESSION['username'];
 

 
 // counts the rows and adds the habits to the data base
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["habitname"][$i] != ''))  
           {  
                $sql = "INSERT INTO habits(habitname) VALUES('".mysqli_real_escape_string($db, $_POST["habitname"][$i])."')";  
                mysqli_query($db, $sql);
                $sql1="INSERT INTO addedhabit (username, habitname)
                VALUES ('$username', '".mysqli_real_escape_string($db, $_POST["habitname"][$i])."')";
                mysqli_query($db, $sql1);
                  
           }  
      }  

      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
