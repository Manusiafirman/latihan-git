<?php

    $tahun = date('Y');
    $kabisat = $tahun % 4 == 0;
    $jawab = $kabisat ? "iya": "Bukan Tahun Kabisat";
    echo $tahun. "<br>";
    echo "Sekarang " .$jawab;
    echo "<br>"; 

?>