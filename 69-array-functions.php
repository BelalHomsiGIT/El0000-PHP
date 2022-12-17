<?php
// Array Functions
echo "Array Functions -4- <br>";
echo "*******************<br>";
echo "<a href='https://www.w3schools.com/Php/php_ref_array.asp' >W3School Araay Functions </a>";
echo "<br>";
echo "<a href='https://www.php.net/manual/en/function.array-change-key-case.php' >php.net-manual-en-array functions </a>";
echo "<br>";
echo "<br>";
echo "<br>";

                                // slice()
                                // splice()

function printArr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

// SLICE & SPLICE
//---------------

/* array_slice(array, start, length, preserve).
  array:	Required. Specifies an array
  start:	Required. Numeric value. Specifies where the function will start the slice. 0 = the first element. If this value is set to a negative number, the function will start slicing that far from the last element. -2 means start at the second last element of the array.
  length:	Optional. Numeric value. Specifies the length of the returned array. If this value is set to a negative number, the function will stop slicing that far from the last element. If this value is not set, the function will return all elements, starting from the position set by the start-parameter.
  preserve:	Optional. Specifies if the function should preserve or reset the keys. Possible values:
        true - Preserve keys
        false - Default. Reset keys
*/
echo "array_slice(array, start, length, preserve) <br>";
echo "=============================== <br>";
echo "<a href='https://www.w3schools.com/php/func_array_slice.asp'>array_slice() Function</a><br>";
echo "<br>";
$myArr = ["A", "B", "C", "D", "E", "F", "G", "H"];
$myArrStrKeys = ["a" => 1, "b" => 5, "c" => 14, "d" => 10];
$myArrNumKeys = [10 => 12, 20 => 25, 30 => 54, 40 => 10];
echo '$myArr ==>';
printArr($myArr);
echo 'array_slice($myArr, 2) ==>';
printArr(array_slice($myArr, 2));

echo 'array_slice($myArr, -3) ==>';
printArr(array_slice($myArr, -3));

echo 'array_slice($myArr, 3, 2) ==>';
printArr(array_slice($myArr, 3, 2));

echo 'array_slice($myArr, -3, 2) ==>';
printArr(array_slice($myArr, -3, 2));

echo 'array_slice($myArr, -3, -2) ==>';
printArr(array_slice($myArr, -3, -2)); // if the length is negative, so prevent ...

echo 'array_slice($myArr, -5, -3) ==>';
printArr(array_slice($myArr, -5, -3)); 

echo 'array_slice($myArr, -2, -3) ==>';
printArr(array_slice($myArr, -2, -3)); // empty.

echo 'array_slice($myArr, 2, 3,True) ==>'; // preverse -> True so the same keys
printArr(array_slice($myArr, 2, 3,True));

echo 'array_slice($myArrNumKeys, 2, 3) ==>'; 
printArr(array_slice($myArrNumKeys, 2, 3));

echo 'array_slice($myArrNumKeys, 2, 3,True) ==>'; // preverse -> True so the same keys
printArr(array_slice($myArrNumKeys, 2, 3,True));

echo 'array_slice($myArrStrKeys, 2, 3) ==>'; 
printArr(array_slice($myArrStrKeys, 2, 3)); // the same kyes

echo 'array_slice($myArrStrKeys, 2, 3,True) ==>'; // preverse -> True so the same keys
printArr(array_slice($myArrStrKeys, 2, 3,True));

/* The array_splice() function removes selected elements from an array 
    and replaces it with new elements. The function also returns an array with the removed elements.
    The keys in the replaced array are not preserved. */
/* array_splice(array, start, length, array)
    array:	Required. Specifies an array
    start:	Required. Numeric value. Specifies where the function will start removing elements.
            0 = the first element. If this value is set to a negative number, the function will
            start that far from the last element. -2 means start at the second last element of the array.
    length:	Optional. Numeric value. Specifies how many elements will be removed, 
            and also length of the returned array. If this value is set to a negative number,
            the function will stop that far from the last element. If this value is not set,
            the function will remove all elements, starting from the position set by the start-parameter.
    array:	Optional. Specifies an array with the elements that will be inserted to the original array.
            If it's only one element, it can be a string, and does not have to be an array.
*/
echo "array_splice(array, start, length, array) <br>";
echo "=============================== <br>";
echo "<a href='https://www.w3schools.com/php/func_array_splice.asp'>array_splice() Function</a><br>";
echo "<br>";

echo '$myArr ==>';
printArr($myArr);

echo 'array_splice($myArr, 2, 3) ==>'; 
printArr(array_splice($myArr, 2, 3));
printArr($myArr); // the aray changed - some items removed.

echo 'array_splice($myArr, 1, -2) ==>'; 
printArr(array_splice($myArr, 1, -2));
printArr($myArr);

$myNums = [10, 20, 30, 40, 50, 60, 70];
echo 'myNums ==>'; 
printArr($myNums);
echo 'array_splice($myNums, 3, 2, ["H", "X", "SPLICE"]) ==>'; 
printArr( array_splice($myNums, 3, 2, ["H", "X", "SPLICE"]));
echo 'myNums ==>'; 
printArr($myNums);

