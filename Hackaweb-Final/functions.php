<?php

function check_login($con)
{
  if(isset($_SESSION['email']))
  {
      $id = $_SESSION['email'];
      $query = "select * from users where email = '$id' limit 1";

      $result = mysqli_query($con,$query);
      if($result && mysqli_num_rows($result) > 0)
      {
          $user_data = mysqli_fetch_assoc($result);
          return $user_data;
      }
  }
  header("Location: login.php");
  die;
}

?>