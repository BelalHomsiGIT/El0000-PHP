<?php
    print_r(array(1,4,5,8,9,12,21));

    echo "<pre>";
    print_r(array(1,4,5,8,9,12,21));
    echo "</pre>";
    
    echo "<pre>";
    print_r(array(
        "A" => "Ahamad",
        "B" => "Belal"
    ));
    echo "</pre>";

    echo "<pre>";
    print_r(array(
        "A" => "Ahamad",
        "B" => "Belal",
        "Sami"
    ));
    echo "</pre>";
    
    echo "<pre>";
    print_r(array(
        "A" => "Ahamad",
        "B" => "Belal",
        "1" =>"Sami",
        "Ameer"
    ));
    echo "</pre>";
    
    echo "<pre>";
    print_r(array(
        "A" => "Ahamad",
        "B" => "Belal",
        "1" =>"Sami",
        "Ameer",
        "x" => "Test",
        "Ex"
    ));
    echo "</pre>";
    
    echo "<pre>";
    print_r(array(
        "A" => "Ahamad",
        "B" => "Belal",
        "1" =>"Sami",
        "Ameer",
        "x" => "Test",
        "Ex",
        TRUE => "override Sami"
    ));
    echo "</pre>";

?>