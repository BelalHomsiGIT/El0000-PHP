<?php
//filter_input() Function
//-------------------------
/*The filter_input() function gets an external variable 
(e.g. from form input) and optionally filters it.
This function is used to validate variables from insecure sources,
such as user input. */

//  filter_input(type, variable, filter, options)
/*
    type:     Required. The input type to check for. Can be one of the following:
                INPUT_GET | INPUT_POST | INPUT_COOKIE | INPUT_SERVER | INPUT_ENV
    variable: Required. The variable name to check
    filter:	  Optional. Specifies the ID or name of the filter to use.
              Default is FILTER_DEFAULT, which results in no filtering
    options:  Optional. Specifies one or more flags/options to use.
              Check each filter for possible options and flags
*/
echo "filter_input() Function <br>";
echo '------------------------------ <br>';
echo 'filter_input(type, variable, filter, options) <br><br>';
echo "<a href='https://www.w3schools.com/php/func_filter_input.asp'>filter_input() Function -W3</a> <br><br> ";

//this code * echo $_GET["num"]; * I will get:
// Warning: Undefined array key "num" in ...
//and when I fill the input-box I get the value
// echo $_GET["num"];

//filter_input() Function is the solution:
// echo filter_input(INPUT_GET, "num");

//and I can validate the input value:
echo filter_input(INPUT_GET, "num", FILTER_VALIDATE_INT);
//Try input number, then text

?>
<form action="" method="GET">
    <input type="text" name="num">
    <input type="submit" value="Send">
</form>