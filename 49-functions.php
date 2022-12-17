<?php
    //1- Function Variable:
    //---------------------
    echo "1- Function Variable <br>";
    echo "--------------------- <br>";
    echo "1 - <br>";
    echo "---- <br>";
    function funOne(){
        echo "From fun1. <br>";
    }
    //calling the function funOne() as we know:
    echo 'funOne() ==> ';
    funOne();
    //
    //Now we declare Function Variable:
    $Func1 = "funOne"; // $Func1 is string variable holde funOne 'function name'
    echo 'echo $Func1 ==> ';
    echo $Func1 . "<br>"; // funOne
    //while $Func1 have the string 'funOne' so:
    // $Func1() <--> funOne()
    echo 'echo $Func1() ==> ';
    echo $Func1() . "<br>"; // From fun1.
    echo "<br>";
        
    echo "2 - <br>";
    echo "---- <br>";
    function funHello($someone){
        echo "Hello $someone From funHello. <br>";
    }
    // Function Variable:
    $Func2 = "funHello";
    echo '$Func2 ==> '; 
    echo $Func2 . "<br>"; // funHello
    echo '$Func2("Belal") ==> ';
    echo $Func2("Belal") . "<br>"; // Hello Belal From funHello.
    echo "<br>";

    //2- Function Exist:
    //--------------------
    echo "2- Function Exist <br>";
    echo "------------------- <br>";
    echo "1 - <br>";
    echo "---- <br>";

    if(function_exists("test")){
        echo test(); //No Error
    }else{
        echo "Function 'test' not found ! <br>";
    }

    echo "2 - <br>";
    echo "---- <br>";    
    function testing(){
        echo "Testing Function... <br>";
    }
    if(function_exists("testing")){
        echo testing(); //No Error
    }else{
        echo "Function 'test' not found !";
    }
    echo "<br>";

    //2- Rename Built-in Function:
    //-----------------------------
    echo "3- Rename Built-in Function: <br>";
    echo "----------------------------------- <br>";
    echo 'strlen("Belal Homsi") ==> ';
    echo strlen("Belal Homsi");
    echo "<br>";
    echo '$LenFun = "strlen" <br>';
    $LenFun = "strlen";
    echo 'echo $LenFun("Belal Homsi") ==> ';
    echo $LenFun("Belal Homsi");
    echo "<br>";
    echo "<br>";
    
    //3- Return data-type:
    echo '3- Return data-type: <br>';
    echo "---------------------<br>";
    function sum2nums($n1, $n2){
        return $n1 + $n2;
    }
    echo sum2nums(11.2,3); // 14.2
    echo "<br>";
    
    function sum2numsRetunInt($n1, $n2) : int{
        return $n1 + $n2;
    }
    echo sum2numsRetunInt(11.2,3); // 14

    echo "<br>";
    echo "<br>";

    //4- Scope Variables And Functions:
    echo '4- Scope Variables And Functions: <br>';
    echo "-----------------------------------<br>";
    $glblVar = 15;
    function  testVarScope1(){
        echo $glblVar . "<br>";
    }
    // testVarScope1();
    // Warning: Undefined variable $glblVar
    
    // Anonymous Functions:
    // function witout name, as a variable.
    $myVar1 = function(){
        return "Hello";
    };
    echo $myVar1();
    echo "<br>";
    
    $myVar2 = function($arg){
        return "Hello $arg .";
    };
    echo $myVar2("Sami");
    echo "<br>";
    
    // Now we can use a global variable in Anonymous function body:
    // by type 'use($global-var name)':
    $testVarScope2 = function () use ($glblVar){
        return $glblVar . " It's Global.<br>";
    };
    echo $testVarScope2();
    echo "<br>";
    
    //5- Using Anonymous Function as Callback Function
    echo "5- Using Anonymous Function as Callback Function<br>";
    echo "------------------------------------------------------<br>";
    echo "<a href='https://www.sitepoint.com/functional-programming-in-php-higher-order-functions/'>See this page...</a> <br>";

    // Simple user-defined function we'll pass to our higher-order function
    function printHelloWorld() {
        echo "Hello World!";
    }
    // Higher-order function: that takes a function as an input and calls it
    function higherOrderFunction(callable $func) {
        $func();
    }
    // Call our higher-order function and give it our echoHelloWorld() function. 
    // Notice we pass just the name as a string and no parenthesis.
    // This echos "Hello World!"
    higherOrderFunction('printHelloWorld'); 
    echo "<br>";
    //
    function printArr($myArr){
        echo "<pre>";
        print_r($myArr);
        echo "</pre>";
    }
    //
    //----Tests
    $nums = [2, 5, 11, 17, 4, 10];
    function add_five($item){
        return $item + 5;
    }
    printArr ($nums);
    //
    $nums_after_adding_five = [];
    foreach($nums as $num):
        array_push($nums_after_adding_five, add_five($num));
    endforeach;
    printArr ($nums_after_adding_five);
    //
    // using Higher Order Function, with callback function:
    function new_add_5($item){
        return $item + 5;
    }
    // now we will use new_add_five() function as an arg in the 
    // array_map Higher Order Function:
    $new_nums_after_adding_5 = array_map("new_add_5", $nums);
    printArr ($new_nums_after_adding_5);
    
    // we can use the Anonymous function as callback function:
    $new_nums_after_adding_10 = array_map(function($item){
        return $item + 10;
    }, $nums);
    printArr ($new_nums_after_adding_10);


?>