<?php
// Array Functions
    echo "Array Functions -5- <br>";
    echo "*******************<br>";
    echo "<a href='https://www.w3schools.com/Php/php_ref_array.asp' >W3School Araay Functions </a>";
    echo "<br>";
    echo "<a href='https://www.php.net/manual/en/function.array-change-key-case.php' >php.net-manual-en-array functions </a>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

                                //sort()
                                //rsort()
                                //asort()
                                //ksort()
                                //krsort()


    function printArr($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    
    // SORTING
    //----------
    // DEPENDING ON THE VALUES IN THE ARRAY:
    echo "DEPENDING ON THE VALUES IN THE ARRAY. sort(), rsort(), reindexing by 0 <br>";
    echo "============================================================ <br>";
    // sort() - Ascending:
    $nums = [1,5,45,30,19,20];
    $countries = ["S" => "Syria", "I" => "Iraq", "E" => "Egypt", "L" => "Lebanon"];

    echo "1- sort() - Ascending: <br>";
    echo "-----------------------------";
    printArr($nums);
    sort($nums);
    printArr($nums);
    
    printArr($countries);
    sort($countries);
    printArr($countries);
    
    // rsort() - Descending: / r -> reverse
    echo "2- rsort() - Descending: <br>";
    echo "-----------------------------";
    $nums = [1,5,45,30,19,20];
    $countries = ["S" => "Syria", "I" => "Iraq", "E" => "Egypt", "L" => "Lebanon"];

    printArr($nums);
    rsort($nums);
    printArr($nums);
    
    printArr($countries);
    rsort($countries);
    printArr($countries);

    // DEPENDING ON THE VALUSE IN THE ASSOCIATIVE:
    echo "DEPENDING ON THE VALUSE IN THE ASSOCIATIVE ARRAY. asort(), arsort()<br>";
    echo "====================================================================== <br>";
    // asort() - Ascending:
    echo "3- asort() - Ascending: <br>";
    echo "-----------------------------";
    $countries = ["S" => "Syria", "I" => "Iraq", "E" => "Egypt", "L" => "Lebanon"];
    printArr($countries);
    asort($countries);
    printArr($countries);
    
    // asort() - Descending: / r -> reverse
    echo "4- arsort() - Ascending: <br>";
    echo "-----------------------------";
    $countries = ["S" => "Syria", "I" => "Iraq", "E" => "Egypt", "L" => "Lebanon"];   
    printArr($countries);
    arsort($countries);
    printArr($countries);
    
    // DEPENDING ON THE KEYS IN THE ASSOCIATIVE ARRAYS:
    echo "DEPENDING ON THE KEYS IN THE ASSOCIATIVE ARRAY. Ksort(), Krsort()<br>";
    echo "====================================================================== <br>";
    // ksort() - Ascending:
    echo "5- ksort() - Ascending: <br>";
    echo "-----------------------------";
    $countries = ["S" => "Syria", "I" => "Iraq", "E" => "Egypt", "L" => "Lebanon"];
    printArr($countries);
    ksort($countries);
    printArr($countries);
    
    // krsort() - Descending: / r -> reverse
    echo "6- krsort() - Ascending: <br>";
    echo "-----------------------------";
    $countries = ["S" => "Syria", "I" => "Iraq", "E" => "Egypt", "L" => "Lebanon"];   
    printArr($countries);
    krsort($countries);
    printArr($countries);

    //natsort() - National Sorting:
    echo "sort() AND natsort() <br>";
    echo "=================== <br>";
    $test = ["test3", "test1", "test20"];
    printArr($test);
    sort($test);
    echo 'sort($test);';
    printArr($test);
    
    $test = ["test3", "test1", "test20"];
    printArr($test);
    natsort($test);
    echo 'natsort($test);';
    printArr($test);
