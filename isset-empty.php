<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="isset-empty.php" method="post">
    <label for="username">username</label><br>
    <input type="text" name="username"><br>
    <label for="password">password</label><br>
    <input type="text" name="password"><br>
    <input type="submit" name="login" value="login">
  </form>
</body>
</html>

<?php
  foreach($_POST as $key => $value) {
    echo"{$key} = {$value} <br>";
  }

  echo"<br><br>";

  if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)) {
      echo"username missing";
    } elseif(empty($password)){
      echo"password missing";
    } else {
      echo"hello {$username}";
    }
  }
?>