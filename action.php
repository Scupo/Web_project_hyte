
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
$servername = "mysql.metropolia.fi";
$username = "petermoi";
$password = "Hansu69";
$dbname = "petermoi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $username = htmlentities($_POST['name']);
    $salasana = htmlentities($_POST['pw']);
    $sql = "INSERT INTO Users (Username, Salasana) VALUES ('$username', '$salasana')";
    
    if ($conn->query($sql) === TRUE) {
        echo "User saved successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

$sql = "SELECT Username, Salasana FROM Users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Username</th><th>Salasana</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Username"]. "</td><td>" . $row["Salasana"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
    
$conn->close();
?> 

    <p id="php-p"> Hi <?php echo ($username); ?> </p>

    <div class="Habits">
        <form action="action.php" method="post">
            <fieldset>
                <h2>Add habit</h2>
                <p>Habit<br> <input type="text" name="habit" title="User habits" /></p>
                <p><input type="submit"  value="Add" id="submit" /></p>
            </fieldset>
        </form>
    </div>

</body>
</html>