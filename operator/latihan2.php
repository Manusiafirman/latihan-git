<?php

    $tono = 10;
    $tini = 8;
    $toni = 15;

    echo "<br> apakah uang toni lebih besar dari uang tono dan tini  = " 
    . (($toni > $tono) && ($toni > $tini));

    echo "<br> apakah uang toni lebih besar dari uang tini tapi tidak lebih besar dari uang tono = " 
    . (($toni > $tini) && ($toni < $tono));




    //soal 3

    $username = "firman";
    $password = 123;

    echo "<br> <b> Soal 3 </b>";
    echo "<br> username/email : $username ";
    echo "<br> password : $password ";
    echo "<br> Login : "
    . ($username != $password);

?>