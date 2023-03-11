<?php

include "connect.php";


//  if($_SERVER["REQUEST_METHOD"] == "POST")
if (isset($_POST['submit'])) {

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  //  $uname = $_POST["username"];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  $duplicate = mysqli_query($conn, "select * from user WHERE email='$email'");
  if (mysqli_num_rows($duplicate) > 0) {
    echo "<script> alert ('Email has Already taken'); </script>";
  } else {
    if ($password == $cpassword) {
      $hash = password_hash($password,PASSWORD_DEFAULT);
      $sql = "INSERT INTO  `user` ( `fname`, `lname`, `email`, `password`) VALUES('$fname','$lname','$email','$hash')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        header("location:login.php");
        echo "<script> alert ('Registeration successfully'); </script>";
      }
    } else {
      echo "<script> alert ('Password do not match'); </script>";
    }
  }
}




?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <!-- <form action="" method="post"> -->
    <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">

          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                  <form method="post">

                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example1cg" name="fname" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1cg">First Name</label>
                    </div>
                    <div class="form-outline mb-4">
                      <input type="text" id="form3Example1cg" name="lname" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1cg">Last Name</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example3cg">Your Email</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example4cg" name="password" class="form-control form-control- 
                   lg" />
                      <label class="form-label" for="form3Example4cg">Password</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form3Example4cdg" name="cpassword" class="form-control form-control
                  lg" />
                      <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                      <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of
                            service</u></a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center">
                      <button name="submit">Register</button>
                    </div>

                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- </form> -->
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"; -->
<!-- <title>Document</title>

   
</head>
<body>
  
</body>
</html> -->