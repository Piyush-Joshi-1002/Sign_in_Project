<?php
session_start();
$_SESSION['u_id'];
?>
<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style>
.card{
 padding:5px;
 margin-top:15%;
}
.card-body{
 width: 100%;

}
h4{
 font-size: 30px;
}
.btn{
 font-size:24px;
 background-color: red;
border: none;
border-radius: 2px;
color: white;
padding:6px;
decoration: none;
}
button.btn:hover{
  background-color: black;
 color:white;
border-radius: 2px;
}
</style>
</head>
<body style="background-color: rgba(0,0,0,0.09)">

<div class="card">
<center>
   <div class="card-body"> 
   <form method="post" action="index.php">
      <img src="https://img.icons8.com/cotton/200/000000/error-cloud.png">

         
        <h4>Error!</h4>

            
         <p>You have entered wrong password or username!</p>
         <p>Try again by clicking on<u><b>login</b></u>button!</p>

        <button class="btn">Login</button>
</form>
        <br> 
    </div>

 </center>  
</div>    
</body>
</html>