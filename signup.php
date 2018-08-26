<?php require('newprofile.php')?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body><form action="newprofile.php" method="POST">
    User name:<br>
    <input type="text" name="user_name"  value="" required><br>
    First name:<br>
    <input type="text" name="firstname" value="<?php echo $firstname;?>" required> <br>
    Last name: <br>
    <input type="text" name="lastname" value="<?php echo $lastname;?>" required><br>
    Password:<br>
    <input type="password" name="password" required><br>
    Retype Password:<br>
    <input type="password" name="retypepassword" required><br>
    Email:
    <input type="email" name="email" value="<?php echo $email;?>" required><br><br>
    <input type="submit" name="signup" value="submit"></form>

</body>
</html>