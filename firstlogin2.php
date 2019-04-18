<?php 
  session_start(); 
  $config = parse_ini_file("../../../config.ini");
  $db= mysqli_connect($config["dbaddr"], $config["username"], $config["password"], $config["dbname"]);
  $db->set_charset("utf8mb4");  

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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Norican" rel="stylesheet"> 
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-image: url('img/forrest.png');
  }
  li {
  display: inline;
}

#kehykset {
  font-family: serif;
  text-align: center;
  text-shadow: 3px 2px white;
  font-size: 50px;
  font-style: italic;
}

a:link, a:visited {
    color:black;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }

a:hover, a:active {
    background-color:white;
}

#p {
  font-family: serif;
  border: 4px dotted blue;
  text-shadow: 3px 2px white;
  font-size: 50px;
  font-style: italic;
}

#sijainti {
    position:fixed;
   right:10px;
   top:5px;
}

#content {
    margin-top:0px;
    margin-left:5%;
    overflow: auto;
}

#content2 {
    margin-top: 0%;
    margin-left:5%;
    overflow: auto;
}

table {
  border-collapse: collapse;
  margin-left: 60%;
  margin-top: -30%;
  overflow: auto;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr {
    background-color: #ffffff}

th {
  background-color: #0099cc;
  color: white;
}
#dailies {
    font-family: 'Norican', cursive;
    font-size: 84px;
    text-align: center;
    top: 20%;
    text-shadow: 1px 1px 4px rgb(0, 0, 0);
    color: rgb(5, 5, 25);
}
</style>
</head>

<body>


<div class="header">
<center>
<h1 id="dailies">Dailies</h1>
    <div class="topnav">
<ul>
  <li><a href="firstlogin2.php">Front page</a></li>
  <li><a href="index.php">Your habits</a></li>
</ul>
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
    <h1 id=kehykset>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
    	
    <?php endif ?>
</div>
<?php

//set variables

$username = $_SESSION['username'];
$selectedhabit = $_POST['selecthabit'];
$ownhabit = $_POST['ownhabit'];
?>
    

<!-- Add habit via selector and save it to db -->

<form id="content" method="post">
<h1> Select your favorite habits</h1>
<br>
    <select name="selecthabit"> 
            <option value="">---Habits---</option>
            <option value = "Gym">Gym</option>
            <option value = "Smoothie">Smoothie</option>
            <option value = "Yoga">Yoga</option>
    </select>
    <br>
    <br>
    <input type="submit" name="submit" value="Submit">
    <br>
    <br>
    <?php
if(isset($_POST['submit']))
{
$sql = "INSERT INTO habits (habitname) VALUES ('$selectedhabit')";
if ($db->query($sql) === TRUE) {
    echo "Habit $selectedhabit saved successfully.";
    $last_id = $db->insert_id;
    echo " Select next habit or go to your habits section. ";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


$sql = "INSERT INTO addedhabit (habitid, userid) VALUES ('$last_id', '2')";
if ($db->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
}
?>
</form>



<form id="content2" method="post">
<h1> Or write down your own habit</h1>
<br>
Your own habit:<br>
  <input type="text" name="ownhabit">
    </select>
    <br>
    <br>
    <input type="submit" name="submit2" value="Submit">
    <br>
    <br>
    <?php
if(isset($_POST['submit2']))
{
$sql = "INSERT INTO habits (habitname) VALUES ('$ownhabit')";
if ($db->query($sql) === TRUE) {
    echo "Habit $ownhabit saved successfully.";
    $last_id = $db->insert_id;
    echo " Select next habit or go to your habits section. ";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


$sql = "INSERT INTO addedhabit (habitid, userid) VALUES ('$last_id', '2')";
if ($db->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
}
?>
</form>

<?php
$sql = "SELECT * FROM `habits` 
INNER JOIN addedhabit ON habits.habitid = addedhabit.habitid
INNER JOIN users ON addedhabit.userid = users.userid
WHERE users.userid = '2'";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Your habits</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["habitname"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$db->close();
?> 


<p id=sijainti><a href="index.php?logout='1'" style="color: red;">Log out</a> </p>


</body>

</html>
