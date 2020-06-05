

<form action="result.php" method="POST">
   <?php
   session_start();

   //Generate random number.
   $bil1 = rand(1, 10);
   $bil2 = rand(1, 10);
   $hasil = $bil1 + $bil2;
   //Dua random number tadi ditambah kemudian disimpan di session
   $_SESSION['correct_ans'] = $bil1 + $bil2;

   switch ($_SESSION['combo']) {
      case 0:
         echo "SO BEGINS ANOTHER CYCLE. <br>";
         break;
      case 1:
         echo "FIRST BLOOD. <br>";
         break;
      case 2:
         echo "2x STREAK. <br>";
         break;
      case 3:
         echo "3x STREAK. YES. YES. YES. <br>";
         break;
      case 4:
         echo "4x ULTRA COMBO. <br>";
         break;
      default:
         echo "ULTRAAAAAAAAAAAAAA <br>";
         break;

   }

   ?>
   Your name is : <?= $_SESSION['name'] ?>
   Your score is : <?= $_SESSION['lives'] ?> <br>
   Lives remaining : <?= $_SESSION['score'] ?> <br>

   Jumlah dari <?= $bil1 ?> + <?= $bil2 ?> adalah... <br>

   <input type="text" name="ans" require>
   <button type="submit" name="submit">Submit answer</button>
</form>
