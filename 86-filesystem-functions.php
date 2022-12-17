<?php
// Filesystem Functions
// The filesystem functions allow you to access and manipulate the filesystem.
echo " Filesystem Functions <br>";
echo " *********************** <br><br>";
echo "<a href='https://www.w3schools.com/php/php_ref_filesystem.asp'>Filesystem Functions - W3 </a <br><br>";
echo "<a href='https://www.php.net/manual/en/book.filesystem.php'>Filesystem Functions - php.net </a <br><br>";
echo "<br>";

/* fopen(filename, mode, include_path, context)
    filename:	Required. Specifies the file or URL to open.

    mode:	Required. Specifies the type of access you require to the file/stream.
        Possible values:
            "r" - Read only. Starts at the beginning of the file.
            "r+" - Read/Write. Starts at the beginning of the file.
            "w" - Write only. Opens and truncates the file /delete the data/; or creates a new file 
                  if it doesn't exist. Place file pointer at the beginning of the file.
            "w+" - Read/Write. Opens and truncates the file; or creates a new file if it doesn't exist.
                   Place file pointer at the beginning of the file
            "a" - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist.
            "a+" - Read/Write. Preserves file content by writing to the end of the file.
            "x" - Write only. Creates a new file. Returns FALSE and an error if file already exists.
            "x+" - Read/Write. Creates a new file. Returns FALSE and an error if file already exists.
            "c" - Write only. Opens the file; or creates a new file if it doesn't exist.
                  Place file pointer at the beginning of the file
            "c+" - Read/Write. Opens the file; or creates a new file if it doesn't exist.
                   Place file pointer at the beginning of the file
            "e" - Only available in PHP compiled on POSIX.1-2008 conform systems.

    include_path:	  Optional. Set this parameter to '1' if you want to search for the file 
                      in the include_path (in php.ini) as well

    context	Optional: Specifies the context of the file handle. Context is a set of options 
                      that can modify the behavior of a stream
*/
/* Return Value: A file pointer resource on success, FALSE and an error on failure.
You can hide the error by adding an "@" in front of the function name.*/

//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/* fgets(file, length)
    file:	Required. Specifies the open file to return a line from
    length:	Optional. Specifies the number of bytes to read. 
            Reading stops when length-1 bytes have been reached, or when a new line occurs, 
            or on EOF. If no length is specified, it reads until end of the line
*/
// Return Value:	A single line read from the file on success, FALSE on EOF or error

//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/* fread(file, length)
    file:	Required. Specifies the open file to read from
    length:	Required. Specifies the maximum number of bytes to read
*/
// Return Value: The read string, FALSE on failure.

//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/* fclose(filepointer)
    filepointer:	Required. Specifies the file to close */
// Return Value:	TRUE on success, FALSE on failure

//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/* fwrite(file, string, length)
    file:	Required. Specifies the open file to write to
    string:	Required. Specifies the string to write to the open file
    length:	Optional. Specifies the maximum number of bytes to write
*/

//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/* file(filename, flag, context)
    filename:	Required. Specifies the path to the file to read.
        flag:	Optional. Can be one or more of the following constants:
                    FILE_USE_INCLUDE_PATH - Search for the file in the include_path (in php.ini)
                    FILE_IGNORE_NEW_LINES - Skip the newline at the end of each array element
                    FILE_SKIP_EMPTY_LINES - Skip empty lines in the file
    context:	Optional. Specifies the context of the file handle.
                Context is a set of options that can modify the behavior of a stream.
                Can be skipped by using NULL.

*/
//Return Value:	The entire file in an array, FALSE on failure

//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/* feof(file)
file:	Required. Specifies an open file to check
Return Value:	TRUE if EOF is reached or an error occurs, FALSE otherwise.
*/

//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

echo " Filesystem Functions - Working with Files <br>";
echo " ******************************************* <br>";
echo " fopen(filename, mode, include_path, context) <br>";
echo " fgets(file, length) <br>";
echo " fread(file, length) <br>";
echo " fwrite(file, string, length) <br>";
echo " file(filename, flag, context) <br>";
echo " feof(file) <br>";
echo " fclose(filepointer) <br><br>";
echo "<a href='https://www.w3schools.com/php/func_filesystem_fopen.asp'>fopen() Functions - W3 </a <br><br>";
echo "<a href='https://https://www.php.net/manual/en/function.fopen.php'>fopen() Functions - php.net </a <br><br>";
echo "-------------------------------- <br>";

$handle = fopen("28-test.txt", "r"); // for read only
echo fgets($handle); // read the first line only.
fclose($handle);
echo "<br>";
//
$handle = fopen("28-test.txt", "r"); // for read only
echo fgets($handle, 3); // read the first 3 bytes only.
fclose($handle);
echo "<br>";
//
$handle = fopen("28-test.txt", "r"); // for read only
echo fread($handle, 1000); // read the first 3 bytes only.
fclose($handle);
echo "<br>";
//
$handle = fopen("28-test.txt", "a");
fwrite($handle, " - New Text by fwrite()");
fclose($handle);

$handle = fopen("28-test.txt", "a");
fwrite($handle, "\r\nNew Text in new line."); // with new line.
fclose($handle);
echo "<br>";
$handle = fopen("28-test.txt", "r"); // for read only
echo fread($handle, 1000); // read the first 3 bytes only.
fclose($handle);
echo "<br>";
//
echo 'print_r(file("28-test.txt")) ==>';
echo"<pre>";
print_r(file("28-test.txt"));
echo"</pre>";
echo "<br>";
echo 'count(file("28-test.txt")) ==> ';
echo count(file("28-test.txt"));
echo "<br>";

//read the file line by line using the while
echo "//////////////////////////////////////////// By WHILE LOOP <br>";
$handle = fopen("28-test.txt", "r");
while (! feof($handle)){
    echo fgets($handle) . "<br>";
}
fclose($handle);
echo "//////////////////////////////////////////// <br>";
//
//read the file line by line using the for
echo "//////////////////////////////////////////// By FOR LOOP <br>";
$handle = fopen("28-test.txt", "r");
for ($i=0; $i<count(file("28-test.txt")); $i++){
    echo fgets($handle) . "<br>";
}
fclose($handle);




