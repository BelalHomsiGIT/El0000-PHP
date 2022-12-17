<?php

function printArr($arr){
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

//filter_list()
//filter_id(string $name)
//filter_var()
    //FILTER_VALIDATE_BOOL   * FILTER_NULL_ON_FAILURE
    //FILTER_VALIDATE_URL    * FILTER_NULL_ON_FAILURE - FILTER_FLAG_QUERY_REQUIRED - FILTER_FLAG_PATH_REQUIRED
    //FILTER_VALIDATE_IP     * FILTER_NULL_ON_FAILURE - FILTER_FLAG_IPV4 - FILTER_FLAG_IPV6
    //FILTER_VALIDATE_MAC 
    //FILTER_VALIDATE_EMAIL  * FILTER_NULL_ON_FAILURE
    //FILTER_VALIDATE_INT    * FILTER_NULL_ON_FAILURE
    //FILTER_VALIDATE_FLOAT  * FILTER_NULL_ON_FAILURE


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

// Filter Functions
echo "<a href='https://www.php.net/manual/en/ref.filter.php' >php.net PHP Filter Functions</a> ==> As filter_list() | filter_id() | filter_var() | ...";
echo "<br><br>";
//1- filter_list(): array
echo "1- filter_list(): array <br>";
echo "****************<br>";
echo "This function has no parameters. Returns an array of names of all supported filters. :<br>";
echo "filter_list() ==> <br>";
printArr(filter_list());

//2- filter_id(string $name): int|false - name: Name of a filter to get.
echo '2- filter_id(string $name): int|false - name: Name of a filter to get. <br>';
echo "*****************************************************<br>";
echo "This function has no parameters. Returns an array of names of all supported filters. :<br><br>";
echo 'filter_id("email") ==> ';
echo filter_id("email") . "<br><br>";

echo 'filter_id(filter_list()[15]) ==> ';
echo filter_id(filter_list()[15]) . "<br><br>";

echo 'filter_id(filter_list()[150]) ==> nothing / Warning: Undefined array key 150 in ... on line ... <br><br>';
/*echo filter_id(filter_list()[150]) . "<br>";  //nothing
    Warning: Undefined array key 150 in ... on line ...
*/

echo "<table>";
    echo "<tr>";
        echo "<td>Filter Name</td>";
        echo "<td>Filter ID</td>";
    echo "</tr>";
    foreach (filter_list() as $id =>$filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
echo "</table>";
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
echo "************** filter_va() - VALIDATE FUNCTIONS.*****************<br><br>";
echo "<a href='https://www.php.net/manual/en/filter.filters.validate.php'>Filter Var Validate - php.net</a>  <br> <br>";

//3-1 FILTER_VALIDATE_BOOL (type) & FILTER_NULL_ON_FAILURE (flag)
/*When I Validate a BOOLEAN value:
    True | true | TRUE | ON | on | YES | yes | 1 | "1" --> I'll get true, otherwise I'll get false.
    False | false | FALSE | OFF | off | no | NO | 0 | "0" --> I'll get false.
*/
echo "3-1 FILTER_VALIDATE_BOOL (type) & FILTER_NULL_ON_FAILURE (flag) <br>";
echo "-------------------------------------------------------------------------------------------------- <br>";
$bool1 = True;
echo '$bool1 = True / filter_var($bool1, FILTER_VALIDATE_BOOL) ==> ';
var_dump(filter_var($bool1, FILTER_VALIDATE_BOOL)); // bool(true)
echo "<br>";
$bool2 = "yes";
echo '$bool2 = "yes" / filter_var($bool2, FILTER_VALIDATE_BOOL) ==> ';
var_dump(filter_var($bool2, FILTER_VALIDATE_BOOL)); // bool(true)
echo "<br>";
$bool3 = "1";
echo '$bool3 = "1" / filter_var($bool3, FILTER_VALIDATE_BOOL) ==> ';
var_dump(filter_var($bool3, FILTER_VALIDATE_BOOL)); // bool(true)
echo "<br>";
$bool4 = "Belal";
echo '$bool4 = "Belal" / filter_var($bool4, FILTER_VALIDATE_BOOL) ==> ';
var_dump(filter_var($bool4, FILTER_VALIDATE_BOOL)); // bool(false)
echo "<br>";
$bool5 = "15";
echo '$bool5 = "15" / filter_var($bool5, FILTER_VALIDATE_BOOL) ==> ';
var_dump(filter_var($bool5, FILTER_VALIDATE_BOOL)); // bool(false)
echo "<br>";
$bool6 = false;
echo '$bool6 = false / filter_var($bool5, FILTER_VALIDATE_BOOL) ==> ';
var_dump(filter_var($bool6, FILTER_VALIDATE_BOOL)); // bool(false)
echo "<br>";
// When I nedd to get NULL when the value is not True And is not False, we need a Flag:
$bool7 = "Belal";
echo '$bool7 = "Belal" / filter_var($bool7, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ==> ';
var_dump(filter_var($bool7, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";
$bool8 = "0";
echo '$bool8 = "0" / filter_var($bool8, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE) ==> ';
var_dump(filter_var($bool8, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)); // bool(false)
echo "<br><br>";

//3-2 FILTER_VALIDATE_URL (type) & FALGS: 
//  FILTER_NULL_ON_FAILURE , FILTER_FLAG_PATH_REQUIRED , FILTER_FLAG_QUERY_REQUIRED
echo "3-2 FILTER_VALIDATE_URL (type) & FALGS: <br>";
echo "FILTER_NULL_ON_FAILURE , FILTER_FLAG_PATH_REQUIRED , FILTER_FLAG_QUERY_REQUIRED <br>";
echo "----------------------------------------------------------------------------------------------------------------------------------------------<br>";
$myURL = "https://myweb.net";
echo '$myURL = "https://myweb.net" / filter_var($myURL, FILTER_VALIDATE_URL) ==> ';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL)); // string(17) "https://myweb.net"
echo "<br>";
$myURL = "http://www.myweb.net";
echo '$myURL = "https://myweb.net" / filter_var($myURL, FILTER_VALIDATE_URL) ==> ';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL)); // string(20) "http://www.myweb.net"
echo "<br>";
$myURL = "any string";
echo '$myURL = "https://myweb.net" / filter_var($myURL, FILTER_VALIDATE_URL) ==> ';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL)); // bool(false)
echo "<br>";
// if we need to get NULL when the URL is not valid:
$myURL = "any string";
echo '$myURL = "https://myweb.net" / filter_var($myURL, FILTER_VALIDATE_URL) ==> ';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL, FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";
// validate if the URL has a path:
// dosen't have a path
$myURL = "https://www.myweb.net";
echo '$myURL = "https://myweb.net" / filter_var($myURL, FILTER_VALIDATE_URL) ==> ';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)); // bool(false)
echo "<br>";
// have a path
$myURL = "https://myweb.net/home/";
echo '$myURL = "https://myweb.net/home/" / filter_var($myURL, FILTER_VALIDATE_URL) ==> ';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)); // string(23) "https://myweb.net/home/"
echo "<br>";
// validate if the URL has a query string:
// dosen't have a query string
$myURL = "https://www.myweb.net";
echo '$myURL = "https://www.myweb.net" / filter_var($myURL, FILTER_VALIDATE_URL) ==> ';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)); // bool(false)
echo "<br>";
// have a query string
$myURL = "https://myweb.net/?id=5";
echo '$myURL = "https://myweb.net/?id=5" / filter_var($myURL, FILTER_VALIDATE_URL) ==> ';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)); // string(23) "https://myweb.net/?id=5"
echo "<br>";
// To use all the FLAGS together:
echo "<br>";
$myURL = "https://www.myweb.net";
echo '$myURL = "https://www.myweb.net"<br> ';
echo 'filter_var($myURL, FILTER_VALIDATE_URL,<br>'; 
echo '["flags" => FILTER_NULL_ON_FAILURE | <br>'; 
echo 'FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]) ==>';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL, 
                    ["flags" => FILTER_NULL_ON_FAILURE | 
                    FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED])); // NULL
