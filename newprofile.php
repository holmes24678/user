<?php
require('setup.php');
if(isset($_POST['login'])){
    $uname = $_POST['name'];
    $password=md5($_POST['password']);
    login();
}
else if(isset($_POST['signup'])){
    $_SESSION['uname']=$_POST['user_name'];
    $username = $_SESSION['uname'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password =$_POST['password'];
    $retypepassword  =$_POST['retypepassword'];
    $password_hash = md5("$password");
    $email = $_POST['email'];
    signup();
    
}
?>
