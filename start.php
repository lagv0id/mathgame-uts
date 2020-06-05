<!DOCTYPE html>

<?php
   session_start();

   if (isset($_SESSION["login"])) {
       header("Location: index.php");
       exit;
   }

   if (isset($_POST["login"])) {
      $nama = $_POST["nama"];
      $email = $_POST["email"];
      $_SESSION["lives"] = 3;
      $_SESSION["score"] = 0;
      $_SESSION["combo"] = 0;
?>

<html lang>

   <head>
      <meta charset="utf-8">
      <title>Welcome to Math Game!</title>
   </head>

   <body>
      <h1>Welcome to Math Game!</h1>
      <p>Please login before we get started!</p>
      <form action="" method="post">
         <label for="name">Nama : </label>
         <input type="text" name="name" id="name" placeholder="Please enter your name!" required>
         <label for="email">E-mail : </label>
         <input type="text" name="enail" id="email" placeholder="Please enter your email!" required>
         <button class="btn btn-primary" type="submit" name="login">Login</button>
      </form>
   </body>

</html>

<a href="main.php">CLICK HERE TO START THE GAME</a>
