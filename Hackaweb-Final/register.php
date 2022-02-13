<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css?v=<?php echo time(); ?>">
    <title>Register</title>
</head>
<body>
<div class="container">
    <div class="title">Register Yourself</div>
    <div class="content">
      <form method="POST" action="home.php">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Enter your password" >
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="confirmpassword" placeholder="Confirm your password" >
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="pnumber" placeholder="Enter your number" >
          </div>
          <div class="input-box">
            <span class="details">Name of WorkPlace</span>
            <input type="text" name="place" placeholder="Enter the name of College" >
          </div>
          <div class="input-box">
            <span class="details">Name for Contact</span>
            <input type="text" name="cname" placeholder="Enter the name for contact" >
          </div>
          <div class="input-box">
            <span class="details">Phone number for contact</span>
            <input type="text" name="cnum" placeholder="Enter the number for contact" >
          </div>
        </div>
        <div class="account-details">
          <input type="radio" name="account" value="tpo" id="dot-1">
          <input type="radio" name="account" value="company" id="dot-2">
          <span class="account-title">Select Account Type</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="account">TPO</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="account">Company</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="save" value="Register">
        </div>
        <div class="login-link">Already a member? <a href="login.php">Login now</a></div>
      </form>
    </div>
  </div>

</body>
</html>