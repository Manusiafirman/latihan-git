<?php
{
    class komputer
{
    public $nama = "Firman Romansyah";
    public $merek = "Acer";
    public $ukuran = 26  ;
    
    public function Dinyalakan()
    {
        return "Silahkan anda Nyalakan";
    }

    public function Dimatikan()
    {
        return "Silahkan anda matikan";
        }
    }
    $komputer1 = new komputer();
    echo "Nama Pemilik :  ".$komputer1->nama. "<br>";
    echo "Merk Komputer: ".$komputer1 -> merek."<br>";
    echo "Ukuran Komputer: ".$komputer1 -> ukuran. " inch <br>";
    echo "Status Komputer: ".$komputer1->Dinyalakan(). "<hr>";

    $komputer2 = new komputer();
    $komputer2->nama = "Ikhsan";
    $komputer2->merek = "ROG";
    $komputer2->ukuran = 27;
    echo "Nama Pemilik :  ".$komputer2->nama. "<br>";
    echo "Merk Komputer: ".$komputer2 -> merek."<br>";
    echo "Ukuran Komputer: ".$komputer2 -> ukuran. " inch <br>";
    echo "Status Komputer: ".$komputer2->Dimatikan(). "<hr>";

    $komputer3 = new komputer();
    $komputer3->nama = "Aceng";
    $komputer3->merek = "Lenovo";
    $komputer3->ukuran = 28;
    echo "Nama Pemilik :  ".$komputer3->nama. "<br>";
    echo "Merk Komputer: ".$komputer3 -> merek."<br>";
    echo "Ukuran Komputer: ".$komputer3 -> ukuran. " inch <br>";
    echo "Status Komputer: ".$komputer3->Dinyalakan(). "<hr>";

    $komputer4 = new komputer();
    $komputer4->nama = "Erin";
    $komputer4->merek = "Apple";
    $komputer4->ukuran = 29;
    echo "Nama Pemilik :  ".$komputer4->nama. "<br>";
    echo "Merk Komputer: ".$komputer4 -> merek."<br>";
    echo "Ukuran Komputer: ".$komputer4 -> ukuran. " inch <br>";
    echo "Status Komputer: ".$komputer4->Dinyalakan(). "<hr>";

    $komputer4 = new komputer();
    $komputer4->nama = "Amel";
    $komputer4->merek = "Asus";
    $komputer4->ukuran = 30;
    echo "Nama Pemilik :  ".$komputer4->nama. "<br>";
    echo "Merk Komputer: ".$komputer4 -> merek."<br>";
    echo "Ukuran Komputer: ".$komputer4 -> ukuran. " inch <br>";
    echo "Status Komputer: ".$komputer4->Dimatikan(). "<hr>";
}
?>