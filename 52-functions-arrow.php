<?php
    //Arrow Functions
    function hello1(){
        return "Hello Regular1.";
    }
    echo hello1();
    echo "<br>";
    // we can use the Anonymous function as Arrow Function
    // we use the 'fn':
    $myArrowFn1 = fn() => "Hello Arrow1.";
    echo $myArrowFn1();
    echo "<br>";
    echo "----------------------------------";
    echo "<br>";
    
    function hello2($name){
        return "Hello $name Regular2.";
    }
    echo hello2("Salem");
    echo "<br>";
    // we can use the Anonymous function as Arrow Function with argument
    // we use the 'fn($arg)':
    $myArrowFn2 = fn($name) => "Hello $name Arrow2.";
    echo $myArrowFn2("Adnan");
    echo "<br>";
    echo "----------------------------------";
    echo "<br>";
    
    //Note: that the Arrow Function inherite the global variables:
    $myMessg = "Message from Global-Scope.";
    $myArrowFn3 = fn($name) => "$myMessg  $name";
    echo $myArrowFn3("Mazen");
    echo "<br>";
    echo "----------------------------------";
    echo "<br>";

     //
     function printArr($myArr){
        echo "<pre>";
        print_r($myArr);
        echo "</pre>";
    }
    //Callback function
    $nums = [2, 5, 11, 17, 4, 10];
    $new_nums1 = array_map(function($item){
        return $item + 10;
    }, $nums);
    printArr ($new_nums1);

    //Callback function as Arrow Function
    $new_nums2 = array_map( fn($item) => $item + 10, $nums);
    printArr ($new_nums2);


?>