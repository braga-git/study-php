<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="radio-btn.php" method="post">
    <input type="radio" name="credit_card" value="visa">visa<br>
    <input type="radio" name="credit_card" value="master">master<br>
    <input type="radio" name="credit_card" value="elo">elo<br>
    <input type="submit" name="confirm" value="confirm">
  </form>
</body>
</html>

<?php
  if(isset($_POST["confirm"])) {
    $credit_card = null;

    if(isset($_POST["credit_card"])) {
      $credit_card = $_POST["credit_card"];
    }

    switch($credit_card) {
      case 'visa':
        echo'visa selected';
        break;
      case 'master':
        echo'master selected';
        break;
      case 'elo':
        echo'elo selected';
        break;
      default:
        echo'make a selection';
    }
  }
?>