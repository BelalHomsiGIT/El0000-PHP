<?php
$a = 25;
$b = $a;
echo $b;
echo "<br>";

// if the variable x is not declared, we get error:
    //    $y = $x;
    //    echo $y;
// error message:
// Warning: Undefined variable $x in D:\xampp\htdocs\ElZero-PHP\28-error-control.php on line 7
       
// we can control in error and the message, using the @ operator
    $y = @$x; // we did'nt get error message
    echo $y;

// we can use: @ or die, to control the message:
    $y = @$x or die("The vaiable not found !!!");
    echo $y; // we get: The vaiable not found !!!


