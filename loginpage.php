<?php
session_start();
$_SESSION['u_id'];
?>
<!DOCTYPE html>
<html>
<head>
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 5px;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


.container {
  padding: 16px;
  height : auto;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {

  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
 }

/* Modal Content/Box */
.modal-content {
    margin-top: 19%;
  background-image: linear-gradient(to bottom right, lightblue ,lightgreen) ;
  border: 1px solid #888;
  width:97%; /* Could be more or less, depending on screen size */
  height:auto;

    
}


/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 350px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}




      .input-cnt {
         display: flex; /* display the icon and the input in a line */
         margin-top: 10px;
      }
      .input-cnt:last-child {
         margin-bottom: 0px;
      }
      .input-cnt > i {
         min-width: 30px; /* set a minimum width for the icon */
         padding: 10px; /* make sure the icon is centered vertically */
         text-align: center; /* horizontally center the icon */
         background: lightgrey;
         border-top-left-radius: 15px;
         border-bottom-left-radius: 15px;
         color: #0076ff;
      }
      /* change styles when focused */
      .input-cnt:hover > i {
         background: #0076ff;
         color: white;
      }
      /* style the inputs */
      .input-cnt > input[type="text"], .input-cnt > input[type="password"] {
         outline: none;
         border: none;
         padding: 10px;
         border: 1px solid lightgrey;
         border-top-right-radius: 20px;
         border-bottom-right-radius: 20px;
         width: 400px;
      }
      /* style the submit button */
      .input-cnt > input[type="submit"] {
         border: none;
         border-radius: 20px;
         outline: none;
         width: 250px;
         margin: 0 auto;
         font-size: 105%;
         padding: 8px;
         color: #0076ff;
         background: white;
         transition-duration: .5s;
      }
      /* add a hover effect for the submit button */
      .input-cnt > input[type="submit"]:hover {
         color: white;
         background: #0076ff;
      }

body {
  background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(contain.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  height: 100vh;
  width: 100%;
}

</style>
</head>
<body>
    
<div id="id02" class="modal">
  
  <form class="modal-content animate" action="user_login.php" method="post">
      <center>
          <h2>Login</h2>
          </center>
    <div class="imgcontainer">
      <img src="https://img.icons8.com/cute-clipart/64/000000/login-rounded-up.png"/>
    </div>

    <div class="container">
      <label for="user_id"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="user_id" required>

      <label for="pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
      
       
      <button type="submit">Login</button>
      
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</body>
</html>