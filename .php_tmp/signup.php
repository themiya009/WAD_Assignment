<?php

include 'connect.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $usrname = $_POST['usrname'];
    $email = $_POST['email'];
    $passwd = $_POST['password'];
    $conpasswd = $_POST['conpassword'];

    if($passwd == $conpasswd){

        $hash_passwd = password_hash($passwd,PASSWORD_DEFAULT);
        $hash_conpasswd = password_hash($conpasswd, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `signup`  VALUES ('$name', '$username', '$email', '$hash_passwd', '$hash_conpasswd')" ;

        if(mysqli_query($conn, $sql)){
            echo '<script>alert("SignUp SuccessFul !")</script>';
        }
    } else {

        echo '<script>alert("Password do not match")</script> <a href="signup.html">';
    }
    
     
    }
?>
