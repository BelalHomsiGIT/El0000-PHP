<?php
include("28-test.txt");
echo"<br>";
// the file opened and written...

// if the file not exist:
    //include("28-ttttttt.txt");
//we get:
/*
Warning: include(28-ttttttt.txt): Failed to open stream: No such file or directory in D:\xampp\htdocs\ElZero-PHP\28-error-control3.php on line 6

Warning: include(): Failed opening '28-ttttttt.txt' for inclusion (include_path='D:\xampp\php\PEAR') in D:\xampp\htdocs\ElZero-PHP\28-error-control3.php on line 6
*/
// the control in include():
@(include("28-ttttttt.txt")) or die("The file not found !!!");

