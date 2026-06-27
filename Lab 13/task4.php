<?php
$c=35;
$k=$c+273.15;
$newtemp= $c+8;
$f= ($newtemp*9/5)+32;
$differ= $newtemp-$c;
$round=round($f);
echo"Temperature in Kelvin: $k K<br>";
echo"New Temperature: $newtemp °C<br>";
echo"Temperature in Farenheit: $f °F<br>";
echo"Difference in Temperature: $differ °C<br>";
echo"Rounded Temperature: $round °F";
?>