<?php

function printArr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

//filter_var()
    // FILTER_SANITIZE_EMAIL
    // FILTER_SANITIZE_NUMBER_INT
    //FILTER_SANITIZE_NUMBER_FLOAT * FILTER_FLAG_ALLOW_FRACTION - FILTER_FLAG_ALLOW_THOUSAND
    // FILTER_SANITIZE_URL


// PHP Filters
echo "<h2>PHP Filters</h2>";
echo "*****************<br>";
echo "<p style='margin-left:20px; font-size:18px;'>";
echo "This extension filters data by either validating or sanitizing it. <br>";
echo "This is especially useful when the data source contains unknown (or foreign) data, <br>";
echo "like user supplied input. For example, this data may come from an HTML form. <br>";
echo "There are two main types of filtering: validation and sanitization.<br>";
echo "</p>";

echo "<a href='https://www.php.net/manual/en/intro.filter.php' >php.net PHP Filters Introduction </a>";
echo "<br>";
echo "<br>";

//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

//3- filter_var( Value|Variable[Required], Filter-Type Validate|Sanitize [optional], Options [optional] )
/*
The filter_var() function both validate and sanitize data.
The filter_var() function filters a single variable with a specified filter.
It takes two pieces of data:
    The variable you want to check
    The type of check to use
*/
echo '3- filter_var ( Value|Variable [Required], Filter-Type Validate|Sanitize [optional], Options | Flag [optional] ) <br>';
echo "***************************************************************************************<br>";
echo "filter_var() function both Validate and Sanitize data.<br>";
echo "It filters a single variable with a specified filter.<br><br>";
echo "**************** filter_va() - SANITIZE FUNCTIONS.******************<br><br>";
echo "<a href='https://www.php.net/manual/en/filter.filters.sanitize.php'>Filter Var Sanitize - php.net</a>  <br> <br>";

// 3-7 FILTER_SANITIZE_EMAIL
// Remove all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[].
echo "3-7 FILTER_SANITIZE_EMAIL (type)  <br>";
echo "------------------------------------------------- <br>";
$myEmail = "belalocp72@gmail.com";
echo '$myEmail = "belalocp72@gmail.com"<br>';
echo 'filter_var($myEmail, FILTER_SANITIZE_EMAIL) ==>';
var_dump(filter_var($myEmail, FILTER_SANITIZE_EMAIL)); // string(20) "belalocp72@gmail.com"
echo "<br>";
$myEmail = "bela ☻☺◘ ocp 72@gmail.com";
echo '$myEmail = "bela ☻☺◘ locp 72@gmail.com" <br>';
echo 'filter_var($myEmail, FILTER_SANITIZE_EMAIL) ==>';
var_dump(filter_var($myEmail, FILTER_SANITIZE_EMAIL)); // string(20) "belalocp72@gmail.com"
echo "<br>";
echo "<br>";

// 3-8 FILTER_SANITIZE_NUMBER_INT
// Remove all characters except digits, plus and minus sign.
echo "3-8 FILTER_SANITIZE_NUMBER_INT <br>";
echo "------------------------------------------------- <br>";
$myVal = 120;
echo '$myVal = 120 <br>';
echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_INT) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_INT)); // string(3) "120"
echo "<br>";
$myVal = "120";
echo '$myVal = "120" <br>';
echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_INT) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_INT)); // string(3) "120"
echo "<br>";
$myVal = "120ASD";
echo '$myVal = "120ASD" <br>';
echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_INT) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_INT)); // string(3) "120"
echo "<br>";
$myVal = "%$100 +?50 ";
echo '$myVal = "%$100 +?50 " <br>';
echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_INT) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_INT)); //  string(6) "100+50"
echo "<br>";
echo "<br>";

// 3-9 FILTER_SANITIZE_NUMBER_FLOAT
// Remove all characters except digits, +- and optionally .,eE .
echo "3-9 FILTER_SANITIZE_NUMBER_FLOAT <br>";
echo "------------------------------------------------- <br>";
$myVal = 120;
echo '$myVal = 120 <br>';
echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_INT) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_FLOAT)); // string(3) "120"
echo "<br>";

$myVal = 15.34;
echo '$myVal = "15.34" <br>';
echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_INT) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_FLOAT)); // string(4) "1534"
echo "<br>";

echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_ALLOW_FRACTION) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
echo "<br>";

$myVal = "1,354,615.8";
echo '$myVal = "1,354,615.8" <br>';
echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_INT) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_FLOAT)); // string(8) "13546158"
echo "<br>";

$myVal = "1,354,615.8";
echo '$myVal = "1,354,615.8" <br>';
echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_FLOAT,
["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_FLOAT,
                    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION])); 
                    // string(11) "1,354,615.8"
echo "<br>";

$myVal = "1, 3???5**4,aasd615.8xc";
echo '$myVal = "1, 3???5**4,aasd615.8xc" <br>';
echo 'filter_var($myVal, FILTER_SANITIZE_NUMBER_FLOAT,
["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]) ==> ';
var_dump(filter_var($myVal, FILTER_SANITIZE_NUMBER_FLOAT,
                    ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION])); 
                    // string(11) "1,354,615.8"
echo "<br>";
echo "<br>";

// 3-10 FILTER_SANITIZE_URL
//Remove all characters except letters, digits and $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
echo "3-10 FILTER_SANITIZE_URL <br>";
echo "---------------------------------- <br>";
$myURL = "https://myweb.com";
echo '$myURL = "https://myweb.com"  <br>';
echo 'filter_var($myURL, FILTER_SANITIZE_URL) => ';
var_dump(filter_var($myURL, FILTER_SANITIZE_URL)); // string(17) "https://myweb.com"
echo "<br>";

$myURL = "https://myw eb.c♣o♠m◘";
echo '$myURL = "https://myw eb.c♣o♠m◘"  <br>';
echo 'filter_var($myURL, FILTER_SANITIZE_URL) => ';
var_dump(filter_var($myURL, FILTER_SANITIZE_URL)); // string(17) "https://myweb.com"
echo "<br>";

