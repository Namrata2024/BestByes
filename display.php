<?php 
include 'connection.inc.php';


session_start();
// function str_openssl_dec($str,$iv){
//   $key="namrata";
// $chiper="AES-128-CTR";
// $options=0;
// $s=openssl_decrypt($str,$chiper,$key,$options,$iv);
// return $s;
// }
if(isset($_SESSION['login'])){
  
$userid=$_SESSION['login'];

// $user="SELECT * FROM users where id='$userid'";
// $sql1=mysqli_query($con,$user);

// while($r=mysqli_fetch_assoc($sql1)){
//   echo"my username";
//   $username=$r['email'];}
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
    <title>Check Items</title>
</head>
<body>
<header style="margin-bottom:150px;">

<a href="index.php" class="logo">BEST BYES</a>

<nav class="navbar">
   
    <a href="list.php">Shopping List</a>
    <a href="index.php#aboutus">about</a>
    <a href="index.php#contact">Contact</a>
   

    <a href="" class="nav_menu_link" ><?php echo $userid;?></a>
   
   
</nav>
<a href="./Recipe/recipe.php"><button class="btn btn-success"> search recipe</button></a>

<a href="logout.php"><button class="btn btn-danger"> Log out</button></a>
</header>


        <button class="toggle_btn" id="toggle_btn">
          <i class="ri-menu-line"></i>
        </button>
      </nav>
    </header>
    <div class="container my-5" >
        <button class="btn btn-success"style="margin-top:80px;"> <a href="view.php" class="text-light">Add Items</a>
            </button>
            <table class="table">
  <thead>
    <tr>
    
      <th scope="col">ITEM</th>
     
      <th scope="col">EXPIRY DATE</th>
      <th scope="col">STATUS</th>
      
    </tr>
  </thead>
  <tbody>
      <?php
      
   
      $sql="SELECT * FROM items where userid='$userid' order by expdate asc
      ";
     
      $result=mysqli_query($con,$sql);
      if($result){
          while($row=mysqli_fetch_assoc($result)){
            
              $id=$row['item_id'];
                $item=$row['item'];
                $expirydate=$row['expdate'];
                $expirystatus=0;
              
              echo ' <tr>
              
              <td>'.$item.'</td>
             
              <td>'.$expirydate.'</td>';
              if($expirydate>date('Y-m-d')){
                echo "<td style='color:green;font-weight:bold;font-size:25px;''>Fresh</td>&nbsp;";
                $expirystatus=1;
                }else if($expirydate<date('Y-m-d')){
                    echo" <td style='color:red;font-weight:bold;font-size:25px;'>Expired</td>&nbsp;";
                }else if($expirydate==date('Y-m-d')){
                    echo"<td style='color:#ea9a60;font-weight:bold;font-size:25px;'>Expiring today</td>&nbsp;";
                }
             echo' <td><button class="btn btn-primary"> <a href="update.php?updateid='.$id.'" class="text-light">Update</a>
              </button></td>
              <td><button class="btn btn-danger"> <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
              </button></td>
              
              
            </tr>
           
            
            
            
            ';
          
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