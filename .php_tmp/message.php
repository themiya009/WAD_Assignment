<?php
include 'connect.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message2'];


    $query = "INSERT INTO user VALUES ('$name', '$email', '$phone ', '$message')";
    
    if(mysqli_query($conn, $query)){
        echo '<script>alert("Image Inserted")</script>';
    }
}
?>