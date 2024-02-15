<?php
  include("mysql-db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <label>username</label><br>
    <input type="text" name="username"><br>
    <label>password</label><br>
    <input type="text" name="password"><br>
    <input type="submit" name="register" value="register">
  </form>
</body>
</html>
<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS );
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS );
    if(!empty($_POST["username"]) && !empty($_POST["password"])){
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$hash')";
      
      try {
        mysqli_query($conn, $sql);
        echo'user registered';
      } catch(mysqli_sql_exception) {
        echo'couldnt register user';
      }
    } else {
      echo'missing values';
    }
  }

  mysqli_close($conn);
?>