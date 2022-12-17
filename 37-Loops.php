<?php
// While .. 
    $i = 1;
    while ( $i<=5 ){
        echo "$i <br>";
        $i++;
    }
    //
    echo"<br>";

    $i=1;
    while ( $i<=5 ):
        echo "$i <br>";
        $i++;
    endwhile;
    echo"<br>";
    //
    // Do .. While
    $i=1;
    do{
        echo "$i <br>";
        $i++;
    }while($i<=5);
    echo"<br>";
    //
    // For
    for($i=1; $i<=5; $i++) echo "$i <br>";
    echo"<br>";

    $x=1;
    for(; $x<=5; $x++) echo "$x <br>";
    echo"<br>";

    $idx=1;
    for(; ; $idx++){
        if( $idx == 6 ) break;
        echo "$idx <br>";
    }
    echo"<br>";

    $idx=1;
    for(; ; ){
        $idx++;
        if( $idx == 6 ) break;
        echo "$idx <br>";
    }
    
    echo"<br>";

    $idx=1;
    for(; ; ):
        $idx++;
        if( $idx == 10 ) break;
        echo "$idx <br>";
    endfor;
?>