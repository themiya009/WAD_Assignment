<?php      
    include('connect.php');  
    $username = $_POST['usrname'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($conn, $username);  
        $password = mysqli_real_escape_string($conn, $password); 
        
        if($username == "" || $password == ""){

            echo '<script>alert("Password or username cannot be Empty!")</script>';
            return false;
        
        } else { 

            $sql = "SELECT * from signup where username = '$username' and password = '$password'";  
            $result = mysqli_query($conn, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                header("location:http://localhost/Signature%20cuisine/admin.php");
            }  
            else{  
                echo '<script>alert("Login unSuccessFul") </script>'; 
            }     

        }
      
      
?>  