<?php 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body> <form action="newprofile.php" method="POST"> 
      Username: <br>
    <input type="text" name="name" required><br>
      Password:<br>
    <input type="password" name="paswword" required><br>
    <input type="submit" name="login" value = "log in">
    </form>
    <br><br><a href="signup.php">Create an account</a>
</body>
</html>