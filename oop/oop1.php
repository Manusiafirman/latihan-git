<?php
{
    //mendefinisikan sebuah kelas
    class kucing
{
    //membuat property atau atribut
    public $warna ="hideng";
    public $jumlahkaki = 4;
    public $jnsbulu ="panjang";
    public $makananfav ="Ikan Pindang";

    //membuat method(behaviour)
    public function bersuara()
    {
        return "meowng,,,meowng,,,meowng,,,";
    }

    public function berburu()
    {
        return "Berburu Hiu";
        }

        public function berburu1()
    {
        return "Berburu kucing oren";
        }
    }
    //membuat object (inisisasi object)
    $kucing1 = new kucing();
    echo "Warna Kucing Itu ".$kucing1 ->warna. "<br>";
    echo "Kucing hideng sedang ".$kucing1 ->berburu1()."<hr>";

    $kucing2 = new kucing();
    //set warna kucing
    $kucing2->warna = "oren";
    echo "Warna Kucing Itu ".$kucing2 ->warna. "<br>";
    echo "Kucing Itu  ".$kucing2 ->berburu()."<hr>";
}
?>