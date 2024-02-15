<?php
  setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
  setcookie("fav_drink", "coffe", time() + (86400 * 3), "/");
  setcookie("fav_desert", "icecream", time() + (86400 * 5), "/");

  foreach($_COOKIE as $key => $value) {
    echo"{$key} = {$value} <br>";
  }

  if(isset($_COOKIE["fav_food"])){
    echo"gordo";
  }