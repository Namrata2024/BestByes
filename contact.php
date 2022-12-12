<?php
include 'connection.inc.php';

session_start();

$enteredid=$_SESSION["login"];
if(isset($_POST['contact'])){
  
    $name=$_POST['name'];
    $pnum=$_POST['pnum'];
    $address=$_POST['address'];
    $msg=$_POST['msg'];
    
  
    $sql="INSERT INTO contact (name,pnum,address,msg)values('$name','$pnum','$address','$msg')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo'You will be contacted soon';
    }else{
 die(mysqli_error($con));

    }
}

?>