echo "<br>";
echo "<br>";
$myURL = "https://www.myweb.net/home?id=100";
echo '$myURL = "https://www.myweb.net/home?id=100" <br>';
var_dump(filter_var($myURL, FILTER_VALIDATE_URL, 
                    ["flags" => FILTER_NULL_ON_FAILURE | 
                    FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED])); // string(33) "https://www.myweb.net/home?id=100"

echo "<br>";
echo "<br>";

//3-3 FILTER_VALIDATE_IP (var) & FALGS: 
// Validates value as IP address, optionally only IPv4 or IPv6 or not from private or reserved ranges.
echo "3-3 FILTER_VALIDATE_IP & FALGS: <br>";
echo "----------------------------------------------------------------------------------------------------------------------------------------------<br>";
$myIP = "192.68.8.1";
echo '$myIP = "192.68.8.1" / filter_var($myIP,FILTER_VALIDATE_IP) ==>';
var_dump(filter_var($myIP, FILTER_VALIDATE_IP)); // string(10) "192.68.8.1"
echo"<br>";
$myIP = "192.68.M.1";
echo '$myIP = "192.68.M.1" / filter_var($myIP,FILTER_VALIDATE_IP) ==>';
var_dump(filter_var($myIP, FILTER_VALIDATE_IP)); // bool(false)
echo"<br>";

