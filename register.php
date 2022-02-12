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
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Name of College</span>
            <input type="text" placeholder="Enter the name of College" required>
          </div>
          <div class="input-box">
            <span class="details">Name for Contact</span>
            <input type="text" placeholder="Enter the name for contact" required>
          </div>
          <div class="input-box">
            <span class="details">Phone number for contact</span>
            <input type="text" placeholder="Enter the number for contact" required>
          </div>
        </div>
        <div class="account-details">
          <input type="radio" name="account" id="dot-1">
          <input type="radio" name="account" id="dot-2">
          <span class="account-title">Account Type</span>
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
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>