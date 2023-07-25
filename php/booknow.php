<?php
include 'connect.php';

if(isset($_POST['book'])  ){

    $count = $_POST['person'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $accomo = $_POST['accomo'];
    $br = $_POST['breakf'];
    $lu = $_POST['lunch'];
    $di = $_POST['di'];


    $query = "INSERT INTO book VALUES ('$count','$name','$email','$date', '$accomo', '$br','$lu','$di')";
    
    if(mysqli_query($conn, $query)){
        echo '<script>alert("Order Placed")</script>';
    }
}
?>