<?php
require 'config.php';

if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: xyz.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User not registered !!!'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="login.js"></script>
  </head>
  <body>
    <form class="container" action="" method="post" style="margin:auto; width: 220px;" >
    <h2>Login</h2>
      <label>Username: </label>
      <input type="text" name="username" id = "username" required value="" required> <br>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value="" required> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value="" required> <br>
      <button type="submit" name="submit">Login</button></br><br>
      <div>dont have account?<a href="registration.php">Register</a></div><br>
     <div class="link forget-pass text-center">Forgot password? <a href="reset_pass.html"> Reset here</a></div>
    </form>
    <br>
  </body>
</html>
