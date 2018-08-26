<?php
if(isset($_POST['login'])){
    session_start();
    $_SESSION['login'] = $_POST['name'];
    $uname = $_SESSION['login'];
    $password=md5($_POST['password']);
    if(!empty($uname)&&!empty($password)){
        $connection = new mysqli('localhost','root','','data');
        $select = "SELECT * FROM `user_data` WHERE `username` = '$uname' AND `password` ='$password'";
        $query = mysqli_query($connection,$select);
        $rows = mysqli_num_rows($query);
        if($rows==1){
            echo "welcome,".$uname." <br>" ;
            echo "<a href='newprofile.php'>home</a><br>";
            echo "<a href='edit.php'>edit profile</a><br>";
            echo "<a href='index.php'>log out </a><br>";

        }
        else{
            header('Location: index.php');
        
        }
    }
}
else if(isset($_POST['signup'])){
    session_start();
    $_SESSION['name']=$_POST['user_name'];
    $username = $_SESSION['name'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password =$_POST['password'];
    $retypepassword  =$_POST['retypepassword'];
    $password_hash = md5("$password");
    $email = $_POST['email'];
    if(!empty($username)&&
    !empty($firstname)&&
    !empty($lastname)&&
    !empty($password)&&
    !empty($retypepassword)&&
    !empty($email)){
        if($password!=$retypepassword){
            header('Location: signup.php');
        }
        else{
        $connection = new mysqli('localhost','root','','data');
        $select = "SELECT `username` FROM `user_data` WHERE `username` = '$username'";
        $squery = mysqli_query($connection,$select);
        $rows = mysqli_num_rows($squery);
        if($rows==0){
        $insert = "INSERT INTO `user_data` VALUES('$username','$firstname','$lastname','$password_hash','$email') ";
        $query=mysqli_query($connection,$insert);
        $connection->close();
        echo "welcome, ".$username. " you are sucessfully registered.<br>";
        echo "<a href='newprofile.php'>home</a><br>";
        echo "<a href='index.php'>log out</a><br>";
        echo "<a href='edit.php'>edit your profile</a><br>";
    }
    else{
        header('Location: signup.php');
    }
  }
}}
    else if(isset($_POST['editname'])){
        if(!empty($_POST['editfname'])&&!empty($_POST['editlname'])){
    session_start();
    $password = md5($_POST['password']);
    $fname = $_POST['editfname'];
    $lname = $_POST['editlname'];
    $connection = new mysqli('localhost','root','','data');
    $update = "UPDATE user_data SET `fname`='$fname',`lname`='$lname' WHERE `password`='$password'" ;
    if($update){
    $query = mysqli_query($connection,$update);
    $connection->close();
    echo"<a href='newprofile.php'>home</a><br>";
    echo"Your details are updated<br>";
    echo"<a href='edit.php'>edit</a><br>";
    echo"<a href='index.php'>log out</a><br>";
    }
    else{
        header('Location:edit.php');
}}}
    else if(isset($_POST['editpassword'])){
        if(!empty($_POST['editpassword'])){
    session_start();
    $password = md5($_POST['password']);
    $newpassword = md5($_POST['editpassword']);
    $connection = new mysqli('localhost','root','','data');
    $select = "SELECT * FROM user_data WHERE `password`='$password'" ;
    if($select){
    mysqli_query($connection,$select);
    $update = "UPDATE user_data SET `password`='$newpassword'";
    mysqli_query($connection,$update);
    $connection->close();
    echo"<a href='newprofile.php'>home</a><br>";
    echo"Your details are updated <br>";
    echo"<a href='edit.php'>edit</a><br>";
    echo"<a href='index.php'>log out</a><br>";}
    else{
        header('Location:edit.php');
}
}}
?>
