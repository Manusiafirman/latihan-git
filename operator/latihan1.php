<?php

    $a = 1;
    $b = 9;
    $c = 10;
    $d = 11;

    echo "$a < $c : " . ($a < $c);
    echo "<br> ($b > $c): && ($c > $b) :" 
    . (($b > $c) && ($c > $b));

    echo "<br> ($c == $d) || ($b > $c): "
        . (($c != $d) || ($b > $c));

?>