<?php

// Regular Syntax
    if( 10> 5 ){
        echo "Good";
        echo "<br>";
    }elseif( 10 < 5 ){
        echo "Bad";
        echo "<br>";
    }else{
        echo "Byee";
        echo "<br>";
    }

// Alternate Syntax
    if( 10> 5 ):
        echo "Good";
        echo "<br>";
    elseif( 10 < 5 ):
        echo "Bad";
        echo "<br>";
    else:
        echo "Byee";
        echo "<br>";
    endif;
?>