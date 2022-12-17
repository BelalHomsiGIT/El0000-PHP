<?php
echo "UNION Arrays by +";
echo "========================";
$arr1 = [1 => "A", 2 => "B"];
$arr2 = [3 => "C", 4 => "D"];

echo "<pre>";
print_r($arr1);
echo "</pre>";

echo "<pre>";
print_r($arr2);
echo "</pre>";

echo "<pre>";
print_r($arr1 + $arr2);
echo "</pre>";

echo "-------------------------------------<br>";

$arr3 = [1 => "A", 2 => "B"];
$arr4 = [2 => "C", 4 => "D"];

echo "<pre>";
print_r($arr3);
echo "</pre>";

echo "<pre>";
print_r($arr4);
echo "</pre>";

echo "<pre>";
print_r($arr3 + $arr4);
echo "</pre>";

echo "-------------------------------------<br>";
echo "Equal test Same Key & Same Value <br>";
echo "-------------------------------------<br>";

$arr5 = [1 => 10, 2 => 25];
$arr6 = [2 => "25", 1 => 10];
echo "<pre>";
print_r($arr5);
echo "</pre>";
echo "<pre>";
print_r($arr6);
echo "</pre>";
var_dump($arr5 == $arr6);
echo "<br>";

echo "---------------------------<br>";
$arr7 = [1 => 10, 2 => 25];
$arr8 = [1 => 25, 2 => 10];
echo "<pre>";
print_r($arr7);
echo "</pre>";
echo "<pre>";
print_r($arr8);
echo "</pre>";
var_dump($arr7 == $arr8);

echo "<br>";
echo "---------------------------------------------------------------------<br>";
echo "Identity test Same Key & Same Value & Same Order & Same Type <br>";
echo "---------------------------------------------------------------------<br>";
$arr9 = [1 => "10", 2 => 25];
$arr10 = [1 => 10, 2 => 25];
echo "<pre>";
print_r($arr9);
echo "</pre>";
echo "<pre>";
print_r($arr10);
echo "</pre>";
var_dump($arr9 === $arr10);
echo "<br>";
echo "---------------------------<br>";
$arr11 = [1 => "10", 2 => 25];
$arr12 = [1 => "10", 2 => 25];
echo "<pre>";
print_r($arr11);
echo "</pre>";
echo "<pre>";
print_r($arr12);
echo "</pre>";
var_dump($arr11 === $arr12);
echo "<br>";