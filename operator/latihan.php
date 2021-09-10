<?PHP
    
    $s = 200000;
    $h = 15000;
    $t = 25000;
    echo "Uang Firman =<b> $s </b><br>";
    echo "<hr>";
    
    $s -= $h;
    echo " jajan minum = <b>".$h."</b> <br>";
    echo " sisa uang Firman = <b>".$s."</b> <br>";
    echo "<hr>";

    $s -= $t;
    echo " Di belikan sosis bakar seharga = <b>".$t."</b> <br>";
    echo " sisa uang Firman = <b>".$s."</b> <br>";
    echo "<hr>";


    $sedekah = $s * 0.1;
    $s -= $sedekah;
    echo " Sedekah = <b>".$sedekah."</b> <br>";
    echo " sisa uang Firman = <b>".$s."</b> <br>";
    echo "<hr>";

    
    $nemu = $s * 0.5;
    $s += $nemu;
    echo " Get money = <b>".$nemu."</b> <br>";
    echo " sisa uang Firman = <b>".$s." </b><br>";
    echo "<hr>";
    
?>