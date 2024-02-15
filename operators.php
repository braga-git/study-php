<?php
  echo"arithmetic <br>";
  $x = 10;
  $y = 2;
  $z = null;

  $z = $x + $y;
  echo"{$z} = {$x} + {$y}<br>";
  $z = $x - $y;
  echo"{$z} = {$x} - {$y}<br>";
  $z = $x * $y;
  echo"{$z} = {$x} * {$y}<br>";
  $z = $x / $y;
  echo"{$z} = {$x} / {$y}<br>";
  $z = $x ** $y;
  echo"{$z} = {$x} ** {$y}<br>";
  $z = $x % $y;
  echo"{$z} = {$x} % {$y}<br><br>";

  echo"increment/decrement <br>";
  $counter = 10;
  $counter++;
  echo "{$counter} <br>";
  $counter = 10;
  $counter--;
  echo "{$counter} <br>";
  $counter = 0;
  $counter+= 3;
  echo "{$counter} <br>";
  $counter = 0;
  $counter-= 3;
  echo $counter;