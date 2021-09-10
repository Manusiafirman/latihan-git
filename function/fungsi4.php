<?php

    function hitungUmur($tahun_lahir, $tahun_sekarang){
        $umur = $tahun_sekarang - $tahun_lahir;
        return  $umur;
    }

    function perkenalan($nama, $salam = "Assalamualaikum"){
        echo $salam . ", ";
        echo "Perkenalkan, nama saya " . $nama . "<br>";
        //mengisi fungsi lain
        echo "saya berusia " . hitungUmur(2003, 2021) . 
        " tahun <br>";
        echo "Senang berkenalan dengan anda <br>";
    }
    echo perkenalan("firman");

?>