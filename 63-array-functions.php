<?php
    // Array Functions
    echo "Array Functions -1- <br>";
    echo "*******************<br>";
    echo "<a href='https://www.w3schools.com/Php/php_ref_array.asp' >W3School Araay Functions </a>";
    echo "<br>";
    echo "<a href='https://www.php.net/manual/en/function.array-change-key-case.php' >php.net-manual-en-array functions </a>";
    echo "<br>";

    //array_chunk()
    //array_change_key_case()
    //array_combine()
    //array_count_values()
    //array_reverse()
    //array_flip()
    //count()
    //in_array()
    //array_key_exists()
    //array_keys()
    //array_values()
    //array_pad()
    //array_product()
    //next()
    //prev()
    //current()
    //end()
    //reset()
    //each()

    function printArr($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    
    //1- array_chunk() function splits an array into chunks of new arrays.
    // Returns a multidimensional indexed array, 
    // starting with zero, with each dimension containing size elements.
    /* array_chunk(array, size, preserve_key)
        array:	        Required. Specifies the array to use
        size:	        Required. An integer that specifies the size of each chunk
        preserve_key:	Optional. Possible values:
            true - Preserves the keys
            false - Default. Reindexes the chunk numerically
    */
    echo "1- array_chunk() function splits an array into chunks of new arrays. ";
    echo "<a href='https://www.w3schools.com/Php/func_array_chunk.asp' >func_array_chunk</a>";
    echo "<br>";
    echo "----------------------------------------------------------------------------------- <br>";
    echo "<br>";
    $myFreinds1 = ["Sameh", "Basem", "Mustafa", "Hashem", "Antar", "Sami", "Ali"];
    echo "myFreinds1 ==>";
    PrintArr($myFreinds1);
    echo "array_chunk(myFreinds1, 2) ==>";
    PrintArr(array_chunk($myFreinds1, 2));
   
    $myFreinds2 = ["Sh" =>"Sameh", "Ba" => "Basem", "Mu" => "Mustafa", 
                    "Ha" => "Hashem", "An" => "Antar", "Sm" => "Sami",
                    "Al" => "Ali"];
    echo "myFreinds2 ==>";
    PrintArr($myFreinds2);
    echo "array_chunk(myFreinds2, 2) ==>";
    PrintArr(array_chunk($myFreinds2, 2));
    // same old keys:
    echo "array_chunk(myFreinds2, 2, true) ==>";
    PrintArr(array_chunk($myFreinds2, 2, true));
    echo "<br>";

    //2- array_change_key_case() function changes all keys in an array to lowercase or uppercase.
    /* array_change_key_case(array, case)
        array:	Required. Specifies the array to use
        case:	Optional. Possible values:
            CASE_LOWER - Default value. Changes the keys to lowercase
            CASE_UPPER - Changes the keys to uppercase
    */
    echo "2- array_change_key_case() function changes all keys in an array to lowercase or uppercase.";
    echo "<a href='https://www.w3schools.com/php/func_array_change_key_case.asp' >func_array_change_key_case</a>";
    echo "<br>";
    echo "-------------------------------------------------------------------------------------------------------- <br>";
    echo "<br>";

    echo "myFreinds2 ==>";
    PrintArr($myFreinds2);
    echo "array_change_key_case(myFreinds2) ==>";
    PrintArr(array_change_key_case($myFreinds2));
    // CASE_UPPER:
    echo "array_change_key_case(myFreinds2, CASE_UPPER) ==>";
    PrintArr(array_change_key_case($myFreinds2, CASE_UPPER));
    echo "<br>";

    // 3- array_combine() function creates an array by using the 
    // elements from one "keys" array and one "values" array.
    //Note: Both arrays must have equal number of elements!
    /* array_combine(keys, values)
            keys:	Required. Array of keys
            values:	Required. Array of values
    */
    echo "3- array_combine() function creates an array by using the elements from one 'keys' array and one 'values' array";
    echo "<br>";
    echo "Note: Both arrays must have equal number of elements!";
    echo "<a href='https://www.w3schools.com/php/func_array_combine.asp' >func_array_combine</a>";
    echo "<br>";
    echo "----------------------------------------------------------------------------------------------------------------------------------------- <br>";
    echo "<br>";
    $myArr = ["HTML", 'CSS', "JS", 'PHP', "LARAVEL"];
    $myKeys = ["h", "c", "j", "p", "r"];
    PrintArr($myArr);
    PrintArr($myKeys);
    echo "array_combine(myKeys, myArr) ==>";
    PrintArr(array_combine($myKeys, $myArr));
    echo "<br>";
    
    //4- array_count_values() function counts all the values of an array.
    // array_count_values(array)
    //Returns an associative array, where the keys are the original array's values,
    // and the values are the number of occurrences
    echo "4- The array_count_values() function counts all the values of an array.";
    echo "<a href='https://www.w3schools.com/php/func_array_count_values.asp' >func_array_count_values</a>";
    echo "<br>";
    echo "-------------------------------------------------------------------------------------- <br>";
    echo "<br>";
    $myCharArr = ["A", "B", "A", "D",  "B", "A", "D", "X"];
    echo "myCharArr ==>";
    PrintArr($myCharArr);
    echo "array_count_values(myCharArr) ==>";
    PrintArr(array_count_values($myCharArr));
    echo "<br>";

    //5- array_reverse() function returns an array in the reverse order.
    /* array_reverse(array, preserve)
        array:  	Required. Specifies an array
        preserve:	Optional. Specifies if the function should preserve the keys of the array or not.
            Possible values:
                true
                false
    */
    echo "5- array_reverse() function returns an array in the reverse order.";
    echo "<a href='https://www.w3schools.com/php/func_array_reverse.asp' >func_array_reverse</a>";
    echo "<br>";
    echo "-------------------------------------------------------------------------------------- <br>";
    echo "<br>";

    echo "myFreinds1 ==>";
    PrintArr($myFreinds1);
    echo "array_reverse(myFreinds1) ==>";
    PrintArr(array_reverse($myFreinds1));
    echo "array_reverse(myFreinds1, true) ==>";
    PrintArr(array_reverse($myFreinds1, true));
    echo "<br>";
    
    //6- array_flip() function flips/exchanges all keys with their associated values in an array.
    // array_flip(array)
    echo "6-  array_flip() function flips/exchanges all keys with their associated values in an array.";
    echo "<a href='https://www.w3schools.com/php/func_array_flip.asp' >func_array_flip</a>";
    echo "<br>";
    echo "-------------------------------------------------------------------------------------- <br>";
    echo "<br>";
    
    echo "myFreinds2 ==>";
    PrintArr($myFreinds2);
    echo "array_flip(myFreinds2) ==>";
    PrintArr(array_flip($myFreinds2));
    
    echo "myFreinds1 ==>";
    PrintArr($myFreinds1);
    echo "array_flip(myFreinds1) ==>";
    PrintArr(array_flip($myFreinds1));

    //7- count() function returns the number of elements in an array.
    /* count(array, mode)
        array:	Required. Specifies the array
        mode	Optional. Specifies the mode. Possible values:
            0 - Default. Does not count all elements of multidimensional arrays
            1 - Counts the array recursively (counts all the elements of multidimensional arrays)
    */
    echo "7- count() function returns the number of elements in an array. <br>";
    echo "count(array, mode) <br>";
    echo "-------------------------------------------------------------------------------------- <br>";
    echo "<br>";
    $arr1 = array(5, "6", -2, 3, 12, array(1,2,3));
    echo "arr1 ==>";
    printArr($arr1);
    echo "count(arr1) ==>";
    echo count($arr1);
    echo "<br>";
    echo "count(arr1, 1) ==>";
    echo count($arr1, 1);
    echo "<br>";
    echo "<br>";
    
    
    //8- in_array() function searches an array for a specific value.
    /* in_array(search, array, type)
    search:	Required. Specifies the what to search for
    array:	Required. Specifies the array to search
    type:	Optional. If this parameter is set to TRUE, 
    the in_array() function searches for the search-string and specific type in the array.
    */
    echo "8- in_array() function searches an array for a specific value. <br>";
    echo "in_array(search, array, type) <br>";
    echo "-------------------------------------------------------------------------------------- <br>";
    echo "<br>";
    echo 'arr1 = array(5, "6", -2, 3, 12, array(1,2,3));';
    echo "<br>";
    // printArr($arr1);
    echo "var_dump(in_array(3, arr1)) ==>";
    echo var_dump(in_array(3, $arr1)); // bool(true)
    echo "<br>";
    echo "var_dump(in_array(17, arr1)) ==>";
    echo var_dump(in_array(17, $arr1)); //  bool(false)
    echo "<br>";
    
    echo "var_dump(in_array(6, arr1)) ==>";
    echo var_dump(in_array(6, $arr1)); // bool(true)
    echo "<br>";
    echo "var_dump(in_array(6, arr1, true)) ==>";
    echo var_dump(in_array(6, $arr1, true)); //  bool(false)
    echo "<br>";
    echo "<br>";
    
    //9- array_key_exists() function checks an array for a specified key, 
    // and returns true if the key exists and false if the key does not exist.
    // array_key_exists(key, array)
    echo "9- array_key_exists() function checks an array for a specified key, <br>";
    echo "and returns true if the key exists and false if the key does not exist. <br>";
    echo "-------------------------------------------------------------------------------------- <br>";
    // echo "<br>";
    $arr2 = ["HTML" => 50, "CSS" => 60, "JS" => 100, "PHP" => 150];
    echo "arr2 ==>";
    printArr($arr2);
    echo 'var_dump(array_key_exists("PHP", $arr2)) ==>';
    var_dump(array_key_exists("PHP", $arr2)); // bool(true)
    echo "<br>";
    //example:
    $myKey = "PHP";
    if( array_key_exists($myKey, $arr2) ){
        echo "PHP found, PRICE = $arr2[$myKey]";
    }else{
        echo "Not Found !";
    }
    echo "<br>";
    echo "<br>";

    //10- array_keys() function returns an array containing the keys.
    /* array_keys(array, value, strict)
        array:	Required. Specifies an array
        value:	Optional. You can specify a value, then only the keys with this value are returned
        strict:	Optional. Used with the value parameter. Possible values:
            true - Returns the keys with the specified value, depending on type: 
                the number 5 is not the same as the string "5".
            false - Default value. Not depending on type, 
                the number 5 is the same as the string "5".
    */
    // Returns an array containing the keys
    echo "10- array_keys() function returns an array containing the keys. <br>";
    echo "array_keys(array, value, strict) <br>";
    echo "---------------------------------------------------------------------------------------- <br>";
    // echo "<br>";

    echo "myFreinds1 ==>";
    PrintArr($myFreinds1);
    echo "array_keys(myFreinds1) ==>";
    PrintArr(array_keys($myFreinds1));

    echo "array_keys(myFreinds1, 'Antar') ==>";
    PrintArr(array_keys($myFreinds1, 'Antar'));
    //
    echo "myFreinds2 ==>";
    PrintArr($myFreinds2);
    echo "array_keys(myFreinds2) ==>";
    PrintArr(array_keys($myFreinds2));    

    echo "array_keys(myFreinds2, 'Antar') ==>";
    PrintArr(array_keys($myFreinds2, 'Antar'));
    //
    echo "myCharArr ==>";
    PrintArr($myCharArr);
    echo "array_keys(myCharArr) ==>";
    PrintArr(array_keys($myCharArr));
    echo "array_keys(myCharArr, 'A') ==>";
    PrintArr(array_keys($myCharArr, 'A'));
    //
    $arr3 = array(15, 10, -20, "15", 4, 15);
    echo "arr3 ==>";
    PrintArr($arr3);
    echo "array_keys(arr3) ==>";
    PrintArr(array_keys($arr3));
    echo "array_keys(arr3, 15) ==>";
    PrintArr(array_keys($arr3, 15));

    echo 'arr3 = array(15, 10, -20, "15", 4, 15);';
    echo "<br>";
    echo "array_keys(arr3, 15, true) ==>";
    PrintArr(array_keys($arr3, 15, true));
    echo "array_keys(arr3, '15', true) ==>";
    PrintArr(array_keys($arr3, '15', true));

    //11- array_values() function returns an array containing all the values of an array.
    //Tip: The returned array will have numeric keys, starting at 0 and increase by 1.
    // array_values(array)
    // Returns an array containing all the values of an array
    echo "11- array_values() function returns an array containing all the values of an array. <br>";
    echo "------------------------------------------------------------------------------------------------- <br>";
    echo "myFreinds2 ==>";
    PrintArr($myFreinds2);
    echo "array_values(myFreinds2) ==>";
    PrintArr(array_values($myFreinds2));       

    //12- array_pad() function inserts a specified number of elements, with a specified value, to an array.
    /*array_pad(array, size, value)
        array:	Required. Specifies an array
        size:	Required. Specifies the number of elements in the array returned from the function
        value:	Required. Specifies the value of the new elements in the array returned from the function
    */
    /*Tip: If you assign a negative size parameter, the function will insert new elements 
        BEFORE the original elements (See example below).
    Note: This function will not delete any elements if the size parameter is 
        less than the size of the original array.
    */
    echo "12- array_pad() function inserts a specified number of elements, with a specified value, to an array. <br>";
    echo "-------------------------------------------------------------------------------------------------------- <br>";
    $arr4 = ["A", "B", "C", "D"];
    echo "arr4 ==>";
    PrintArr($arr4);
    echo "array_pad(arr4, 8, '#') ==>";
    PrintArr(array_pad($arr4, 8, "#"));       
    echo "array_pad(arr4, -10, '#') ==>";
    PrintArr(array_pad($arr4, -10, "#"));       
    echo "array_pad(arr4, 3, '#') ==>";
    PrintArr(array_pad($arr4, 3, "#")); 
    
    //13- array_product() function calculates and returns the product of an array.
    // array_product(array)
    // 	Returns the product as an integer or float
    echo "13- array_product() function calculates and returns the product of an array.. <br>";
    echo "-------------------------------------------------------------------------------------------------------- <br>";
    $arr5 = [7,2,1,10];
    echo "arr5 ==>";
    PrintArr($arr5);
    echo "array_product(arr5) ==>";
    echo array_product($arr5); // 140
    echo "<br>";
    
    echo "array_sum(arr5) ==>";
    echo array_sum($arr5); // 20
    echo "<br>";
    echo "<br>";
    //
    echo "arr4 ==>";
    PrintArr($arr4);
    echo "array_product(arr4) ==>";
    echo array_product($arr4); // 0
    echo "<br>";
    
    echo "array_sum(arr4) ==>";
    echo array_sum($arr4); // 0
    echo "<br>";
    echo "<br>";
    //

    //14 -
/*  next()      - moves the internal pointer to, and outputs, the next element in the array
    prev()      - moves the internal pointer to, and outputs, the previous element in the array
    current()   - returns the value of the current element in an array
    end()       - moves the internal pointer to, and outputs, the last element in the array
    reset()     - moves the internal pointer to the first element of the array
    each()      - returns the current element key and value, and moves the internal pointer forward
                * deprecated in PHP 7.2.
*/
    echo "14- next() , prev(), current(), end(), reset(), each() ";
    echo "<a href= 'https://www.w3schools.com/php/func_array_next.asp'> W3School</a><br>";
    echo "-------------------------------------------------------------------------- <br>";
    echo "myFreinds1 ==>";
    PrintArr($myFreinds1);
    //
    echo "current(myFreinds1) ==> ";
    echo current($myFreinds1) . "<br>";

    echo "next(myFreinds1) ==> ";
    echo next($myFreinds1) . "<br>";

    echo "next(myFreinds1) ==> ";
    echo next($myFreinds1) . "<br>";

    echo "current(myFreinds1) ==> ";
    echo current($myFreinds1) . "<br>";

    echo "prev(myFreinds1) ==> ";
    echo prev($myFreinds1) . "<br>";

    echo "end(myFreinds1) ==> ";
    echo end($myFreinds1) . "<br>";

    echo "prev(myFreinds1) ==> ";
    echo prev($myFreinds1) . "<br>";

    echo "reset(myFreinds1) ==> ";
    echo reset($myFreinds1) . "<br>";
    
    echo "prev(myFreinds1) ==> ";
    echo prev($myFreinds1) . "<br>";
    var_dump(prev($myFreinds1));
    
?>