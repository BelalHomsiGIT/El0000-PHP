<?php
// Math Functions
echo "Math Functions <br>";
echo "*******************<br>";
echo "<a href='https://www.w3schools.com/php/php_ref_math.asp' >W3School Math Functions </a>";
echo "<br>";
echo "<a href='https://www.php.net/manual/en/ref.math.php' >php.net/manual/en/ref.math </a>";
echo "<br>";
echo "<br>";
echo "<br>";

//abs()
//rand()
//intdiv(dividend, divisor)
//fmod(x,y)
//ceil(number)
//floor(number)
//round(number,precision,mode)
//sqrt(number)
//min(array_values) OR min(value1,value2,...)
//max(array_values) OR max(value1,value2,...)

function printArr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

//1- abs()
echo "1- abs(number) <br>";
echo "========== <br>";
echo "<a href='https://www.w3schools.com/php/func_math_abs.asp'>PHP abs() Function</a> <br>";
echo "<br>";
echo abs(5) . "<br>";
echo abs(0) . "<br>";
echo abs(-5) . "<br>";
echo '--------------------<br><br>';

//2- rand()
echo "2- rand() <br>";
echo "======== <br>";
echo "<a href='https://www.w3schools.com/php/func_math_rand.asp'>PHP rand() Function</a> <br>";
echo "<a href='https://www.php.net/manual/en/function.rand.php'>function.rand</a> <br>";
echo "rand() ==> ";
echo rand() . "<br>";
echo "-rand() ==> ";
echo -rand() . "<br>";
echo "rand(-1, -8) ==> ";
echo rand(-1, -8) . "<br>";
echo "rand(20, 30) ==> ";
echo rand(20, 30) . "<br>";
echo '--------------------<br><br>';

//3- intdiv(dividend, divisor);
echo "3- intdiv(dividend, divisor) <br>";
echo "======================== <br>";
echo "<a href='https://www.w3schools.com/php/func_math_intdiv.asp'>PHP intdiv Function</a> <br>";
echo "10 / 5 ==> ";
echo 10 / 5 . "<br>";
echo "gettype(10 / 5) ==> ";
echo gettype(10 / 5) . "<br><br>";
echo "11 / 5 ==> ";
echo 11 / 5 . "<br>";
echo "gettype(11 / 5) ==> ";
echo gettype(11 / 5) . "<br><br>";

echo "intdiv(11, 5) ==> ";
echo intdiv(11, 5) . "<br>";
echo "gettype(intdiv(11, 5)) ==> ";
echo gettype(intdiv(11, 5)) . "<br><br>";
echo '--------------------<br><br>';

//4- fmod(x,y) - returns the remainder (modulo) of x/y.
echo "4- fmod(x,y) <br>";
echo "=============== <br>";
echo "<a href='https://www.w3schools.com/php/func_math_fmod.asp'>PHP fmod Function</a> <br>";
echo "10 % 5 ==> ";
echo 10 % 5 . "<br>";
echo "gettype(10 % 5) ==> ";
echo gettype(10 % 5) . "<br><br>";

echo "fmod(11, 5) ==> ";
echo fmod(11, 5) . "<br>";
echo "gettype(fmod(11, 5)) ==> ";
echo gettype(fmod(11, 5)) . "<br><br>";

echo "11.5 % 5 ==> ";
echo 11.5 % 5 . "<br>";
echo "gettype(11.5 % 5) ==> ";
echo gettype(11.5 % 5) . "<br><br>";

echo "fmod(11.5, 5) ==> ";
echo fmod(11.5, 5) . "<br>";
echo "gettype(fmod(11.5, 5)) ==> ";
echo gettype(fmod(11.5, 5)) . "<br><br>";
echo '--------------------<br><br>';

//5- ceil(number) - rounds a number UP to the nearest integer.
echo "5- ceil(number) <br>";
echo "=============== <br>";
echo "<a href='https://www.w3schools.com/php/func_math_ceil.asp'>func_math_ceil</a> <br>";
echo "ceil(5) ==> ";
echo ceil(5) . "<br>";
echo "gettype(ceil(5)) ==> ";
echo gettype(ceil(5)) . "<br><br>";
echo "ceil(5.87) ==> ";
echo ceil(5.87) . "<br>";
echo "ceil(5.12) ==> ";
echo ceil(5.12) . "<br>";
echo "ceil(-2.3) ==> ";
echo ceil(-2.3) . "<br>";
echo "ceil(-2.91) ==> ";
echo ceil(-2.91) . "<br><br>";
echo '--------------------<br><br>';

//6- floor(number) - rounds a number DOWN to the nearest integer.
echo "6- floor(number) <br>";
echo "=============== <br>";
echo "<a href='https://www.w3schools.com/php/func_math_floor.asp'>func_math_floor</a> <br>";
echo "floor(5) ==> ";
echo floor(5) . "<br>";
echo "floor(5.87) ==> ";
echo floor(5.87) . "<br>";
echo "floor(5.12) ==> ";
echo floor(5.12) . "<br>";
echo "floor(-2.3) ==> ";
echo floor(-2.3) . "<br>";
echo "floor(-2.91) ==> ";
echo floor(-2.91) . "<br>";
echo '--------------------<br><br>';

