<?php
session_start();
require "koneksi.php";

if (isset($_SESSION["login"])) {
   $_SESSION["score"] = 0;
   $_SESSION["lives"] = 5;
   header("Location: index.php");
   exit;
}
if (isset($_POST["login"])) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $_SESSION["name"] = $nama;
    $_SESSION["email"] = $email;
    $_SESSION["score"] = 0;
    $_SESSION["lives"] = 5;
    $_SESSION["login"] = true;
    $query = "INSERT INTO uts_login SET nama='$nama', email='$email', skor=$_SESSION[score]";
    mysqli_query($conn, $query);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <title>MathGame - Login Screen</title>
   </head>

   <body>
      <div class="imgcontainer">
         <img src="img/logo1.png">
      </div>

      <div class="container">

         <form action="" method="post" align="center">
            <div class="form group">
               <label for="nama">Nama :</label>
               <input type="text" name="nama" id="nama" required>
            </div>
            <div class="form-group">
               <label for="email">Email :</label>
               <input type="text" name="email" id="email" required>
            </div>
            <button class="btn btn-primary" type="submit" name="login"><b>Login</b></button>
         </form>

      </div>

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   </body>

</html>
