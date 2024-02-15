<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="associative-array.php" method="post">
    <label>Country</label>
    <input type="text" name="country">
    <input type="submit" value="Submit">
  </form>
</body>
</html>

<?php
  $capitals = array(
    "USA"=>1,
    "Japan"=>2,
    "India"=>3
  );

  $capital = $capitals[$_POST["country"]];
  echo $capital;
?>