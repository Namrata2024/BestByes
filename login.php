<?php
include 'connection.inc.php';
$showerror=false;
session_start();
if(isset($_POST['login'])){
   


    $user=$_POST['email'];
    $psw=$_POST['psw'];
    $psw2=($psw);


    $sql="SELECT * FROM signup WHERE email='$user'";
    $result=mysqli_query($con,$sql);

    while($row=mysqli_fetch_assoc($result)){
        $loginid=$row['id'];
        $password=$row['psw'];
        $username=$row['email'];
        
        
       echo $password.'%&&';
       echo $psw2;
       
          if($psw2!=$password){
            $showerror=true;
          
         
         
         
        }
      else{
          $_SESSION['login']=$username;
          header("location:display.php");
        }
}}

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
    <title>Log in</title>
    <style>
      .err-msg{
     color:red;
   }
    </style>
  </head>
  <body>
  <?php
  if($showerror){
        echo' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-left:50px;margin-top:100px;">
        <strong>Error!</strong> Invalid credentials
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
   
   ?>
  <header style="margin-bottom:15px;">

<a href="index.php" class="logo">BEST BYES</a>

<nav class="navbar">
   
    <a href="list.php">Shopping List</a>
    <a href="index.php#aboutus">about</a>
    <a href="index.php#contact">Contact</a>
   

    
   
</nav>



</header>

    <!-- Optional JavaScript; choose one of the two! -->
    
    <!-- Optional JavaScript; choose one of the two! -->
  
    <div class="container " style="margin-top:10%;width:40%;">
         <h1 class="text-center">Login to our website </h1>
         <form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" style="font-weight:500;font-size:25px;margin:2%;"class="form-label font-weight-bold">Email address</label>
    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
   

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" style="font-weight:500;font-size:25px;margin:2%;"class="form-label font-weight-bold ">Password</label>
    <input type="password" name="psw"class="form-control" id="exampleInputPassword1" required>
   

            
  </div>
  <div class="mb-3 ">
    
    <label class="form-check-label" for="exampleCheck1">Do not have an account?<a href="signup1.php">create account</a></label>
  </div>
  <button type="submit" style="font-weight:500;font-size:25px;margin:2%;"name="login"class="btn btn-success">Log in
              </button>
 <!--<button type="submit" style="font-weight:500;font-size:25px;margin:2%;"class="btn btn-primary font-weight-bold" name="login">Log in</button>
  --></form>
</div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>