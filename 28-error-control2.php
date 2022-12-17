<?php
// Files
// we can catch any file and save it as array:
$f = file("28-test.txt");
print_r($f);

echo"<pre>";
print_r($f);
echo"</pre>";

/*
// if the file not exist we get error:
$f = file("28-story.txt"); // Warning: file(28-story.txt): Failed to open stream: No such file or directory in D:\xampp\htdocs\ElZero-PHP\28-error-control2.php on line 12
print_r($f);
*/

//we can control in the error by the same way:
$f = @file("28-story.txt") or die("The file not exist!!!");
print_r($f);
