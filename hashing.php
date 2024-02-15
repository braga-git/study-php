<?php
  $password = "pizza123";

  $hash = password_hash($password, PASSWORD_DEFAULT);

  if(password_verify('teste', $hash)) {
    echo'work';
  } else {
    echo'doesnt work';
  }
?>