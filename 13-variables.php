<?php
    $name = 'Belal';
    $Name = 'Sameh';
    echo $name;
    echo '<br>';
    echo $Name;
    echo '<br>';
    //
    echo 'Hello $name';
    echo '<br>';
    echo "Hello $name";
    echo '<br>';
    echo "------------------------------";
    echo '<br>';
    //
    // variable variable
    $test = "Belal";
    $$test = "Homsi"; //$$test -> $Belal
    echo $test; //Belal
    echo "<br>";
    echo $$test; // Homsi
    echo "<br>";
    //or
    echo $Belal; // Homsi
    echo "<br>";
    echo "Hello $test"; // Hello Belal
    echo "<br>";
    echo "Hello $$test"; // Hello $Belal...
    echo "<br>";
    echo "Hello ${$test}"; // Hello Homsi...
    echo "<br>";
    echo "------------------------------";
    echo "<br>";
    //
    //Assigning By Value 'default'
    $x = 20;
    $y = $x;
    echo "x=$x , y=$y <br>";
    $y = 15;
    echo "x=$x , y=$y <br>";
    echo "---------------";
    echo "<br>";
    //Assigning By Reference,, &
    $x2 = 30;
    $y2 = &$x2;
    echo "x2=$x2 , y2=$y2 <br>";
    $y2 = 5;
    echo "x2=$x2 , y2=$y2 <br>";
    echo "<br>";
    echo "---------------";
    echo "<br>";
    
    //Constan
    define("My_Const", 25);
    echo My_Const;
    echo "<br>";
    echo "---------------";
    echo "<br>";
    echo "Predgined Contants / Case Sensetive";
    echo "---------------";
    echo "<br>";
    echo "PHP_VERSION : ";
    echo PHP_VERSION;
    echo "<br>";
    echo "PHP_OS_FAMILY : ";
    echo PHP_OS_FAMILY;
    echo "<br>";
    echo "DEFAULT_INCLUDE_PATH : ";
    echo DEFAULT_INCLUDE_PATH;
    echo "<br>";
    echo "Magic Contants / Case Inensetive";
    echo "<br>";
    echo "---------------";
    echo "<br>";
    echo "__LINE__ : ";
    echo __LINE__;
    echo "<br>";
    echo "__FILE__ : ";
    echo __file__;
    echo "<br>";
    echo "__DIR__ : ";
    echo __dir__;
    echo "<br>";
    
?>