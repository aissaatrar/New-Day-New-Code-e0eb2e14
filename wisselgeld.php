<?php
$getal = $argv[1];
$wisselgeld = array(500, 200, 100, 50, 20, 10 , 5, 2, 1);
foreach ($wisselgeld as $value)
{
  $rest  = floor($getal / $value);
  if ($rest >= 1)
  {
    $getal = $getal - ($value * $rest);
    echo "$rest x $value euro\n";
  }
}
 ?>
