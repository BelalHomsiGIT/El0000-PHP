<?php
echo 2 + 5 * 3; // 2 + 15 = 17
echo "<br>";
echo (2 + 5) * 3; // 7 * 3 = 21
echo "<br>";
echo "-------------------------------";
echo "<br>";
echo 10 || false; // 1 (as true)
echo "<br>";
//
$a = 10 || false; // $a = ( 10 || false ) -> $a = 1 as true
echo $a;
echo "<br>";
//
$a = 10 or false; // ($a = 10) or false -> $a = 10
echo $a;
echo "<br>";
