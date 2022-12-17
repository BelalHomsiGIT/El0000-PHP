<?php
    // Array Functions
    echo "Array Functions -2- <br>";
    echo "*******************<br>";
    echo "<a href='https://www.w3schools.com/Php/php_ref_array.asp' >W3School Araay Functions </a>";
    echo "<br>";
    echo "<a href='https://www.php.net/manual/en/function.array-change-key-case.php' >php.net-manual-en-array functions </a>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
 
    //array_merge()
    //array_replace()
    
    function printArr($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }

    /*15- array_merge() function merges one or more arrays into one array.
        Tip: You can assign one array to the function, or as many as you like.
        Note: If two or more array elements have the same key, the last one overrides the others.
        Note: If you assign only one array to the array_merge() function, and the keys are integers,
              the function returns a new array with integer keys starting at 0 and increases by 1 
              for each value (See example below).
    */
    echo "15- array_merge() function merges one or more arrays into one array.<br> ";
    echo "<a href='https://www.w3schools.com/php/func_array_merge.asp' >func_array_merge</a>";
    echo "<br>";
    echo "<a href='https://www.php.net/manual/en/function.array-merge.php' >function.array-merge</a>";
    echo "<br>";
    echo "----------------------------------------------------------------------------------- <br>";
    echo "<br>";

    $arrFirst = ["one" => "HTML", "Tow" => "CSS", "Three" => "JS"];
    $arrSecond = ["one" => "PHP", "La" => "Laravel", "db" => "MySQL", "algo" => "Algorithms"];
    $arrIntIndex1 = [2 => "front", 5 => "back", 7 => "full", 3 => "wordpress"];
    $arrIntIndex2 = [1 => "Basic", 2 => "DOS", 5 => "DBII", 7 => "Pascal"];

    echo "arrIntIndex1 ==>";
    printArr($arrIntIndex1);
    echo "array_merge(arrIntIndex1) ==>";
    printArr(array_merge($arrIntIndex1));
    
    echo "arrIntIndex2 ==>";
    printArr($arrIntIndex2);
    echo "array_merge(arrIntIndex2) ==>";
    printArr(array_merge($arrIntIndex2));
    echo "array_merge(arrIntIndex1, arrIntIndex2)";
    printArr(array_merge($arrIntIndex1, $arrIntIndex2));

    echo "arrFirst ==>";
    printArr($arrFirst);
    echo "arrSecond ==>";
    printArr($arrSecond);
    echo "array_merge(arrFirst, arrSecond) ==>";
    printArr(array_merge($arrFirst, $arrSecond));
    echo "array_merge(arrFirst, arrIntIndex1) ==>";
    printArr(array_merge($arrFirst, $arrIntIndex1));

    /*16- array_replace() function replaces the values of the first array with the values from following arrays.
    Tip: You can assign one array to the function, or as many as you like.
        -If a key from array1 exists in array2, values from array1 will be replaced by the values from array2.
        -If the key only exists in array1, it will be left as it is.
        *If a key exist in array2 and not in array1, it will be created in array1.
        If multiple arrays are used, values from later arrays will overwrite the previous ones.
    */
    echo "16- array_replace() function replaces the values of the first array with the values from following arrays.<br> ";
    echo "<a href='https://www.w3schools.com/php/func_array_replace.asp' >func_array_mreplace</a>";
    echo "<br>";
    echo "<a href='https://www.php.net/manual/en/function.array-replace.php' >function.array-replace</a>";
    echo "<br>";
    echo "----------------------------------------------------------------------------------- <br>";
    echo "<br>";

    echo "arrIntIndex1 ==>";
    printArr($arrIntIndex1);
    echo "arrIntIndex2 ==>";
    printArr($arrIntIndex2);
    echo "array_replace(arrIntIndex1, arrIntIndex2)";
    printArr(array_replace($arrIntIndex1, $arrIntIndex2));
    
    echo "arrFirst ==>";
    printArr($arrFirst);
    echo "arrSecond ==>";
    printArr($arrSecond);
    echo "array_replace(arrFirst, arrSecond) ==>";
    printArr(array_replace($arrFirst, $arrSecond));
    echo "array_replace(arrFirst, arrIntIndex1) ==>";
    printArr(array_replace($arrFirst, $arrIntIndex1));

    // array_rand
    $test = ["A", "B", "C", "D"];
    echo "test ==>";
    printArr($test);
    echo 'array_rand($test) ==> ';
    echo array_rand($test);
    echo "<br> Note: this number is the KEY of item.<br><br>";
    
    echo '$test[array_rand($test)] ==> ';
    echo $test[array_rand($test)];
    echo "<br> Note: this is random item value.<br><br>";
    
    echo '$test[array_rand($test, 2)] ==> ';
    printArr(array_rand($test, 2));
    echo "<br> Note: this is array of KEYS of random items.<br><br>";
    //
    $randomKeys = array_rand($test, 2);
    printArr($randomKeys);
    echo count($randomKeys);
    echo "<br>";
    echo "random----------------------------<br>";

    for($k=0; $k<2; $k++){
        echo $test[$randomKeys[$k]] . " hello<br>";
    }

    echo "end-random---------------<br>";
    echo "----------------------------<br>";
    echo "----------------------------<br>";
    echo "----------------------------<br>";
    echo "----------------------------<br>";

    //shuffle
    echo "shuffle<br>";
    printArr($test);
    shuffle($test);
    printArr($test);


?>