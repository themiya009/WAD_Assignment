<?php

include 'connect.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $usrname = $_POST['usrname'];
    $email = $_POST['email'];
    $passwd = $_POST['password'];
    $conpasswd = $_POST['conpassword'];

    if($name == "" || $username == "" || $email == "" || $passwd == "" ) {

        echo '<script>alert("All fields are required to be filled")</script>';
        return false;
    }

    if($passwd == $conpasswd){


        $sql = "INSERT INTO `signup`  VALUES ('$name', '$usrname', '$email', '$passwd', '$conpasswd')" ;

        if(mysqli_query($conn, $sql)){
            echo '<script>alert("SignUp SuccessFul !")</script>';
            header("location:http://localhost/Signature%20cuisine/login.html");
        }
    } else {

        echo '<script>alert("Password do not match")</script> <a href="signup.html">';
    }
    
     
    }
?>
