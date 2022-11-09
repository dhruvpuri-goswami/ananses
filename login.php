<?php
session_start();
include "connection.php";
if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['psw']);
    $sql = "SELECT id FROM user WHERE email='$email' and pass='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if($row){
      $_SESSION['user']=$row['id'];
      echo '<script>
                  alert("You are logged In --->");
                  window.location.href="expense.php";
                  </script>';
    }
    else{
      echo "<script>alert('Email and Password are wrong !!!')</script>";
    }
}
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>
        <form action="" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email or Phone" name="email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="psw" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" value="Login" name="btn-login">
          </div>
          <div class="signup-link">Not a member? <a href="#"><b>Signup now</b></a></div>
        </form>
      </div>
    </div>

  </body>
</html>
