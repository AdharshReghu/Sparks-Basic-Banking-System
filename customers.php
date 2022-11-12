<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bbs";
    // Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//query
$query = "SELECT * FROM customers";
$result= mysqli_query($conn, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBS-Customer Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar-right ">
        <div class="logo">
            <a class="logo-image " href="index.html"><img src="./images/BBS.png" width="40px" height="40px"> <font color="navy" size="5px">Basic Banking System</font></a>
        </div>
        <div class="navigation">
            <ul class="nav nav-pills justify-content-end">
                <li class="nav-item"><a class="nav-link " aria-current="page" href="index.html">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="customers.php">Customers</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="feedback.html">FeedBack</a></li>
            </ul>
        <div>
    </nav>
    <div class="main-cus">
        <div class="heading">
            <h2 class="cushead">Customers</h2>
        </div>
        <div class="custable">
            <table class="table table-dark table-striped">
                <tr>
                    <th>Customer ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Balance</th>
                    <th>County</th>
                    <th>Select</th>
                </tr>
                <tr>
                    <?php
                         while($row = mysqli_fetch_assoc($result))
                       {
                    ?> 
                    <td><?php echo $row['id']  ?></td>
                    <td><?php echo $row['name']  ?></td>
                    <td><?php echo $row['gender']  ?></td>
                    <td><?php echo $row['age']  ?></td>
                    <td><?php echo $row['balance']  ?></td>
                    <td><?php echo $row['country']  ?></td>
                    <td><button type="button" class="btn btn-success">Transfer</button></td>

                </tr>
                    <?php   
                       }
                    
                    ?>
               

                    

            </table>
        
        </div>

    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>