<?php
// author: Radiance Alam Pratama K3518049
session_start();
require "koneksi.php";
// cek login atau tidak
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
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
    <title>MathGame - Good luck!</title>
</head>

<body>
    <form action="result.php" method="post" align="center">
      <?php
      $bil1 = rand(1, 20);
      $bil2 = rand(1, 20);
      $hasil = $bil1 + $bil2;

      $_SESSION['correct_ans'] = $bil1 + $bil2;
      ?>
      <h1>Hello, <?= $_SESSION['name'] ?> </h1>
      <p>Your score is : <?= $_SESSION['score'] ?> </p>
      <p>Lives remaining : <?= $_SESSION['lives'] ?> </p>

      <p>Jumlah dari <?= $bil1 ?> + <?= $bil2 ?> adalah... </p>

      <input type="text" name="ans" require>
      <button type="submit" name="submit">Submit answer</button>
      <a href="logout.php" class="text-white"><br>Bukan Anda?</a>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
