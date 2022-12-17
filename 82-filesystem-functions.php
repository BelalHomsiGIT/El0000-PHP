<?php
// Filesystem Functions
// The filesystem functions allow you to access and manipulate the filesystem.
echo " Filesystem Functions <br>";
echo " ********************** <br><br>";
echo "<a href='https://www.w3schools.com/php/php_ref_filesystem.asp'>Filesystem Functions - W3 </a <br><br>";
echo "<a href='https://www.php.net/manual/en/book.filesystem.php'>Filesystem Functions - php.net </a <br><br>";
echo "<br>";
echo "1- disk_total_space() <br>";
echo "--------------------------- <br>";
echo disk_total_space("C:") . " Bytes <br>";
echo disk_total_space("C:") /1024 /1024 /1024 . " GBytes<br>";
echo round(disk_total_space("C:") /1024 /1024 /1024) . " GBytes<br>";
echo "<br>";

echo "2- disk_free_space() <br>";
echo "--------------------------- <br>";
echo round(disk_free_space("C:") /1024 /1024 /1024) . " GBytes<br>";
echo "<br>";

echo "3- file_exists() <br>";
echo "--------------------------- <br>";
var_dump(file_exists("49-functions.php")); // bool(true)
echo "<br>";
echo "<br>";

echo "4- filesize() <br>";
echo "--------------------------- <br>";
echo filesize("49-functions.php") . '<br>';
echo "<br>";
echo "<br>";
//
echo "Test file_exists & filesize -1- <br>";
echo "---------------------------------- <br>";
if(file_exists("53-strings.php")){
    echo filesize("53-strings.php") . '<br>';
}else{
    echo "The file not found." . '<br>';
}
echo "<br>";

echo "Test file_exists & filesize -2- <br>";
echo "---------------------------------- <br>";
if(file_exists("anyfile.php")){
    echo filesize("anyfile.php") . '<br>';
}else{
    echo "The file not found." . '<br>';
}
echo "<br>";

echo "5- is_dir() <br>";
echo "--------------------------- <br>";
echo "is_dir('videos') ==> ";
var_dump(is_dir('videos')); // bool(true)
echo "<br>";
echo "is_dir('12-array1.php') ==> ";
var_dump(is_dir('12-array1.php')); // bool(false)
echo "<br>";
echo "<br>";

// mkdir(path, mode, recursive, context)
echo "6- mkdir() <br>";
echo "--------------------------- <br>";
echo "<a href='https://www.w3schools.com/php/func_filesystem_mkdir.asp'>mkdir() W3 </a <br><br>";
echo "must remove 'Test' folder if it existed.<br> ";
echo "Make Directory 'Test': ";
echo "mkdir('Test') ==> Test folder will be created.";
mkdir('Test');

echo "Make Directory 'MyFiles' IN 'Test': ";
echo "mkdir('Test\MyFiles') ==> 'MyFiles' folder will be created insilde 'Test'.";
mkdir('Test\MyFiles');

echo "Make Directory 'Photos' IN 'MyFiles': ";
echo "mkdir('Test\MyFiles\Photos') ==> 'Photos' folder will be created insilde 'MyFiles'.";
mkdir('Test\MyFiles\Photos');

echo "Make Directory 'Assest\Upload\Photos' by one step: <br> ";
echo "mkdir('Assest\Upload\Photos') ==> 'Assest\Upload\Photos' folder will be created by one step.";
mkdir('Assest\Upload\Photos', 0777, true); // 0777 is the mode
echo "<br>";
echo "<br>";

echo "7- rmdir() <br>";
echo " rmdir(dir, context) <br>";
echo "Remove the Directory if it was EMPTY. <br>";
echo "---------------------------------------- <br>";
echo "Remove Directory the whole 'Test': ";
echo "mkdir('Test') ==> Test folder will be created.";
rmdir('Assest\Upload\Photos');
rmdir('Assest\Upload');
rmdir('Assest');

// video 84 --> chmode() | fileperms() | clearstatcache()
// video 85 -->  Basename() | Dirname() | Realpath() | Pathinfo()
//