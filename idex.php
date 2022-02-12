<?php

$to = '';
$errors = array('email'=>'');
if(isset($_POST['submit']))
{
    if(empty($_POST['email'])){
        $errors['email'] = 'Email is required <br />';
    }
    else{
        $to = $_POST['email'];
        if(!filter_var($to, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Email must be a valid email address <br />';
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <style>
        section{
            text-align: center;
            align-items: center;
        }

        #mailbutton {
			height: 40px;
			width: 150px;
			cursor: pointer;
			color: #077;
        }

        form{
			max-width: 460px;
			margin: 20px auto;
			padding: 20px;
		}

    </style>
</head>
    <section class="container grey-text">
        <h3 class="center">Enter Your Email</h4>
        <form class="white" action="" method="POST">
            <label>Your Email id: *</label>
            <input type="text" name="email" value="<?php echo htmlspecialchars($to); ?>" >
            <div class="red-text"><?php echo $errors['email']; ?></div>
            <br>
            <input type="submit" name="sendmail" id="mailbutton"/>
        </form>
    </section>

<?php
// $to = "lians061201@student.sfit.ac.in";
$subject = "Recruitment Procedural Email for Amazon ";
$txt = "This is to inform you that we have accepted your request and thereby send the forms to recruit students under your guidance! <br /> the google form link is: https://letssallyon.com/contact/";
$header = "From: lians061201@gmail.com";

if(isset($_POST['sendmail'])){
    if(mail($to, $subject, $txt, $header)){
        echo "Email has been succesfully sent to $to .... You can check your email!";
    }
    else{
        echo "It seems that the email failed to be sent...";
    }
}

?>




</html>