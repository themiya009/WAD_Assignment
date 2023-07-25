<?php

    include 'connect.php';

    
    if(isset($_POST['login'])){

        $username = $_POST['usrname'];
        $password = $_POST['password'];

        $hash_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT * FROM `signup` WHERE `username`=' $username' AND  `password`='$password'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if($row['username'] == '$username' && $row['password'] == '$password'){
                echo '<script>alert("Password and username correct")</script>';
            } else {
                echo "Password or username incorrect";
            }
        } else {
            echo '<script>alert("ERROR")</script>';
        }
    }
     
    

?>