$myIPV6 = "2001:0db8:85a3:0000:0000:8a2e:0370:7334";
echo '$myIPV6 = "2001:0db8:85a3:0000:0000:8a2e:0370:7334" / filter_var($myIPV6, FILTER_VALIDATE_IP) ==>';
var_dump(filter_var($myIPV6, FILTER_VALIDATE_IP)); // string(39) "2001:0db8:85a3:0000:0000:8a2e:0370:7334"
echo"<br>";
echo 'filter_var($myIPV6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) ==> ';
var_dump(filter_var($myIPV6, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)); //  bool(false)
echo"<br>";

$myIPV4 = "192.68.1.0";
echo '$myIPV4 = "192.68.1.0" / filter_var($myIPV4, FILTER_VALIDATE_IP) ==>';
var_dump(filter_var($myIPV4, FILTER_VALIDATE_IP)); // string(10) "192.68.1.0"
echo"<br>";
echo 'filter_var($myIPV4, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) ==> ';
var_dump(filter_var($myIPV4, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)); //  bool(false)
echo"<br>";
echo"<br>";

//3-4 FILTER_VALIDATE_MAC (var)
echo "3-4 FILTER_VALIDATE_MAC: <br>";
echo "------------------------------------<br>";
$mac = "00:00:5e:00:53:af";
echo '$mac = "00:00:5e:00:53:af" / filter_var($mac, FILTER_VALIDATE_MAC) ==> ';
var_dump(filter_var($mac, FILTER_VALIDATE_MAC)); // string(17) "00:00:5e:00:53:af"
echo "<br>";
$mac = "00:00:5e:00:53:afMMM";
echo '$mac = "00:00:5e:00:53:afMMM" / filter_var($mac, FILTER_VALIDATE_MAC) ==> ';
var_dump(filter_var($mac, FILTER_VALIDATE_MAC)); // bool(false)
echo "<br>";
echo "<br>";

//3-4 FILTER_VALIDATE_EMAIL (var) & FALGS: 
// filter validates an e-mail address.
echo "3-4 FILTER_VALIDATE_EMAIL & FALGS: <br>";
echo "-------------------------------------<br>";
$myEmail = 'belalocp72@gmail.com';
echo '$myEmail = "belalocp72@gmail.com" <br>';
echo 'filter_var($myEmail, FILTER_VALIDATE_EMAIL) ==> ';
var_dump( filter_var($myEmail, FILTER_VALIDATE_EMAIL)); // string(20) "belalocp72@gmail.com"
echo "<br>";

