<?php
// Array Functions
echo "Array Functions -6- <br>";
echo "*******************<br>";
echo "<a href='https://www.w3schools.com/Php/php_ref_array.asp' >W3School Araay Functions </a>";
echo "<br>";
echo "<a href='https://www.php.net/manual/en/function.array-change-key-case.php' >php.net-manual-en-array functions </a>";
echo "<br>";
echo "<br>";
echo "<br>";

                        // array_map('function', array)
                        // array_filter(array, 'function')
                        // array_reduce(array, function)

                        
function printArr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

// HIGHER ORDER FUNCTIONS
//-----------------------
// array_map('function', array) return array.
echo "array_map('function', array) <br>";
echo "==================== <br>";
$names = ["Bela", "Sami", "Ali", "Mazen", "Yaser"];
$degrees = [70, 50, 35, 91, 40, 99];

function addText($n){
    return "Hello " . $n;
}
echo '(array_map("addText", $names)) ==> ';
printArr (array_map('addText', $names));

// or by using anonymous arrow function:
echo "using anonymous arrow function:<br>";
echo "------------------------------------------<br>";
echo '$newArr = array_map( fn($n) => "Hello " . $n, $names );<br> ';
$newArr = array_map(fn($n) => "Hello " . $n, $names);
echo '$newArr ==> ';
printArr ($newArr);

//many array:
echo "Mapping Many arrays:<br>";
echo "-----------------------------<br>";
echo "Example-1 :<br>";
echo "----------------<br>";
$namesANDdegrees = array_map(fn($n, $d) => "$n -> $d" , $names, $degrees);
printArr ($namesANDdegrees);
echo "Example-2 :<br>";
echo "----------------<br>";
$nums1 = [3,5,10,12];
$nums2 = [40,7,1,16];
$sumNums1Nums2 = array_map( fn($n1,$n2) => $n1+$n2, $nums1, $nums2);
printArr($sumNums1Nums2);

// array_filter(array, 'function') return array.
echo "array_filter(array, 'function') <br>";
echo "===================== <br>";
function test60($d){
    return $d >= 60;    //if($d >= 60) { return $d;}
}
printArr(array_filter($degrees, 'test60'));
// or by using anonymous arrow function:
echo "using anonymous arrow function: <br>";
echo 'array_filter($degrees, fn($d) => $d>=60) ==> <br>';
printArr(array_filter($degrees, fn($d) => $d>=60));

// we can filter the array by keys:
echo "array_filter(array, 'function') <br>";
echo "===================== <br>";
$filterKeys = [5 => "HTML", 3 => "Pascal", 2 => "CSS", 6 => "PHP"];
printArr($filterKeys);
echo 'array_filter($filterKeys, fn($k) => $k>3, ARRAY_FILTER_USE_KEY) ==> <br>';
printArr(array_filter($filterKeys, fn($k) => $k>3, ARRAY_FILTER_USE_KEY));

echo 'array_filter($filterKeys, fn($v, $k) => $v=="CSS" or $k>3, ARRAY_FILTER_USE_BOTH) ==> <br>';
printArr(array_filter($filterKeys, fn($v, $k) => $v=="CSS" or $k>3, ARRAY_FILTER_USE_BOTH));

// array_reduce(array, function) return one value.
echo "array_reduce(array, 'function') <br>";
echo "===================== <br>";
$nums = [10, 5, 15, 20, 50];
printArr($nums);
function sum($n1, $n2){
    return $n1 + $n2;
}
echo 'array_reduce($nums, "sum") ==> ';
echo array_reduce($nums, "sum") . "<br><br>";

echo "we can adding an initial value with it:<br>";
echo"---------------------------------------------<br>";
echo 'array_reduce($nums, "sum", 50) ==> ';
echo array_reduce($nums, 'sum', 50) . "<br>";
echo "<br><br>";

//Demo - How it work?
echo "Demo - How it work? <br>";
echo "================= <br>";
function sumDemo($carry, $item){
    echo "carry: $carry <br>";
    echo "item: $item <br>";
    echo "carry+item : " . $carry + $item . "<br>";
    echo "**************<br>";
    return $carry + $item;
}
echo 'array_reduce($nums, "sumDemo")<br>';
echo "---------------------------------------------<br>";
echo array_reduce($nums, "sumDemo") . "<br><br>";

echo 'array_reduce($nums, "sumDemo", 50)<br>';
echo "------------------------------------------------<br>";
echo array_reduce($nums, "sumDemo", 50) . "<br><br>";

printArr($nums);

// Minimum:
echo "Minimum<br>";
echo "===========<br>";
function mini($f, $s){
    // if($f<$s):
    //     return $f;
    // else:
    //     return $s;
    // endif;
    // if(empty($f)) $f=0;
    return $f<$s ? $f : $s;
}
echo array_reduce($nums, 'mini', $nums[0]);
echo "<br>";

// Maximum:
echo "Maximum<br>";
echo "===========<br>";
// printArr($nums);
function maxi($f, $s){
    return $f>$s ? $f : $s;
}
echo array_reduce($nums, 'maxi', $nums[0]);

