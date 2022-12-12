<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="css/item.css">
</head>
<body>
<?php

$item = val($_POST["item"]);  
$expdate = val($_POST["expdate"]);  


function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hackathon";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $email=val($_POST["email"]);
// echo $email;

$sql = "INSERT INTO items (item, expdate)
VALUES ('$item', '$expdate')";
$s_sql="SELECT* from items";
$res=mysqli_query($conn,$s_sql);
// $currentDate = date('Y-m-d');


if ($conn->query($sql) === TRUE) {
//    echo" <script>window.location.href='display.php'</script>";
    if($expdate==date('Y-m-d')){
        
        echo "<script>alert(' '.$item.' will expire')</script>";
    }
    else{
        echo "<script>alert('You will be notified when the '.$item.' will expire')</script>";
        
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
<h1 class="heading">YOUR ITEMS</h1>
    <br>
    <br>
    <a class="additems"href="additems.php">ADD ITEMS</a>

    <table>
        <thead>
            <th>ID</th>
            <th>ITEM NAME</th>
            <th>EXPIRY DATE</th>
        </thead>
        <tbody>
            <?php
            date_default_timezone_set('Asia/Kolkata'); 
            echo date('d-m-y');
            $i=1;
            while($row=mysqli_fetch_assoc($res)){?>
            <tr class="row"><td><?php echo $i;
           ?></td>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <td><?php echo $row['item'];echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?></td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <td> <?php echo $row['expdate'];echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?></td>
           <td>
            <?php

            $expirydate=$row['expdate'];
            
            $expirystatus=0;
            if($expirydate>date('Y-m-d')){
            echo "<span style='color:green;'>Fresh</span>&nbsp;";
            $expirystatus=1;
            }else if($expirydate<date('Y-m-d')){
                echo" <span style='color:red;'>Expired</span>&nbsp;";
            }else if($expirydate==date('Y-m-d')){
                echo"<span style='color:#ea9a60;'>Expiring today</span>&nbsp;";
            }
            ?>
            </td>
           
            <td><button class="delete-btn" style="color:red;border:1px solid red;border-radius:5px;"><a href="delete-process.php"style="color:white;font-weight:bold;text-decoration:none;">Delete</a></button></td>

            <!-- //  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='?operation=delete&id=".$row['id'].">Delete</a>"; -->
            

        <?php $i++;}
            ?>
            
            </tr>
        </tbody>
    </table>


</body>
</html>