//7- round(number,precision,mode) 
/* number:	 Required. Specifies the value to round
precision:	Optional. Specifies the number of decimal digits to round to. Default is 0
mode:	   Optional. Specifies a constant to specify the rounding mode:
                PHP_ROUND_HALF_UP - Default. Rounds number up to precision decimal
                     when it is half way there. Rounds 1.5 to 2 and -1.5 to -2
                PHP_ROUND_HALF_DOWN - Round number down to precision decimal places,
                    when it is half way there. Rounds 1.5 to 1 and -1.5 to -1
                PHP_ROUND_HALF_EVEN - Round number to precision decimal places towards the next even value
                PHP_ROUND_HALF_ODD - Round number to precision decimal places towards the next odd value
*/
echo "7- round(number,precision,mode)  <br>";
echo "============================= <br>";
echo "<a href='https://www.w3schools.com/php/func_math_round.asp'>func_math_round</a> <br>";
echo "round(5) ==> ";
echo round(5) . "<br>";
echo "round(5.87) ==> ";
echo round(5.87) . "<br>";
echo "round(5.12) ==> ";
echo round(5.12) . "<br>";
echo "round(5.5) ==> ";
echo round(5.5) . "<br>";
echo "round(-2.3) ==> ";
echo round(-2.3) . "<br>";
echo "round(-2.91) ==> ";
echo round(-2.91) . "<br><br>";

echo "round(7.96, 1) ==> ";
echo round(7.96, 1) . "<br>";
echo "round(7.93, 1) ==> ";
echo round(7.93, 1) . "<br>";
echo "round(7.856, 2) ==> ";
echo round(7.856, 2) . "<br>";
echo "round(7.836, 2) ==> ";
echo round(7.836, 2) . "<br>";
echo "round(7.954, 1) ==> ";
echo round(7.954, 1) . "<br><br>";

echo "round(7.83, 0, PHP_ROUND_HALF_UP) ==> /Default/ ";
echo round(7.83, 0, PHP_ROUND_HALF_UP) . "<br>";
echo "round(7.43, 0, PHP_ROUND_HALF_UP) ==> /Default/ ";
echo round(7.43, 0, PHP_ROUND_HALF_UP) . "<br><br>";
echo "round(7.5, 0, PHP_ROUND_HALF_DOWN) ==> ";
echo round(7.5, 0, PHP_ROUND_HALF_DOWN) . "<br>";
echo "round(7.52, 0, PHP_ROUND_HALF_DOWN) ==> ";
echo round(7.52, 0, PHP_ROUND_HALF_DOWN) . "<br><br>";

echo "round(7.5, 0, PHP_ROUND_HALF_EVEN) ==> ";
echo round(7.5, 0, PHP_ROUND_HALF_EVEN) . "<br>";
echo "round(6.5, 0, PHP_ROUND_HALF_EVEN) ==> ";
echo round(6.5, 0, PHP_ROUND_HALF_EVEN) . "<br><br>";

echo "round(7.5, 0, PHP_ROUND_HALF_ODD) ==> ";
echo round(7.5, 0, PHP_ROUND_HALF_ODD) . "<br>";
echo "round(6.5, 0, PHP_ROUND_HALF_ODD) ==> ";
echo round(6.5, 0, PHP_ROUND_HALF_ODD) . "<br><br>";
echo '--------------------<br><br>';


//8- sqrt(number) - returns the square root of a number.
echo "8- sqrt(number) <br>";
echo "=============== <br>";
echo "<a href='https://www.w3schools.com/php/func_math_sqrt.asp'>func_math_sqrt</a> <br>";
echo "sqrt(5) ==> ";
echo sqrt(25) . "<br>";
echo "sqrt(5.87) ==> ";
echo sqrt(0.64) . "<br><br>";

//9- min(array_values) OR min(value1,value2,...)
// returns the lowest value in an array, or the lowest value of several specified values.
echo "9- min(array_values) OR min(value1,value2,...) <br>";
echo "======================================= <br>";
echo "<a href='https://www.w3schools.com/php/func_math_min.asp'>func_math_min</a> <br>";

echo "min(20, 5, 30, 2) ==> ";
echo min(20, 5, 30, 2) . "<br>";

echo "min([12, 4, 23, 6, 10]) ==> ";
echo min([12, 4, 23, 6, 10]) . "<br><br>";

$arr1 = [1, 3, 5];
$arr2 = [1, 2, 8];
echo '$arr1 ==>';
printArr($arr1);
echo '$arr2 ==>';
printArr($arr2);
echo'min($arr1, $arr2)';
printArr (min($arr1, $arr2));
//
echo '--------------------<br><br>';

//9- max(array_values) OR max(value1,value2,...)
// returns the highest value in an array, or the highest value of several specified values.
echo "9- max(array_values) OR max(value1,value2,...) <br>";
echo "======================================= <br>";
echo "<a href='https://www.w3schools.com/php/func_math_max.asp'>func_math_max</a> <br>";
echo "max(20, 5, 30, 2) ==> ";
echo max(20, 5, 30, 2) . "<br>";

echo "max([12, 4, 23, 6, 10]) ==> ";
echo max([12, 4, 23, 6, 10]) . "<br><br>";

echo '$arr1 ==>';
printArr($arr1);
echo '$arr2 ==>';
printArr($arr2);
echo'max($arr1, $arr2)';
printArr (max($arr1, $arr2));
