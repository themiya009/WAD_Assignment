<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    .adminhead{
        background-color: royalblue;
        display: flex;
        justify-content: center;
        margin-bottom: 50px;
        color: white;
    }
    .delete {
        color: aliceblue;
        background-color: royalblue;
        padding: 5px;
        border-radius: 5px;
        text-decoration: none;
    }

    .delete:hover {
        cursor: pointer;
    }
</style>

<body>
    <div class="adminhead">
        <h1>Admin Menu</h1>
    </div>
    <h1>Messages From Customers</h1> <br>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
                include 'php/connect.php'; 

                $sql = "SELECT * FROM user";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid Query : ".$conn->error);
                }

                while($row = $result->fetch_assoc()){
                    echo"<tr>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["phone"]."</td>
                        <td>".$row["message"]."</td>

                        <td>
                        <a class='delete'>Delete</a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>

    <h1>Orders to Complete</h1> <br>
    <table class="table">
        <thead>
            <tr>
                <th>Portion</th>
                <th>Food items</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
                include 'php/connect.php'; 

                $sql = "SELECT * FROM orders";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid Query : ".$conn->error);
                }

                while($row = $result->fetch_assoc()){
                    echo"<tr>
                        <td>".$row["portion"]."</td>
                        <td>".$row["food"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["address"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["phone"]."</td>

                        <td>
                        <a class='delete'>Delete</a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>

    <h1>Bookings For Future</h1> <br>
    <table class="table">
        <thead>
            <tr>
                <th>Persons</th>
                <th>Name</th>
                <th>Date</th>
                <th>Email</th>
                <th>Accomo</th>
                <th>bf</th>
                <th>lu</th>
                <th>di</th>
                <th>Action</th>
                
            </tr>
        </thead>

        <tbody>
            <?php
                include 'php/connect.php'; 

                $sql = "SELECT * FROM book";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid Query : ".$conn->error);
                }

                while($row = $result->fetch_assoc()){
                    echo"<tr>
                        <td>".$row["count"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["date"]."</td>
                        <td>".$row["acco"]."</td>
                        <td>".$row["br"]."</td>
                        <td>".$row["lu"]."</td>
                        <td>".$row["di"]."</td>

                        <td>
                        <a class='delete'>Delete</a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>

    <h1>Registered Users/Admins</h1> <br>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Confirmed</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
                include 'php/connect.php'; 

                $sql = "SELECT * FROM signup";
                $result = $conn->query($sql);

                if(!$result){
                    die("Invalid Query : ".$conn->error);
                }

                while($row = $result->fetch_assoc()){
                    echo"<tr>
                        <td>".$row["name"]."</td>
                        <td>".$row["username"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["password"]."</td>
                        <td>".$row["conpassword"]."</td>

                        <td>
                        <a class='delete'>Delete</a>
                        </td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>