<?php

    //1-Function-Intro
    echo "(1) <br>";
    function fun1(){
        echo "Hello Man" . "<br>";
    }
    fun1();
    echo "<br>";

    //2-Function with argument
    echo "(2) <br>";
    function fun2($user){
        echo "Hello $user" . "<br>";
    }
    fun2('Belal'); //calling
    echo "<br>";

    //3-Function with argument&return
    echo "(3) <br>";
    function fun3($user){
        return "Hello " . $user;
    }
    $res=fun3("Sami");
    echo $res;//or echo fun3("Sami")
    echo "<br><br>";  

    //4-Sum tow int numbers
    echo "(4) <br>";
    function sum2n($n1,$n2){
        $s=$n1+$n2;
        echo $s;
    }
    sum2n(7,3);
    echo "<br>";
    sum2n(3.25,1.5);//output 3.75 , it's float!
    echo "<br><br>";

    //5-Auto casting the parameters
    echo "(5) <br>";
    function sum2int(int $n1, int $n2){
        $s=$n1+$n2;
        echo $s . "<br>";
    }
    sum2int(3.25,1.5);//output 4
    sum2int(8,'10');//otput 18
    echo "<br>";
    
    //6-Test by Division
    echo "(6) <br>";
    function div2n($n1,$n2){
        $s=$n1/$n2;
        echo $s;
    }
    div2n(4.5,2);//output 2.25
    echo "<br><br>";

    //7-Test int parameters
    echo "(7) <br>";
    function div2int(int $n1,int $n2){
        $s=$n1/$n2;
        echo $s;
    }
    div2int(4.5,2);//output 2
    echo "<br><br>";   

    //9-Passing args by Reference,as in Swapping
    echo "(9) <br>";
    function swap2vars(&$n1, &$n2){
        $temp=$n1;
        $n1=$n2;
        $n2=$temp;
    }
    $x=25; $y= 18;
    echo "Original: x=$x , y=$y <br>";
    swap2vars($x,$y);
    echo "Swapping: x=$x , y=$y <br>";
    echo "<br>";

    //10-Passing array and receive it.
    echo "(10) <br>";
    function sumArrItems1($arr){
        $s=0;
        foreach($arr as $item){
            $s+=$item;
        }
        echo "Sum=$s";
    }
    $myArr1=[5,1,3,8,2];    
    sumArrItems1($myArr1);
    echo "<br>";
    $myArr2=[5,10,21];
    sumArrItems1($myArr2);
    echo "<br><br>";

    //11-When we don't know the number of arguments
    //we use ( ... ) in parameters list,
    //write (...$var), and work as Array
    //11-1 using: func_num_args() & func_get_arg(index) & func_get_args()
    echo "------------------------------<br>";
    echo "(11-1) <br>";
    echo "-----------<br>";
    function testMultiArgs(){
        echo "Number Of Arguments is : " . func_num_args() . "<br>";
        echo "The Value Of 3rd Arg is : " . func_get_arg(2) . "<br>";
        echo "All Args:<br>";
        print_r (func_get_args());
        // sum of all args
        $result = 0;
        foreach(func_get_args() as $arg):
            $result += $arg;
        endforeach;
        echo "<br> Sum Args = $result";
    }
    testMultiArgs(25,10,14,61);
    echo "<br>";
    echo "<br>";
    
    //using (...$var)
    echo "(11-2) <br>";
    echo "-----------<br>";
    function anyArgsNum(...$args){
        echo "Number Of Arguments is :" . count($args) . "<br>";
        echo "The Value Of First Arg is :" . $args[0] . "<br>";
        echo "All Args:<br>";
        print_r ($args);
        $s=0;
        foreach($args as $par){
            $s+=$par;
        }
        echo "Sum=$s <br>";
    }
    anyArgsNum(5,10);
    echo "<br>";
    anyArgsNum(3,9,6,1,7);
    echo "<br>";
    echo "------------------------------<br>";
    
    //Test
    echo "11-Tests <br>";
    echo "===================<br>";
    echo "11-Test -1- <br>";
    echo "+++++++++++++++++<br>";
    function get_data($name, $country, ...$skills){
        echo "Hello $name, Your Country is $country <br>";
        foreach($skills as $skill):
            echo "--$skill<br>";
        endforeach;
        echo "<br>";
    }
    get_data("Belal","Syria","HTML","CSS","BOOTSTRAP","JS","Wordpress");
    
    echo "11-Test -2- <br>";
    echo "+++++++++++++++++<br>";
    //we can send unknown length array as a separated values
    //to a function which receive them as array:
    $mySkills = ["HTML","CSS","BOOTSTRAP","JS","Wordpress","PHP"];
    get_data("Belal","Syria", ...$mySkills);
    echo "<br>";
    get_data("Belal","Syria",...["HTML","CSS","BOOTSTRAP","JS","Wordpress","PHP","MySQL"]);;
    //

    //12-We can receive the array by separated parameters
    echo "(12-1) <br>";
    function arrTopars($a,$b,$c){
        $s=$a+$b+$c;
        echo "Sum=$s <br>";
    }
    $nums=[1,5,9];
    arrTopars(...$nums);//notice: ...
    echo "<br>";
    echo "(12-2) <br>";
    $nums2=[1,5,9,10,25];
    arrTopars(...$nums2);//notice: only 3 elements 
    echo "<br>";

    //13-Defalt value for arguments.
    echo"(13) <br>";
    function div2nums($num1=0,$num2=1){
        return $num1/$num2;
    }
    echo div2nums(5,4)."<br>";//output 1.25
    echo div2nums(7)."<br>";//output 7
    echo div2nums()."<br><br>";//output 0

    //14-If first parameter with default
    //value, and the last one is without:
    echo"(14)<br>";
    function div2nums1($num1=0, $num2){
        return $num1/$num2;
    }
    echo div2nums1(5,4)."<br>";//output 1.25
    echo "div2nums1(7);  //get a fatal error";
    echo "<br><br>";
    
    //15-As C++, the parameter with default
    //value must be at last list:,
    echo"(15)<br>";
    function div2nums2($num1, $num2=1){
        return $num1/$num2;
    }
    echo div2nums2(5,4)."<br>";//output 1.25
    echo div2nums2(5)."<br>";//output 5
    echo "<br>";

     //15-2 Choose the parameter with its default value
     echo"(15-2)<br>";
     function fnWithDefault($name="Belal", $age=50, $country="Syria"){
         echo "Hello $name, Your age is $age, from $country <br>";
     }
     fnWithDefault("Ahmad", 15, "KSA");
     fnWithDefault("Sami", 15);
     fnWithDefault("Ramez");
     fnWithDefault();
     fnWithDefault(country : "Egtpt");
     fnWithDefault(name : "Talal");
?>