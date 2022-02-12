<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Login</title>
</head>
<body>
<div class="wrapper">
      <div class="title">Login Form</div>
      <form action="#">
        <div class="field">
          <input type="text" required>
          <label>Email Address</label>
        </div>
        <div class="field">
          <input type="password" required>
          <label>Password</label>
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
        <div class="field">
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
      </form>
    </div>
</body>
</html>