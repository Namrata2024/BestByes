
<?php
session_start();
$exists=false;
$showalert=false;
$showerror=false;
$emailerr=false;
include 'connection.inc.php';
if(isset($_POST['submit'])){
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $psw=mysqli_real_escape_string($con,$_POST['psw']);
    $cpsw=mysqli_real_escape_string($con,$_POST['cpsw']);
    $query="SELECT * FROM users where email='$email'";
    $insert_row = "SELECT * FROM users";
    if(filter_var($email,FILTER_VALIDATE_EMAIL)==false){
      $emailerr=true;
    }
    
    
    $exists=false;
    if($psw==$cpsw){
    $psw1=($psw);
      $query1="INSERT INTO signup (email,psw)values('$email','$psw1')";
    $result=mysqli_query($con,$query1);
   
   
    
    if($result){
     
    

				$_SESSION['login'] = $email;
				$_SESSION['email'] = $email;

        $showalert=true;
    }else{
 die(mysqli_error($con));

    }}
    if($psw!=$cpsw){
      $showerror=true;
    }else{
      header("location:display.php");
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

    <title>Sign up</title>
  </head>
  <body style="height:100vh;">
  

    <!-- Optional JavaScript; choose one of the two! -->
    <?php
    if($exists){
      echo' <div class="alert alert-success alert-dismissible fade show" role="alert"style="margin-left:50pxmargin-top:100px;">
      <strong>Exists!</strong> Your account already exists.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';}
    if($showalert){
        echo' <div class="alert alert-success alert-dismissible fade show" role="alert"style="margin-left:50px;margin-top:100px;">
        <strong>Success!</strong> Your account is now created and you can log in.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }if($showerror){
        echo' <div class="alert alert-danger alert-dismissible fade show" role="alert"style="margin-top:100px;">
        <strong>Error!</strong> Passwords do not match
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }if($emailerr){
      echo' <div class="alert alert-danger alert-dismissible fade show" role="alert"style="margin-top:100px;">
      <strong>Email address</strong> format is not valid.
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
     <div class="container"style="margin-top:10%;width:40%;">
         <h1 class="text-center">Sign up to our website </h1>
         <form action="signup1.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1"style="font-weight:500;font-size:25px;margin:2%;" class="form-label">Email address</label>
    <input type="email" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"style="font-weight:500;font-size:25px;margin:2%;" class="form-label">Password</label>
    <input type="password" name="psw"class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"style="font-weight:500;font-size:25px;margin:2%;" class="form-label">Confirm Password</label>
    <input type="password" name="cpsw" class="form-control" id="exampleInputPassword1">
  </div>
 <?php
  echo'<div class="mb-3">
    
  <label class="form-check-label" for="exampleCheck1">Already have an account have an account?<a href="login.php">Login</a></label>
</div>';
 
?>
  <button type="submit" style="font-weight:500;font-size:15px;margin:2%;"class="btn btn-success" name="submit">Sign Up</button>
</form>
</div>
     
     
        </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>