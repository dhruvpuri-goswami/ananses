<?php
  include "connection.php";
  if(isset($_REQUEST['btnregnow']))
  {
      $mail=$_REQUEST['email'];
      $pass1=md5($_REQUEST['psw']);
      $pass2=md5($_REQUEST['psw-repeat']);
      $alreadyQuery="SELECT * FROM user WHERE email='$mail'";
      $alreadyResult=mysqli_query($conn,$alreadyQuery);
      $userCount=mysqli_num_rows($alreadyResult);
      if($userCount>=1)
      {
          echo '<script>
          alert("You are already a user.");
          window.location.href="login.php";
          </script>';
      }
      else
      {
          if($pass1==$pass2)
          {
              $insertQuery="INSERT INTO user (email, pass) VALUES('$mail','$pass1')";
              if(mysqli_query($conn,$insertQuery))
              {
                  echo '<script>
                  alert("Registered Successfully");
                  window.location.href="login.php";
                  </script>';
              }
              else
              {
                  echo "<script>alert('Something Went Wrong')</script>";
              }
          }
          else
          {
              echo "<script>alert('Passwords must be same')</script>";
          }
      }
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
  color: white;
  top:0;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: black;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #f8a614;
  color: black;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: rgb(20, 20, 20);
  text-align: center;
}
</style>
</head>
<body>
<form action="" method="post">
  <div class="container">
    <h1><b>Register</b></h1>
    <p style="color:#f8a614">Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="btnregnow">Register</button>
  </div>
  
  <div class="container signin w3-round-large">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>
</html>
