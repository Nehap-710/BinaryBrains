<?php  
session_start();
include ("connection.php");

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['account'])) {

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$email = test_input($_POST['email']);
	$password = test_input($_POST['password']);
	$account = test_input($_POST['account']);

	if (empty($email)) {
		header("Location: login.php?error=User Name is Required");
	}else if (empty($password)) {
		header("Location: login.php?error=Password is Required");
	}else {

		// Hashing the password
		//$password = md5($password);
        
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) == "TRUE") {
        	// the user name must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['password'] == $password && $row['account'] == $account) {
        		$_SESSION['email'] = $row['email'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['account'] = $row['account'];

        		header("Location: home.php");

        	}else {
        		header("Location: login.php?error=Incorect User name or password");
        	}
        }else {
        	header("Location: login.php?error=Incorect User name or password");
        }

	}
	
}else {
	header("Location: login.php");
}