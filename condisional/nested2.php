<?php

    $member = "tidak";
    $totalbelanja = 50000;
    $disc = 0;
    $totalharga  = 0;

    if ($member == "iya") {
        if ($totalbelanja >= 250000){
            $disc = 0.1 * $totalbelanja;
        } else if ($totalbelanja >= 100000){

            $disc = 0.5 * $totalbelanja;
        }
    } else {
        if ($totalharga >= 100000){
            $disc = 0.25 * $totalbelanja;
        }
    }
    $totalharga = $totalbelanja - $disc;
    echo "Kartu member : $member<br>";
    echo "Total belanja : $totalbelanja<br>";
    echo "diskon : $disc<br>";
    echo "Total yang harus dibayar : $totalharga<br>";
    
?>