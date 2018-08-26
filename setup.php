<?php
session_start();
    function login(){
              if(!empty($username)&&!empty($firstname)&&!empty($lastname)&&!empty($password)&&!empty($retypepassword)&&!empty($email)){
                if($password!=$retypepassword){
                    header('Location:signup.php');
                    echo "password dont match";
                }else{
                $connection = new mysqli('localhost','root','','data');
                $select = "SELECT username FROM user_data WHERE username = '$username'";
                $squery = mysqli_query($connection,$select);
                $rows = mysqli_num_rows($squery);
                if($rows==0){
                $insert = "INSERT INTO user_data VALUES('$username','$firstname','$lastname','$password_hash','$email')";
                $query=mysqli_query($connection,$insert);
                $connection->close();
                echo "welcome, ".$username. " you are sucessfully registered.";}
                else{
                    header('Location:signup.php');
                    echo "you are already registered!try again.";
                }
            }
        }} 
    function signup(){
        if(!empty($_POST['name'])&&!empty($_POST['password'])){
            $connection = new mysqli('localhost','root','','data');
            $select = "SELECT * FROM user_data WHERE username = '$username' AND password = '$password'";
            $query = mysqli_query($connection,$select);
            $rows = mysqli_num_rows($query);
            if($rows==1){
                echo "welcome,".$uname ."to your profile";
            }
            else if($rows==0){
                header('Location:login.php');
                echo "invalid username or password ";
            }
        
        }
    }

?>