<?php 
session_start();
require('newprofile.php');
if(isset($_POST['submit'])&&!empty($_POST['name']&&!empty($_POST['password']))){
    $uname = $_POST['name'];
    $password=md5($_POST['password']);
    $connection =

}
?>