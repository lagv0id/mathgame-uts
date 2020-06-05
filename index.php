<?php
   session_start();

   if(isset($_GET['pageSet'])){
      session_unset();
      session_destroy();
   }

   if(isset($_SESSION["name"])){
      header('Location:begin.php');
   }

?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="utf-8">
      <title>MathGame : Login Page</title>
   </head>

   <body>
      <form action="begin.php" method="POST">
         <label for="name">Nama : </label>
         <input type="text" name="name" id="name" placeholder="Please enter your name!" required>
         <label for="email">E-mail : </label>
         <input type="text" name="enail" id="email" placeholder="Please enter your email!" required>
         <button class="btn btn-primary" type="loginsubmit" name="login">Login</button>
      </form>
   </body>

</html>
