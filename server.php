<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$habitname = "";
$errors = array();

// connect to the database
$config = parse_ini_file("../../../../config.ini");
$db = mysqli_connect($config["dbaddr"], $config["username"], $config["password"], $config["dbname"]);
$db->set_charset("utf8mb4");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
<<<<<<< HEAD
  	header('location: login.php');
=======
  	header('location: index.php');
>>>>>>> c5414d06aede77b75d58eddfe3d084bb4f86af0d
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    //if the username field is empty a error message is pushed
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
   
    //if the password field is empty a error message is pushed
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    
    //if there are 0 errors and the password matches with the user the site allows the user to log in
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
         
          // Defines the user id
<<<<<<< HEAD
          $query1 = "SELECT userid FROM users WHERE username = '$username' AND password = '$password'";
=======
          $query1 = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
>>>>>>> c5414d06aede77b75d58eddfe3d084bb4f86af0d
          $results1 = mysqli_query($db, $query1);
          $row=mysqli_fetch_assoc($results1);
          $_SESSION['userid']= $row['userid'];
          $userid = $_SESSION['userid'];

          header('location: index.php');
          
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }


