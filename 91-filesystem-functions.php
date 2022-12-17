<?php
echo "<pre>";
print_r(file("28-test.txt"));
echo "</pre>";

/* file_get_contents(path, include_path, context, start, max_length)
  --The file_get_contents() reads a file into a string.
    path:	Required. Specifies the path to the file to read
    include_path:	Optional. Set this parameter to '1' if you want to search 
                    for the file in the include_path (in php.ini) as well
    context:	Optional. Specifies the context of the file handle.
                Context is a set of options that can modify the behavior of a stream.
                Can be skipped by using NULL.
    start:	Optional. Specifies where in the file to start reading.
            Negative values count from the end of the file
    max_length:	Optional. Specifies the maximum length of data read. Default is read to EOF
*/
echo '1- file_get_contents("28-test.txt") => <br>';
echo file_get_contents("28-test.txt");
echo "<br>";
echo "<br>";
// to know what is the path (directory), which search inside in when the given path not found:
echo '2- get_include_path() => ';
echo get_include_path(); // D:\xampp\php\PEAR
echo "<br>";
echo "<br>";
//we use it as second parameter "optional" in file_get_contents() to find the file.
//we set it as "1" or True
//I create file "tt.text" in "D:\xampp\php\PEAR":
echo '3- file_get_contents("tt.txt", true) => <br>';
echo file_get_contents("tt.txt", true);
echo "<br>";
echo "<br>";
echo '4- file_get_contents("28-test.txt",true, null, 14) => <br>';
echo file_get_contents("28-test.txt",true, null, 14); // start with 14th character
echo "<br>";
echo "<br>";
//we can specify the start and the length for get:
echo '5- file_get_contents("28-test.txt",true, null, 14, 5) => <br>';
echo file_get_contents("28-test.txt",true, null, 14, 5); // start with 14th character, length 5
echo "<br>";
echo "<br>";

//Test in web-page file:
// echo '1- file_get_contents("https://www.w3schools.com/php/func_filesystem_file_get_contents.asp") => <br>';
// echo file_get_contents("https://www.w3schools.com/php/func_filesystem_file_get_contents.asp");
// echo "<br>";
// echo "<br>";

// file_put_contents(filename, data, mode, context)
// it delete all content and write the new, if the file not existed, create one.
// Return Value: The number of bytes written into the file on success, FALSE on failure.
echo '$charLength = file_put_contents("bb.txt", "Hello file_put_contents") <br>';
$charLength = file_put_contents("bb.txt", "Hello file_put_contents");
echo '$charLength ==> ';
echo $charLength;
echo "<br>";

echo '$charLength = file_put_contents("cc.txt", "Hello file_put_contents" ,FILE_APPEND) <br>';
$charLength = file_put_contents("cc.txt", "Hello file_put_contents" ,FILE_APPEND);
echo '$charLength ==> ';
echo $charLength;
echo "<br>";
