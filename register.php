<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="insert into `crud` (fname,lname,email,password) values('$fname','$lname','$email','$password')";
    $result=mysqli_query($con,$sql);
  if($result){
    //   echo "You are now registered!";
     header('location:display.php');
  }else{
    die(mysqli_error($con));
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Blog App</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <label>FirstName</label>
                <input type="text" class="form-control" placeholder="Enter your first name" name="fname" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>LastName</label>
                <input type="text" class="form-control" placeholder="Enter your last name" name="lname" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email address" name="email" autocomplete="off">
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>
    
            <button type="submit" class="btn btn-primary" name="submit">Register</button>
            <button class="btn btn-primary"><a href="index.php" class="text-light text-decoration-none">Home</a></button>
        </form>
    
    </div>
  </body>
</html>