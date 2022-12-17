<?php
    echo "Ternary Operator <br>";
    echo "<a href='https://www.phptutorial.net/php-tutorial/php-ternary-operator/'>Ternary Operator1</a> <br>";
    echo "<a href='https://www.w3schools.in/php/operators/ternary-operator'>Ternary Operator2</a> <br>";
    echo "=================== <br>";
    echo "I love PHP it's A Good Language";
    echo "<br>";
    //
    $a = 7;
    echo "I love PHP it's A ";
    if($a<10){
        echo "Good";
    }else{
        echo "Bad";
    }
    echo " Language..";
    echo "<br>";
    //
    echo "I love PHP it's A ";
    echo $a<10 ? "Good" : "Bad";
    echo " Language...";
    echo "<br>";
    //
    $result = $a<10 ? "Good" : "Bad";
    echo "I love PHP it's A" . ($a<10 ? "Good" : "Bad") . " Language....";
    echo "<br>";
    //
    $result = $a<10 ? "Good" : "Bad";
    echo "I love PHP it's A $result Language.....";
    echo "<br>";
    echo "<br>";

    // Ternary shorthand
    // expression1 ?: expression2
    // (Condition)?(Statement1)?(Statement2);
    echo "Ternary Shorthand <br>";
    echo "<a href='https://www.codementor.io/@sayantinideb/ternary-operator-in-php-how-to-use-the-php-ternary-operator-x0ubd3po6'>Ternary shorthand</a> <br>";
    echo "=================== <br>";
    echo "expression1 ?: expression2 <br>";
    echo "---------------------------- <br>";
    $test = NULL;
    // $res = isset($test) ? $test : "No X Variable" 
    $res = $test ?: "No X Variable";
    echo $res . "<br>";
    
    $test = 15;
    $res = $test ?: "No X Variable";
    echo $res . "<br>";

    echo "(Condition)?(Statement1)?(Statement2); <br>";
    echo "------------------------------------- <br>";
    $test = NULL;
    // $res = isset($test) ? $test : "No X Variable" 
    $res = $test ?? "No X Variable";
    echo $res . "<br>";
    
    $test = 15;
    $res = $test ?? "No X Variable";
    echo $res . "<br>";



?>