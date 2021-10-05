<?php
 session_start();
$host="localhost";
$user="id13242220_sandeep";
$pass="cZK#Iab&|}zY23Jl";
$dbname="id13242220_transpoeasy";

$con=mysqli_connect($host,$user,$pass,$dbname);

 $name= $_POST['user_id'];
 $pass= $_POST['pass'];
 
 $s="SELECT * FROM `userdata` WHERE user_id='$name' && password='$pass'";
  $result = mysqli_query($con, $s);
  $num = mysqli_num_rows($result);
  if($num == 1){
      setcookie('user_id',$name,time()+60*60*24*30);
      setcookie('pass',$pass,time()+60*60*24*30);
 $_SESSION['u_id']=$_POST['user_id'];
 $_SESSION['pass']=$_POST['pass'];
     header('location:UI.php');
  }else{
     header('location:login_not_correct.php');
  }
 ?>