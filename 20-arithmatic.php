<?php
  echo '<a href="https://www.w3schools.com/PHP/php_operators.asp">PHP Operators</a>';
  echo "<br>";
  echo "<br>";

  echo 10 + 20;
  echo gettype(10 + 20);
  echo "<br>";
  echo 10.7 + 20.5;
  // echo "<br>";
  echo gettype(10.7 + 20.5);
  echo "<br>";
  echo (int) (10.7 + 20.5);
  // echo "<br>";
  echo gettype ((int) (10.7 + 20.5));
  echo "<br>";

  echo "<br>";
  echo 20/2;
  echo gettype(20/2);
  echo "<br>";
  echo 20/8;
  echo gettype(20/8);
  echo "<br>";
  echo 20/8;
  echo gettype(20/8);
  echo "<br>";

  echo "<br>";
  echo 20%8;
  echo "<br>";
  echo 2**3;
  echo "<br>";
  
  echo "<br>";
  echo "Unary operator";
  echo "<br>";
  echo "100";
  echo gettype("100");
  echo "<br>";

  echo +"100";
  echo gettype(+"100");
  echo "<br>";

  echo -"100";
  echo gettype(-"100");
  echo "<br>";

  echo +"100" + 25;
  echo gettype(+"100" + 25);
  echo "<br>";

  echo +"100" + +"50";
  echo gettype(+"100" + +"50");
  echo "<br>";
  
  echo +"-100" + +"50";
  echo gettype(+"-100" + +"50");
  echo "<br>";
  
  echo -"-100" + -"50";
  echo gettype(-"-100" + -"50");
  echo "<br>";
  echo "<br>";
  echo "Assignment Operators";
  echo "<br>";
  $x = "25";
  echo $x;
  echo gettype($x);
  echo "<br>";
  $x = +$x;
  echo $x;
  echo gettype($x);
  echo "<br>";
  $x += 70;
  echo $x;
  echo "<br>";
  echo "Increment/Decrement - Pre/Post";
  echo "<br>";
  $z = 5;
  $z++; // 6
  ++$z; // 7
  echo $z;
  echo "<br>";
  echo $z++; // 7 , 8 - post
  echo "<br>";
  echo ++$z; // 9 , 9 - pre



  ?>