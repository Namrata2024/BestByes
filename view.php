<?php
include 'connection.inc.php';

session_start();

$enteredid=$_SESSION["login"];
if(isset($_POST['submit'])){
  
    $item=$_POST['item'];
    $expdate=$_POST['expdate'];
  
    $sql="INSERT INTO items (item,expdate,userid)values('$item','$expdate','$enteredid')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
 die(mysqli_error($con));

    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <title>add items</title>
  </head>
  <body>
 
  

   <div class="container my-5 ">
       <h1>ADD ITEMS</h1>
   <form method="post">
  <div class="mb-3"style="display:block;">
    <label for="exampleInputEmail1" class="form-label">Item name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="item"aria-describedby="emailHelp" autocomplete="off">
    
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Expiry date</label>
   <input type="date" name="expdate" id="expdate">
  </div>
 
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>