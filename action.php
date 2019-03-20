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
    $username = htmlentities($_POST['name']);
    ?>

    <p id="php-p"> Hi <?php echo ($username); ?> </p>
</body>
</html>