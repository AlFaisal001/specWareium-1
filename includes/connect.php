<?php 

$con=mysqli_connect('localhost','root','','specwareium');
if($con){
   echo "Connection Successful";
}else{
    die(mysqli_error($con));
}


?>

