<?php
  include("mysql-db.php");

  $username = "camara";
  $password = "teste213213";
  $hash = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (user, password)
    VALUES ('$username', '$hash')";
  
  try {
    mysqli_query($conn, $sql);
    echo'user registered';
  } catch(mysqli_sql_exception) {
    echo'couldnt register user';
  }

  mysqli_close($conn)
?>