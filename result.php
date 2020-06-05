<?php
session_start();
if (isset($_POST["submit"])) {
   if ($_POST["ans"] == $_SESSION["correct_ans"]) {
      $_SESSION['score'] += 10;
      $_SESSION['combo'] += 1;
   } else {
      $_SESSION['score'] -= 2;
      $_SESSION['lives'] -= 1;
      $_SESSION['combo'] = 0;
   }
}

if ($_SESSION['lives'] > 0) {
    echo "YOUR SCORE : " . $_SESSION['score'] . "<br>";
    echo "YOUR LIVES : " . $_SESSION['lives'] . "<br>";
    echo '<a href="main.php">NEXT CHALLENGE.</a>';
    exit;
} elseif ($_SESSION['lives'] == 0) {
        echo $_SESSION['lives'] . "<br>";
        echo "YOU HAVE PERISHED. <br>";
        echo "FINAL SCORE : " . $_SESSION['score'];
        echo '<a href="main.php">Play again</a>';
        exit;
    }

?>
