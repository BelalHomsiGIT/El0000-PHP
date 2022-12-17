<?php
    $day = "SAT";
    switch($day){
        case "SUN":
            echo "Hard Work..";
            break;
        case "MON":
            echo "Hard Work..";
            break;
        case "SAT":
        case "FRI":
            echo "Weekend";
            break;
        default:
            echo "Normal Day...";
    }
?>