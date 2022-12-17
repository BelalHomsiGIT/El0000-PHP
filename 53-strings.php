<?php
    // Access and Update
    echo "1-Access <br>";
    echo "**********<br>";
    
    $myStr1 = "HOMSI";
    //we treat the sting value as array
    echo $myStr1[0]; // H -The first Character
    echo "<br>";
    echo $myStr1[2]; // M -The 3rd Character
    echo "<br>";
    echo strlen($myStr1); // 5 -The length
    echo "<br>";
    echo $myStr1[strlen($myStr1) - 1]; // I - The Last Character
    echo "<br>";
    //or
    echo $myStr1[-1]; // I - The Last Character
    echo "<br>";
    echo $myStr1[-2]; // S - The Prev Last Character
    echo "<br>";
    echo "2-Update <br>";
    echo "**********<br>";
    //Update the data in String, by INDEX
    $myStr1[0] = 'T';
    echo $myStr1;
    echo "<br>";
    //if we use a wrong index, as 6, then it added to end:
    $myStr1[6] = 'T';
    echo $myStr1;echo "<br>";
    $myStr1[6] = 'T';
    echo $myStr1;
    echo "<br>";
    echo "------------------------------<br>";
    echo "<br>";
    
    //Built-in String Functions <br>
    echo "3-Some Built-in String Functions <br>";
    echo "*********************************<br>";
    echo "<a href='https://www.w3schools.com/php/php_ref_string.asp'>w3schools.com/php/php_ref_string</a>";
    echo "<br>";
    echo "<a href='https://www.php.net/manual/en/ref.strings.php'>php.net/manual/en/ref.strings</a>";
    echo "<br>";
    echo "<br>";

    $myStr2 = "Belal Homsi";
    echo $myStr2 . "<br>";
    echo "=========<br>";

    //lcfirst - convert first character to lowercase:
    echo "1- lcfirst - convert first character to lowercase: <br>";
    echo "------------------------------------------------------<br>";
    echo lcfirst($myStr2) . "<br><br>";
    //ucfirst - convert first character to uppercase:
    echo "2- ucfirst - convert first character to uppercase: <br>";
    echo "------------------------------------------------------<br>";
    echo ucfirst($myStr2) . "<br><br>";
    //strtolower - convert all string to lowercase:
    echo "3- strtolower - convert all string to lowercase: <br>";
    echo "------------------------------------------------------<br>";
    echo strtolower($myStr2) . "<br><br>";
    //strtoupper - convert all string to uppercase:
    echo "4- strtoupper - convert all string to uppercase: <br>";
    echo "------------------------------------------------------<br>";
    echo strtoupper($myStr2) . "<br><br>";
    //ucwords - convert all first word string to uppercase:
    echo "5- ucwords - convert all first word string to uppercase: <br>";
    echo "------------------------------------------------------<br>";
    echo ucwords("belal homsi php") . "<br>";
    echo ucwords("belal homsi-php", "-") . "<br>";
    echo ucwords("belal*hom*si*php", "*") . "<br>";
    echo ucwords("belal*homsi*php", "*") . "<br><br>";
    //str_repeat to repeat the string:
    echo "6- str_repeat , repeat the string: <br>";
    echo "-----------------------------------<br>";
    echo str_repeat("PHP", 4);
    echo "<br>";
    echo str_repeat("PHP ", 4);
    echo "<br><br>";
    //The implode() function returns a string from the elements of an array.
    //Convert Array to String
    echo "7- implode() returns a string from the elements of an array. Convert Array to String.<br>";
    echo "--------------------------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/php/func_string_implode.asp'>func_string_implode</a>";
    echo "<br>";
    $nnames = ["Ahmad", "Ali", "Kareem", "Feras"];
    echo implode("", $nnames) . "<br>";
    echo implode(" ", $nnames) . "<br>";
    echo implode(" - ", $nnames) . "<br>";
    echo implode(", ", $nnames) . "<br>";
    echo implode(" / ", $nnames) . "<br><br>";
    //The explode() function breaks a string into an array.
    //Convert String to Array:
    echo "8- The explode() function breaks a string into an array.Convert String to Array.<br>";
    echo "--------------------------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/php/func_string_explode.asp'>func_string_explode</a>";
    echo "<br>";
    $myStr3 = "Hello PHP Prog Language";
    echo "MyString : $myStr3 <br>";
    echo "=============================<br>";
    
    echo '1- explode(" ", $myStr3)';
    echo "<pre>";
    print_r(explode(" ", $myStr3));
    echo "</pre>";
    
    echo '2- explode("P", $myStr3)';
    echo "<pre>";
    print_r(explode("P", $myStr3));
    echo "</pre>";
    
    $myStr4 = "Hello|PHP|Prog|Language";
    echo "MyString : $myStr4 <br>";
    echo "=============================<br>";
    
    echo '3- explode("|", $myStr4)';
    echo "<pre>";
    print_r(explode("|", $myStr4));
    echo "</pre>";
    
    echo '4- explode("|", $myStr4, 0)';
    echo "<pre>";
    print_r(explode("|", $myStr4, 0));
    echo "</pre>";
    
    echo '5- explode("|", $myStr4, 1)';
    echo "<pre>";
    print_r(explode("|", $myStr4, 1));
    echo "</pre>";
    
    echo '6- explode("|", $myStr4, 2)';
    echo "<pre>";
    print_r(explode("|", $myStr4, 2));
    echo "</pre>";
    
    echo '7- explode("|", $myStr4, 3)';
    echo "<pre>";
    print_r(explode("|", $myStr4, 3));
    echo "</pre>";
    
    echo '8- explode("|", $myStr4, -2)';
    echo "<pre>";
    print_r(explode("|", $myStr4, -2));
    echo "</pre>";
    echo "<br>";
    
    //The str_shuffle() function randomly shuffles all the characters of a string.
    // Reorder the characters in string randomly.
    echo "9- str_shuffle() function randomly shuffles all the characters of a string.<br>";
    echo "Reorder the characters in string randomly.<br>";
    echo "--------------------------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/php/func_string_str_shuffle.asp'>func_string_str_shuffle.asp</a>";
    echo "<br>";
    $myStr5 = "Belal Homsi";
    echo $myStr5 . "<br>";
    echo "===========<br>";
    
    echo "str_shuffle($myStr5) . <br>";
    echo str_shuffle($myStr5) . "<br>";
    echo "<br>";
    
    //The strrev() function reverses a string.
    echo "10- The strrev() function reverses a string.<br>";
    echo "-----------------------------------------------------<br>";

    echo "<a href='https://www.w3schools.com/php/func_string_strrev.asp'>func_string_strrev</a>";
    echo "<br>";
    echo $myStr5 . "<br>";
    echo "===========<br>";
    echo "strrev($myStr5) <br>";
    echo strrev($myStr5);
    echo "<br>";
    echo "<br>";
    
    /*
    The trim() function removes whitespace and other predefined characters from both sides of a string.
    Related functions:
    ltrim() - Removes whitespace or other predefined characters from the left side of a string
    rtrim() - Removes whitespace or other predefined characters from the right side of a string
    */
    echo "11- trim() function removes whitespace and other predefined characters from both sides of a string.<br>";
    echo "------------------------------------------------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/php/func_string_strrev.asp'>func_string_strrev</a>";
    echo "<br>";
    //trim space character
    $myStr6 = "  Hello   ";
    echo $myStr6 . "<br>";;
    echo $myStr6 . "Bye" . "<br>";
    echo strlen($myStr6) . "<br>";
    echo "--use trim() :<br>";
    echo trim($myStr6) . "<br>";
    echo trim($myStr6) .  "Bye" . "<br>";
    echo strlen(trim($myStr6)) . "<br>";
    //trim another charactr
    echo "##PHP#" . "<br>";
    echo 'trim("##PHP#", "#") ====>';
    echo trim("##PHP#", '#') . "<br>";
    echo 'trim("##PH#P#", "#") ====>';
    echo trim("##PH#P#", '#') . "<br>";
    echo "<br>";
    
    //The chunk_split() function splits a string into a series of smaller parts.
    //Note: This function does not alter the original string.
    echo "12- chunk_split() function splits a string into a series of smaller parts.<br>";
    echo "Note: This function does not alter the original string.<br>";
    echo "----------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/php/func_string_chunk_split.asp'>func_string_chunk_split</a>";
    echo "<br>";
    echo 'chunk_split("Hello PHP Lang", 4, "*") ====>';
    echo chunk_split("Hello PHP Lang", 4, "*") . "<br>";
    echo 'chunk_split("Hello PHP Lang", 4, "\r") ====>';
    echo chunk_split("Hello PHP Lang", 4, "\r") . "<br>";
    echo chunk_split("Hello PHP Lang", 3, "<br>") . "<br>";
    echo "<br>";
    
    //The str_split() function splits a string into an array.
    echo "13-  str_split() function splits a string into an array.<br>";
    echo "------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/php/func_string_str_split.asp'>func_string_str_split</a>";
    echo "<br>";
    
    echo 'str_split("Belal") <br>';
    echo "<pre>";
    print_r(str_split("Belal"));
    echo "</pre>";
    
    echo 'str_split("Belal", 2) <br>';
    echo "<br>";
    echo "<pre>";
    print_r(str_split("Belal", 2));
    echo "</pre>";
    echo"<br>";
    
    //The strip_tags() function strips a string from HTML, XML, and PHP tags.
    //Note: HTML comments are always stripped. This cannot be changed with the allow parameter.
    //Note: This function is binary-safe.
    echo "14- strip_tags() function strips a string from HTML, XML, and PHP tags. <br>";
    echo "-----------------------------------------------------------------------------<br>";
    
    echo "&lth2&gtHeloo H2 tag, &lti&gt Taaag&lt/i&gt&lt/h2&gt ====>";
    echo "<h2>Heloo H2 tag, <i> Taaag</i></h2>";
    
    echo "strip_tags(&lth2&gtHeloo H2 tag, &lti&gt Taaag&lt/i&gt&lt/h2&gt) ====>";
    echo"<br>";
    echo strip_tags("<h2>Heloo H2 tag, <i> Taaag</i></h2>");
    echo"<br>";
    echo"<br>";
    echo "strip_tags(&lth2&gtHeloo H2 tag, &lti&gt Taaag&lt/i&gt&lt/h2&gt, &lti&gt) ====>";
    echo"<br>";
    echo strip_tags("<h2>Heloo H2 tag, <i> Taaag</i></h2>", "<i>");
    echo"<br>";
    echo"<br>";
    
    // nl2br
    echo "15- nl2br <br>";
    echo "-------------<br>";
    echo "Belal\nHomsi\nEnd";
    echo"<br>";
    echo nl2br("Belal\nHomsi\nEnd");
    echo"<br>";
    echo"<br>";
    
    echo "16- strpos() function finds the position of the first occurrence of a string inside another string. <br>";
    echo "--------------------------------------------------------------------------------------------------<br>";
    // The strpos() function finds the position of the first occurrence of a string inside another string.
    //Note: The strpos() function is case-sensitive.
    //Note: This function is binary-safe.
    echo "<a href='https://www.w3schools.com/php/func_string_strpos.asp'>func_string_strpos</a>";
    echo "<br>";
    echo "<br>";

    echo 'strpos("Hello PHP Hello", "H") ===> ';
    echo strpos("Hello PHP Hello", "H"); // 0
    echo "<br>";

    echo 'strpos("Hello PHP Hello", "o") ===> ';
    echo strpos("Hello PHP Hello", "o"); // 4
    echo "<br>";

    echo 'var_dump(strpos("Hello PHP Hello", "o")) ===>';
    echo var_dump(strpos("Hello PHP Hello", "o")); // int(4)
    echo "<br>";

    echo 'strpos("Hello PHP Hello", "h", 4) ===>';
    echo strpos("Hello PHP Hello", "h"); // nothing
    echo "<br>";

    echo 'var_dump(strpos("Hello PHP Hello", "h")) ===>';
    echo var_dump(strpos("Hello PHP Hello", "h")); // bool(false)
    echo "<br>";

    echo 'strpos("Hello PHP Hello", "l", -4) ===> ';
    echo strpos("Hello PHP Hello", "l", -4); // 12
    echo "<br>";
    echo "<br>";

    //The strrpos() function finds the position of the last occurrence of a string inside another string.
    //Note: The strrpos() function is case-sensitive.
    echo "17- strrpos() function finds the position of the last occurrence of a string inside another string. <br>";
    echo "--------------------------------------------------------------------------------------------------------<br>";
    echo strrpos("Hello PHP Hello", "H"); // 10
    echo "<br>";
    echo var_dump(strrpos("Hello PHP Hello", "H")); // int(10)
    echo "<br>";
    echo strrpos("Hello PHP Hello", "l", 4); // 13
    echo "<br>";
    echo strrpos("Hello PHP Hello", "h"); // nothing
    echo "<br>";
    echo var_dump(strpos("Hello PHP Hello", "h")); // bool(false)
    echo "<br>";
    echo strrpos("Hello PHP Hello", "l", -4); // 12
    echo "<br>";
    echo "<br>";
    //stripos() - strripos() functions are case-insensitive.
    echo "18- stripos() - strripos() functions are case-insensitive. <br>";
    echo "-----------------------------------------------------------------<br>";
    echo 'stripos("Hello-h", "h") ===> ';
    echo stripos("Hello-h", "h"); // 0
    echo "<br>";
    echo 'strripos("Hello-h", "h") ===> ';
    echo strripos("Hello-h", "h"); // 6
    echo "<br>";
    echo "<br>";

    //The substr() function returns a part of a string.
    /* Syntax: substr(string,start,length)
                string:	Required. Specifies the string to return a part of
                start:	Required. Specifies where to start in the string:
                        -A positive number - Start at a specified position in the string
                        -A negative number - Start at a specified position from the end of the string
                        -0 Start at the first character in string
                length:	Optional. Specifies the length of the returned string. Default is to the end of the string.
                        -A positive number - The length to be returned from the start parameter
                        -Negative number - The length to be returned from the end of the string
                        -If the length parameter is 0, NULL, or FALSE - it return an empty string
    */
    echo "00- The substr() function returns a part of a string. <br>";
    echo "<a href='https://www.w3schools.com/php/func_string_substr.asp'>func_string_substr</a>";
    echo "<br>";
    echo substr("Hello world",6)."<br>";    // world
    echo substr("Hello world",10)."<br>";   // d
    echo substr("Hello world",1)."<br>";    // ello world
    echo substr("Hello world",3)."<br>";    // lo world
    echo substr("Hello world",7)."<br>";    // orld

    echo substr("Hello world",-1)."<br>";   // d
    echo substr("Hello world",-10)."<br>";  //ello world
    echo substr("Hello world",-8)."<br>";   // lo world
    echo substr("Hello world",-4)."<br>";   // orld

    // Positive numbers:
    echo substr("Hello world",0,10)."<br>"; // Hello worl
    echo substr("Hello world",1,8)."<br>";  // ello wor
    echo substr("Hello world",0,5)."<br>";  // Hello
    echo substr("Hello world",6,6)."<br>";  // world
    echo "<br>";
    // Negative numbers:
    echo substr("Hello world",0,-1)."<br>"; // Hello worl
    echo substr("Hello world",-10,-2)."<br>";   // ello wor
    echo substr("Hello world",0,-6)."<br>"; // Hello
    echo "<br>";
    
    //The substr_count() function counts the number of times a substring occurs in a string.
    //Note: The substring is case-sensitive.
    //Note: This function does not count overlapped substrings (see example 2).
    //Note: This function generates a warning if the start parameter plus the length parameter is greater than the string length (see example 3).
    echo "19- substr_count() function counts the number of times a substring occurs in a string. <br>";
    echo "------------------------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/Php/func_string_substr_count.asp'>func_string_substr_count</a>";
    echo "<br>";
    echo 'substr_count("Belal Belal", "Be") ===>';
    echo substr_count("Belal Belal", "Be"); // 2
    echo "<br>";
    echo "<br>";
    echo "3 is start position:<br>";
    echo 'substr_count("Belal Belal", "Be", 3) ===>';
    echo substr_count("Belal Belal", "Be", 3); // 1
    echo "<br>";
    echo "<br>";
    
    // 2 is start position, 3 is the length, so the search in 'lal B' :
    echo "2 is start position, 3 is the length, so the search in 'lal B' : <br>";
    echo 'substr_count("Belal Belal", "Be", 2, 5) ===> ';
    echo substr_count("Belal Belal", "Be", 2, 5); // 0
    echo "<br>";
    echo "<br>";
    
    // 2 is start position, 6 is the length, so the search in 'lal Be' :
    echo "2 is start position, 6 is the length, so the search in 'lal Be' :<br>";
    echo 'substr_count("Belal Belal", "Be", 2, 6) ===> ';
    echo substr_count("Belal Belal", "Be", 2, 6); // 1
    echo "<br>";
    echo 'substr_count("Belal Belal", "Be", 3 ,2) ===> ';
    echo substr_count("Belal Belal", "Be", 3 ,2); // 0
    echo "<br>";
    echo "<br>";
    
    //parse_str() is for get the values from the URL when it send by GET, and store it in array
    //example- in URL: name=Belal&email=belalocp72@gmail.com&age=50, so we can get the values:
    // parse_str("name=Belal&email=belalocp72@gmail.com&age=50", $myArrData);
    //Parses string as if it were the query string passed via a URL and sets variables in the current scope (or in the array if result is provided).
    echo "20- parse_str() is for get the values from the URL when it send by GET, and store it in array. <br>";
    echo "--------------------------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.php.net/manual/en/function.parse-str.php'>function.parse-str</a>";
    echo "<br>";
    $myURLData = "name=Belal&email=belalocp72@gmail.com&age=50";
    echo $myURLData . "<br>";
    echo "parse_str(myURLData ,myArrData);<br> ";
    parse_str($myURLData ,$myArrData);
    echo "myArrData ===>";
    echo "<pre>";
    print_r($myArrData);
    echo "</pre>";
    echo "<br>";
    
    //The str_pad() function pads a string to a new length.
    /* str_pad(string, length, pad_string, pad_type)
        -string:     Required. Specifies the string to pad
        -length:     Required. Specifies the new string length. If this value is less than the original length of the string, nothing will be done
        -pad_string: Optional. Specifies the string to use for padding. Default is whitespace
        -pad_type:   Optional. Specifies what side to pad the string.
            --Possible values:
            STR_PAD_BOTH - Pad to both sides of the string. If not an even number, the right side gets the extra padding
            STR_PAD_LEFT - Pad to the left side of the string
            STR_PAD_RIGHT - Pad to the right side of the string. This is default
    */
    echo "21- str_pad() function pads a string to a new length // str_pad(string, length, pad_string, pad_type) <br>";
    echo "-----------------------------------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/php/func_string_str_pad.asp'>func_string_str_pad</a>";
    echo "<br>";
    echo str_pad("12",6); // 12 ???
    echo "<br>";
    echo strlen(str_pad("12",6)); // 6
    echo "<br>";
    echo str_pad("12",6,0); // 120000
    echo "<br>";
    echo strlen(str_pad("12",6,0)); // 6
    echo "<br>";
    echo str_pad("12",6,0,STR_PAD_BOTH); // 001200
    echo "<br>";
    echo str_pad("123",6,0,STR_PAD_BOTH); // 012300
    echo "<br>";
    echo str_pad("123",6,0,STR_PAD_RIGHT); // 123000
    echo "<br>";
    echo str_pad("123",6,0,STR_PAD_LEFT); // 000123
    echo "<br>";
    echo str_pad("123",6,'*',STR_PAD_LEFT); // ***123
    echo "<br>";
    echo "<br>";
    
    //The strtr() function translates certain characters in a string.
    //Note: If the from and to parameters are different in length, both will be formatted to the length of the shortest.
    /* strtr(string,from,to)
    string:	Required. Specifies the string to translate
    from:   Required (unless array is used). Specifies what characters to change
    to:     Required (unless array is used). Specifies what characters to change into
    array:  Required (unless to and from is used). An array containing what to change from as key, and what to change to as value
    */
    echo "22- strtr() function translates certain characters in a string.<br>";
    echo "--------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/php/func_string_strtr.asp'>func_string_strtr</a>";
    echo "<br>";
    echo "Be?a? Hom#i"; // Be?a? Hom#i
    echo "<br>";
    echo strtr("Be?a? Hom#i", "?", "l"); // Belal Hom#i
    echo "<br>";
    $myTrans = ["?" => "l", "#" => "s"];
    echo strtr("Be?a? Hom#i", $myTrans); // Belal Homsi
    echo "<br>";
    echo "<br>";
    
    //The str_replace() function replaces some characters with some other characters in a string.
    /* str_replace(find, replace, string, count)
        find:    Required. Specifies the value to find
        replace: Required. Specifies the value to replace the value in find
        string:  Required. Specifies the string to be searched
        count:   Optional. A variable that counts the number of replacements
    */
    echo "<a href='https://www.w3schools.com/php/func_string_str_replace.asp'>func_string_str_replace</a>";
    echo "<br>";
    echo  "Be?a? Hom#i"; // Be?a? Hom#i
    echo "<br>";
    echo str_replace("?", "l", "Be?a? Hom#i"); // Belal Hom#i
    echo "<br>";
    echo str_replace("?", "l", "Be?a? Hom#i", $RepCount); // Belal Hom#i
    echo "<br>";
    echo "Replacing Count is: $RepCount"; // Replacing Count is: 2
    echo "<br>";
    echo str_replace(["?", "#"], "l", "Be?a? Hom#i"); // Belal Homli
    echo "<br>";
    echo str_replace(["?", "#"], ["l", "s"], "Be?a? Hom#i"); // Belal Homsi
    echo "<br>";
    // with array:
    echo "<pre>";
    print_r(["one", "tow", "three", "one", "four"]);
    echo "</pre>";
    
    echo "<pre>";
    print_r(str_replace("one", "1", ["one", "tow", "three", "one", "four"]));
    echo "</pre>";

    echo "<pre>";
    print_r(str_replace(["one", "tow"],["1", "2"], ["one", "tow", "three", "one", "four"]));
    echo "</pre>";

    // note: four -> empty
    echo "<pre>";
    print_r(str_replace(["one", "tow", "four"],["1", "2"], ["one", "tow", "three", "one", "four"]));
    echo "</pre>";
    
    //note: sensitive
    echo "<pre>";
    print_r(str_replace(["One", "Tow", "Four"],["1", "2", "4"], ["one", "tow", "three", "one", "four"]));
    echo "</pre>";
    
    //note: str_ireplace for insensitive
    echo "<pre>";
    print_r(str_ireplace(["One", "Tow", "Four"],["1", "2", "4"], ["one", "tow", "three", "one", "four"]));
    echo "</pre>";

    //The substr_replace() function replaces a part of a string with another string.
    //Note: If the start parameter is a negative number and length is less than or equal to start, length becomes 0.
    /* substr_replace(string, replacement, start, length)
        string:	     Required. Specifies the string to check
        replacement: Required. Specifies the string to insert
        start:	     Required. Specifies where to start replacing in the string
                        A positive number - Start replacing at the specified position in the string
                        Negative number - Start replacing at the specified position from the end of the string
                        0 - Start replacing at the first character in the string
                        length:	    Optional. Specifies how many characters should be replaced. Default is the same length as the string.
                        A positive number - The length of string to be replaced
                        A negative number - How many characters should be left at end of string after replacing
                        0 - Insert instead of replace
    */
    echo "<a href='https://www.w3schools.com/php/func_string_substr_replace.asp'>func_string_substr_replace</a>";
    echo "<br>";
    echo substr_replace("onetow", 1, 0); // 1
    echo "<br>";
    echo substr_replace("onetow", 1, 3); // one1
    echo "<br>";
    echo substr_replace("onetow", 1, 4); // onet1
    echo "<br>";
    echo substr_replace("onetow", 1, -2); // onet1
    echo "<br>";
    echo substr_replace("onetow", 1, 5); // oneto1
    echo "<br>";
    echo substr_replace("onetow", 1, -1); // oneto1
    echo "<br>";
    echo substr_replace("onetow", 2, -3); // one2
    echo "<br>";
    // length of replace:
    echo substr_replace("onetow", 1, 0, 3); // 1tow
    echo "<br>";
    echo substr_replace("onetow", "?", 1, 4); // o?w
    echo "<br>";
    echo substr_replace("Belal_Moh_Homsi", "X", 6, 3); // Belal_X_Homsi
    echo "<br>";
    echo substr_replace("Belal_Moh_Homsi", "X", 6); // Belal_X
    echo "<br>";
    // with negative length, remove the rest and get the chacters from last:
    echo substr_replace("Belal_Moh_Homsi", "X", 6, -1); // Belal_Xi
    echo "<br>";
    echo substr_replace("Belal_Moh_Homsi", "X", 6, -3); // Belal_Xmsi
    echo "<br>";
    echo substr_replace("Belal_Moh_Homsi", "X", 6, -5); // Belal_XHomsi
    echo "<br>";
    echo substr_replace("Belal_Moh_Homsi", "X", 6, -6); // Belal_X_Homsi
    echo "<br>";
    echo substr_replace("Belal_Moh_Homsi", "X", 6, -7); // Belal_Xh_Homsi
    echo "<br>";
    //note: if the length is 0, so we insert the character:
    echo substr_replace("Belal_Moh_Homsi", "X", 0, 0); // XBelal_Moh_Homsi
    echo "<br>";
    echo substr_replace("Belal_Moh_Homsi", "looo", 4, 0); // Belaloool_Moh_Homsi
    echo "<br>";
    echo substr_replace("Belal_Moh_Homsi", "looo", 5, 0); // Belallooo_Moh_Homsi
    echo "<br>";
    // with array
    echo "<pre>";
    print_r (substr_replace(["one", "apple"], 100, 0));
    echo "</pre>";
    // output:
    /*
        Array
        (
        [0] => 100
        [1] => 100
        )
        */
    echo "<br>";
    echo "<pre>";
    print_r (substr_replace(["one", "apple"], 100, 2));
    echo "</pre>";
    // output:
    /*
        Array
        (
            [0] => on100
            [1] => ap100
        )
    */
    echo "<br>";
    echo "<br>";
    
    //The wordwrap() function wraps a string into new lines when it reaches a specific length.
    //Note: This function may leave white spaces at the beginning of a line.
    /* wordwrap(string,width,break,cut)
    string:	Required. Specifies the string to break up into lines
    width:	Optional. Specifies the maximum line width. Default is 75
    break:	Optional. Specifies the characters to use as break. Default is "\n"
    cut:	Optional. Specifies whether words longer than the specified width should be wrapped:
            FALSE - Default. No-wrap
            TRUE - Wrap
    */
    //Return Value:	Returns the string broken into lines on success, or FALSE on failure.
    echo "<a href='https://www.w3schools.com/Php/func_string_wordwrap.asp'>func_string_wordwrap</a>";
    echo "<br>";
    $myStr7 = "My Life is very Bad! Chances.";
    echo $myStr7 . "<br>";
    echo "-------------------------------------------------";
    echo "<br>";
    echo strlen($myStr7) . "<br>";

    echo wordwrap($myStr7, 7);
    echo "<br>";
    echo "------------------------------------";
    echo "<br>";
    
    echo wordwrap($myStr7, 7, "<br>");
    echo "<br>";
    echo "------------------------------------";
    echo "<br>";
    //
    $myStr8 = "My Life is is very very Baaaaaaaaaad! Chances.";
    echo $myStr8 . "<br>";
    echo "------------------------------------------------";
    echo "<br>";

    echo wordwrap($myStr8, 7, "<br>");
    echo "<br>";
    echo "------------------------------------";
    echo "<br>";
    
    echo wordwrap($myStr8, 12, "<br>");
    echo "<br>";
    echo "------------------------------------";
    echo "<br>";
    
    echo wordwrap($myStr8, 8, "<br>", true);
    echo "<br>";
    echo "<br>";
    echo "=========================================================";
    echo "<br>";
    echo "<br>";
    
    //The ord() function returns the ASCII value of the first character of a string.
    /* ord(string)
    string:	Required. The string to get an ASCII value from.
    */
    echo ord('a');
    echo "<br>";
    echo ord('allow');
    echo "<br>";
    
    //The chr() function returns a character from the specified ASCII value.
    //The ASCII value can be specified in decimal, octal, or hex values. Octal values are defined by a leading 0, while hex values are defined by a leading 0x.
    // chr(ascii)
    echo chr(97);
    echo "<br>";
    
    echo chr(60);
    echo "<br>";
    
    //The similar_text() function calculates the similarity between two strings.
    //It can also calculate the similarity of the two strings in percent.
    //Note: The levenshtein() function is faster than the similar_text() function. However, the similar_text() function will give you a more accurate result with less modifications needed.
    /* similar_text(string1,string2,percent)
    string1:	Required. Specifies the first string to be compared
    string2:	Required. Specifies the second string to be compared
    percent:	Optional. Specifies a variable name for storing the similarity in percent
    */
    echo similar_text("Belal", "Belal"); // 5
    echo "<br>";
    echo similar_text("Belal", "Belal", $p1); // 5
    echo "  ";
    echo $p1;
    echo "<br>";
    echo similar_text("Belal", "Bilal", $p2); // 4
    echo "  ";;
    echo $p2;
    echo "<br>";
    echo similar_text("Belal", "Beelaal", $p3); // 5
    echo "  ";;
    echo $p3;
    echo "<br>";
    echo "<br>";

    //The strstr() function searches for the first occurrence of a string inside another string.
    /* strstr(string,search,before_search)
    string:	        Required. Specifies the string to search
    search:	        Required. Specifies the string to search for. If this parameter is a number, it will search for the character matching the ASCII value of the number
    before_search:	Optional. A boolean value whose default is "false". If set to "true", it returns the part of the string before the first occurrence of the search parameter.
    */
    echo "29- strstr() function searches for the first occurrence of a string inside another string.<br>";
    echo " It is case-sensitive. For a case-insensitive search, use stristr() function.<br>";
    echo "--------------------------------------------------------------------------------------------------------<br>";

    echo strstr("Hello world!","world") . "<br>"; // world!
    echo strstr("Belal Homsi","Ho") . "<br>"; // Homsi
    echo strstr("Belal Homsi","ho") . "<br>"; // nothing - false
    echo var_dump(strstr("Belal Homsi","ho")) . "<br>"; // bool(false)
    echo strstr("Belal Homsi","Ho", true) . "<br>"; // Belal 
    echo strstr("Belal_Homsi","Ho", true) . "<br>"; // Belal_ 
    if(strstr("Hello world!","world")){echo "TRUE";}
    echo "<br>";
    echo "<br>";
    
    // stristr() function searches for the first occurrence of a string inside another string.
    // It  is case-insensitive.
    echo "30- stristr() - case-insensitive. <br>";
    echo "--------------------------------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.php.net/manual/en/function.stristr.php'>php.net/manual/en/function.stristr</a>";
    echo "<br>";
    echo stristr("Belal Homsi","ho") . "<br>"; // Homsi
    echo stristr("Belal Homsi","ho", true) . "<br>"; // Belal
    echo "<br>";

    //number_format() function formats a number with grouped thousands.
    /* number_format(number,decimals,decimalpoint,separator)
        number:	        Required. The number to be formatted. If no other parameters are set, the number will be formatted without decimals and with comma (,) as the thousands separator.
        decimals:	    Optional. Specifies how many decimals. If this parameter is set, the number will be formatted with a dot (.) as decimal point
        decimalpoint:	Optional. Specifies what string to use for decimal point
        separator:	    Optional. Specifies what string to use for thousands separator. Only the first character of separator is used. For example, "xxx" will give the same output as "x"
            Note: If this parameter is given, 
                    all other parameters are required as well
    */
    echo "31- number_format() function formats a number with grouped thousands.<br>";
    echo "number_format(number,decimals,decimalpoint,separator) <br>";
    echo "--------------------------------------------------------------------------------------------------------<br>";
    echo "<a href='https://www.w3schools.com/php/func_string_number_format.asp'>func_string_number_format</a>";
    echo "<br>";
    //test:
    echo 10000000 . "<br>";
    echo 10_000_000 . "<br>"; // 10000000
    echo var_dump(10_000_000) . "<br>"; // int(10000000)
    echo number_format(100000.356841) . "<br>"; // 100,000
    echo number_format(100000.356841, 3) . "<br>"; // 100,000.357
    echo number_format(100000.356841, 3, "*") . "<br>"; // 100,000*357
    echo number_format(100000.356841, 3, "*", "-") . "<br>"; // 100-000*357
    
    ?>