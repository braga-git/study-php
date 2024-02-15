<?php
  $username = "Gabriel Braga";

  echo $username . "<br><br>";
  $strtolower = strtolower($username);
  echo "strtolower = " . $strtolower . "<br><br>";
  $strtoupper = strtoupper($username);
  echo "strtoupper = " . $strtoupper . "<br><br>";
  $trim = trim($username);
  echo "trim = " . $trim . "<br><br>";
  $str_pad = str_pad($username, 20, "0");
  echo "str_pad = " . $str_pad . "<br><br>";
  $strrev = strrev($username);
  echo "strrev = " . $strrev . "<br><br>";
  $str_shuffle = str_shuffle($username);
  echo "str_shuffle = " . $str_shuffle . "<br><br>";
  $equals = strcmp($username, "Gabriel Braga");
  echo "strcmp = " . $equals . "<br><br>";
  $index = strpos($username, " ");
  echo "strpos = " . $index . "<br><br>";
  $name = substr($username, 0, 7);
  echo "substr = " . $name . "<br><br>";
  $surname = substr($username, 8);
  echo "substr = " . $surname . "<br><br>";
  $fullname = explode(" ", $username);
  echo "explode \$fullname[0] = " . $fullname[0] . "<br>";
  echo "explode \$fullname[1] = " . $fullname[1] . "<br><br>";
  $implode = implode("/", $fullname);
  echo "implode = " . $implode . "<br><br>";
  
  echo"-------------------<br><br>";

  $phone = "123-435-2332";
  echo $phone . "<br><br>";
  
  $phone = str_replace("-", "/", $phone);
  echo "str_replace = " . $phone . "<br><br>";
  $count = strlen($phone);
  echo "strlen = " . $count . "<br><br>";