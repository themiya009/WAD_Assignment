<?php
include 'connect.php';

if(isset($_POST['order'])){

    $portion = $_POST['person'];
    $food = $_POST['Menu'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO orders VALUES ('$portion','$food','$name','$address', '$email', '$phone ')";
    
    if(mysqli_query($conn, $query)){
        echo '<script>alert("Order Placed")</script>';
    }
}
?>