$myEmail = 'belalocp72gmailcom';
echo '$myEmail = "belalocp72gmailcom" <br>';
echo 'filter_var($myEmail, FILTER_VALIDATE_EMAIL) ==> ';
var_dump( filter_var($myEmail, FILTER_VALIDATE_EMAIL)); // bool(false)
echo "<br>";
echo 'filter_var($myEmail, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE) ==> ';
var_dump( filter_var($myEmail, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";
echo "<br>";

//3-5 FILTER_VALIDATE_INT (var) & FALGS: 
/* It is used to validate value as integer.
    FILTER_VALIDATE_INT also allows us to specify a range for the integer variable.
    Possible options and flags:
        min_range - specifies the minimum integer value
        max_range - specifies the maximum integer value
*/
echo "3-5 FILTER_VALIDATE_INT & FALGS: <br>";
echo "-------------------------------------<br>";
$myVal = 100;
echo '$myVal = 100 <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_INT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_INT)); // int(100)
echo "<br>";
$myVal = 100.5;
echo '$myVal = 100.5 <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_INT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_INT)); //  bool(false)
echo "<br>";
$myVal = 100.00;
echo '$myVal = 100.00 <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_INT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_INT)); // int(100)
echo "<br>";
$myVal = "55";
echo '$myVal = "55" <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_INT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_INT)); // int(100)
echo "<br>";
$myVal = "55X";
echo '$myVal = "55X" <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_INT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_INT)); // bool(false)
echo "<br>";
$myVal = "55X";
echo '$myVal = "55X" <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_INT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";
$myVal = "55";
echo '$myVal = "55" <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_INT) ==> ';
var_dump( filter_var(
    $myVal, 
    FILTER_VALIDATE_INT, 
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
    ) ); // int(55)
echo "<br>";
$myVal = "120";
echo '$myVal = "120" <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_INT) ==> ';
var_dump( filter_var(
    $myVal, 
    FILTER_VALIDATE_INT, 
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
    ) ); // NULL
echo "<br>";
echo "<br>";

//3-6 FILTER_VALIDATE_FLOAT (var) & FALGS: 
// validates a value as a float number.

echo "3-6 FILTER_VALIDATE_FLOAT & FALGS: <br>";
echo "--------------------------------------<br>";
$myVal = 100;
echo '$myVal = 100 <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_FLOAT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_FLOAT)); // float(100)
echo "<br>";
$myVal = 100.5;
echo '$myVal = 100.5 <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_FLOAT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_FLOAT)); //  float(100.5)
echo "<br>";
$myVal = "55X";
echo '$myVal = "55X" <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_FLOAT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_FLOAT)); // bool(false)
echo "<br>";
$myVal = "55X";
echo '$myVal = "55X" <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_FLOAT) ==> ';
var_dump( filter_var($myVal, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE)); // NULL
echo "<br>";
$myVal = "55.25";
echo '$myVal = "55.25" <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_FLOAT) ==> ';
var_dump( filter_var(
    $myVal, 
    FILTER_VALIDATE_FLOAT, 
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
    ) ); //  float(55.25)
echo "<br>";
$myVal = "1.2";
echo '$myVal = "1.2" <br>';
echo 'filter_var($myVal, FILTER_VALIDATE_INT) ==> ';
var_dump( filter_var(
    $myVal, 
    FILTER_VALIDATE_FLOAT, 
    ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
    ) ); // NULL














echo "<br>";
echo "<a href='https://www.php.net/manual/en/function.filter-id.php' >W3School PHP Filters </a>";
echo "<br>";
echo "<a href='https://www.php.net/manual/en/book.filter.php' >php.net PHP Book Filters </a>";
echo "<br>";
echo "<a href='https://www.php.net/manual/en/filter.filters.php' >php.net PHP Filters </a>";
echo "<br>";
echo "<br>";
echo "<br>";

