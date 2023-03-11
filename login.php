<?php
include'connect.php';
session_start();
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $result = mysqli_query($conn,"select * from user WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  // print_r($row); die;
  if(mysqli_num_rows($result)>0){
    if( password_verify( $password, $row["password"])){
      $_SESSION['loggedin'] = true;
      $_SESSION['id'] = $row['id'];
      
      
      $_SESSION['email'] = $row['email'];
      // echo "login  ". $email;
      header("location:index.php");     
      // exit();
    }else{
      echo "<script> alert ('Wrong Password'); </script>";
    }
  }
  else{
    echo "<script> alert (' user not Registerated'); </script>";
  }
}

?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="#" method="post">
  <div class="imgcontainer">
    <!-- <img src="img" alt="Avatar" class="avatar"> -->
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>
