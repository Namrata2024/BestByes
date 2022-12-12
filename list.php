<?php 
include 'connection.inc.php';


session_start();

if(isset($_SESSION['login'])){
  
$userid=$_SESSION['login'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/nav.css" />
    <title>list</title>
</head>
<body>
<header style="margin-bottom:150px;">

<a href="index.php" class="logo">BEST BYES</a>

<nav class="navbar">
    
    <a href="display.php">Your Items</a>
    <a href="index.php#aboutus">About</a>
    <a href="index.php#contact">Contact</a>
   

    <a href="" class="nav_menu_link" ><?php echo $userid;?></a>
   
   
</nav>
<a href="./Recipe/recipe.php"><button class="btn btn-success"> search reciepe</button></a>

<a href="logout.php"><button class="btn btn-danger"> Log out</button></a>
</header>


        <button class="toggle_btn" id="toggle_btn">
          <i class="ri-menu-line"></i>
        </button>
      </nav>
    </header>
    <div class="container my-5" >
       <h1 style="margin-top:100px;"> SHOPPING LIST</h1>
            <table class="table">
  <thead>
    <tr>
    
      <th scope="col">ITEM</th>
     
      
      
    </tr>
  </thead>
  <tbody>
      <?php
      
   $date="date('Y-m-d') ";
      $sql="SELECT * FROM items where userid='$userid' 
      ";
     
      $result=mysqli_query($con,$sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
            
              $id=$row['item_id'];
                $item=$row['item'];
                $expirydate=$row['expdate'];
                $expirystatus=0;
                 if($expirydate<date('Y-m-d')){
                        echo"<tr> <td style='font-weight:bold;font-size:25px;'>".$item."</td>&nbsp;";
                        echo' <td><button class="btn btn-primary"> <a href="https://www.amazon.in/" class="text-light">buy</a>
                        </button></td></tr>';
                    }else if($expirydate==date('Y-m-d')){
                        echo"<tr><td style='font-weight:bold;font-size:25px;'>".$item."</td>&nbsp;";
                        echo' <td><button class="btn btn-primary"> <a href="https://www.amazon.in/" class="text-light">buy</a>
                        </button></td></tr>';
                    }
              
             
             
            
             
              
              
           
              } 
            
      }
      ?>
      
            
            
          
   
  </tbody>
</table>  
    </div>
</body>
</html>
<?php
}
else{
  header("location:login.php");
}?>