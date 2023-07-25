<?php
if(isset($name) || isset($email)){

    echo"Hello World";

    $name = $_POST["name"];
    $email = $_POST["email"];


    echo "Welcome" + $name;
    echo "Your Email is " + $email;
}



?>