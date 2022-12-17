<?php
// opendir(path, context) - The opendir() function opens a directory handle.
// readdir(dir) - The readdir() function returns the name of the next entry in a directory.
// closedir(dir) - The closedir() function closes a directory handle.

  $dir = "test-ren-copy-del";
// Open a directory, and read its contents
    if (is_dir($dir)){
      if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
          echo "filename:" . $file . "<br>";
        }
        closedir($dh);
      }
    }
  