<?php
/* glob(pattern, flags)
    pattern:	Required. Specifies the pattern to search for
    flags:	Optional. Specifies special settings.
      Possible values:
            GLOB_MARK - Adds a slash to each item returned
            GLOB_NOSORT - Return files as they appear in the directory (unsorted)
            GLOB_NOCHECK - Returns the search pattern if no match were found
            GLOB_NOESCAPE - Backslashes do not quote metacharacters
            GLOB_BRACE - Expands {a,b,c} to match 'a', 'b', or 'c'
            GLOB_ONLYDIR - Return only directories which match the pattern
            GLOB_ERR - (added in PHP 5.1) Stop on errors (errors are ignored by default)
    Return Value:	An array of files/directories that matches the pattern, FALSE on failure
*/
echo "glob(pattern, flags) - Return an array of filenames or directories that matches the specified pattern <br>";
echo "------------------------------------------------------------------------------------------------------------------------<br>";
echo "<a href='https://www.w3schools.com/php/func_filesystem_glob.asp'> glob() W3 </a> <br>";
echo "<a href='https://www.php.net/manual/en/function.glob.php'> glob() php.net </a> <br><br>";

echo "ِAll files in current directory.";
echo "<pre>";
print_r(glob('*.*'));

echo "ِAll 'txt' files in current directory.";
echo "</pre>";
echo "<pre>";
print_r(glob('*.txt'));
echo "</pre>";

echo "ِAll files in current 'test-ren-copy-del'.";
echo "<pre>";
print_r(glob('test-ren-copy-del\*.*'));
echo "</pre>";
echo "ِAll 'txt' files in current 'test-ren-copy-del'.";
echo "<pre>";
print_r(glob('test-ren-copy-del\*.txt'));
echo "</pre>";
//

/* rename(old, new, context) - renames a file or directory.
    old:	Required. Specifies the file or directory to be renamed
    new:	Required. Specifies the new name for the file or directory
    context:	Optional. Specifies the context of the file handle.
    Context is a set of options that can modify the behavior of a stream

  Return Value:	TRUE on success, FALSE on failure
*/
echo "rename(old, new, context) - renames a file or directory. <br>";
echo "----------------------------------------------------------------<br>";
echo "<a href='https://www.w3schools.com/php/func_filesystem_rename.asp'> rename() W3 </a> <br>";
echo "<a href='https://www.php.net/manual/en/function.rename.php'> rename() php.net </a> <br><br>";

echo "ِAll 'txt' files in current directory.";
echo "<pre>";
print_r(glob('*.txt'));
echo "</pre>";

// rename in the same place
rename('Test.txt', 'mytest.txt');
echo "<pre>";
print_r(glob('*.txt'));
echo "</pre>";

// rename and move to another place. 'rename & cut & copy '
rename('mytest.txt', 'MyFiles/Testing.txt');
echo "<pre>";
print_r(glob('MyFiles/*.txt'));
echo "</pre>";

// move to another place. ' cut & copy | move '
rename('MyFiles/cv.docx', 'cv.docx');
echo "<pre>";
print_r(glob('MyFiles/*.txt'));
echo "</pre>";
//
/* copy(from_file, to_file, context) - The copy() function copies a file.
from_file:	Required. Specifies the path to the file to copy from
to_file:	Required. Specifies the path to the file to copy to
context:	Optional. Specifies a context resource created with stream_context_create()

--Note: If the to_file file already exists, it will be overwritten.
Return Value:	TRUE on success, FALSE on failure
*/
echo "copy(from_file, to_file, context) - copies a file. <br>";
echo "- If the to_file file already exists, it will be overwritten. <br>";
echo "----------------------------------------------------------------<br>";
echo "<a href='https://www.w3schools.com/php/func_filesystem_copy.asp'> copy() W3 </a> <br><br>";
// echo "<a href='https://www.php.net/manual/en/function.rename.php'> rename() php.net </a> <br><br>";
copy("cv.docx", "MyFiles/cv.docx"); // same name
copy("MyFiles/sum.xlsx", "s.xlsx"); // another name
//

/* unlink(filename, context) - delete
  filename"	Required. Specifies the path to the file to delete
  context"	Optional. Specifies the context of the file handle.
     Context is a set of options that can modify the behavior of a stream.
*/
unlink("test-ren-copy-del/1.txt");

// opendir(path, context) - The opendir() function opens a directory handle.
// readdir(dir) - The readdir() function returns the name of the next entry in a directory.
// closedir(dir) - The closedir() function closes a directory handle.
/*
  $dir = "/images/";
// Open a directory, and read its contents
    if (is_dir($dir)){
      if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
          echo "filename:" . $file . "<br>";
        }
        closedir($dh);
      }
    }
  */