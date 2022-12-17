<?php
// Array Functions
    echo "Array Functions -3- <br>";
    echo "*******************<br>";
    echo "<a href='https://www.w3schools.com/Php/php_ref_array.asp' >W3School Araay Functions </a>";
    echo "<br>";
    echo "<a href='https://www.php.net/manual/en/function.array-change-key-case.php' >php.net-manual-en-array functions </a>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

                                //array_shift(Array)
                                //array_pop(Array)
                                //array_unshift(Array, v1, ...)
                                //array_push(Array, v1, ....)

    function printArr($arr){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
    $myChar = ["A", "B", "C", "D", "E"];
    $mySkills = ["a" => "Algoritjm", "h" => "HTML", "c" => "CSS", "j" => "JS", "p" => "PHP"];

    // Removing Element:
    // shift(): first.
    // pop() : last.

    /* array_shift(Array)
        - Shift An Element Off The Beginning Of Array - Remove the first element
        - We Can Catch The Removed Element by Variable
        -make reset for array - the internal array pointer - reset()
        - reindexing the key if the array don't have keys.
    */
    echo "array_shift <br>";
    echo "-------------------";
    printArr($myChar);
    $firstRemoved = array_shift($myChar);
    echo "firstRemoved = $firstRemoved" .  "<br>";
    echo "After array_shift(myChar) ==>";
    printArr($myChar);
    
    printArr($mySkills);
    $firstRemoved = array_shift($mySkills);
    echo "firstRemoved = $firstRemoved" .  "<br>";
    echo "After array_shift(myChar) ==>";
    printArr($mySkills);

    /* array_pop(Array)
      - Pop An Element Off The End Of Array - Remove the last element */
    echo "array_pop <br>";
    echo "-------------------";
    printArr($myChar);
    $lastRemoved = array_pop($myChar);
    echo "lastRemoved = $lastRemoved" .  "<br>";
    echo "After array_pop(myChar) ==>";
    printArr($myChar);
    
    printArr($mySkills);
    $lastRemoved = array_pop($mySkills);
    echo "lastRemoved = $lastRemoved" .  "<br>";
    echo "After array_pop(myChar) ==>";
    printArr($mySkills);

    //Adding Element(s)
    /* array_unshift(Array)
      - Add  One or More Elements in The Beginning Of Array */
    echo "array_unshift <br>";
    echo "-------------------";
    printArr($myChar);
    array_unshift($myChar, "F", "R");
    echo "After array_unshift(myChar, 'F', 'R') ==>";
    printArr($myChar);
    
    printArr($mySkills);
    $lastRemoved = array_unshift($mySkills, "Pascal");
    echo "After array_unshift(mySkills, 'Pascal') ==>";
    printArr($mySkills);
    
    /* array_push(Array)
      - Push One or More Elements In The End Of Array */
      echo "array_push <br>";
      echo "-------------------";
      printArr($myChar);
      $newLength = array_push($myChar, "X");
      echo 'After array_push(myChar, "X") ==>';
      printArr($myChar);
      echo "newLength = $newLength" .  "<br>";
      //Adding many elements:
      array_push($myChar, "Y", "Z");
      echo 'After array_push(myChar, "Y", "Z") ==>';
      printArr($myChar);
      
      printArr($mySkills);
      array_push($mySkills, "BOOTSTRAP", "Laravel");
      echo "After array_push(myChar) ==>";
      printArr($mySkills);
      
      //Note: To ADDING only one element to the last we easily use:
      // arr[] = value;
      echo "To ADDING only one element to the last we easily use: arr[] = value; <br>";
      echo '$myChar[] = "M"; <br>';
      $myChar[] = "M";
      printArr($myChar);
