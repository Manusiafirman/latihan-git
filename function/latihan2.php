<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <legend> Menghitung Lingakaran</legend>
       <table> 
        <tr>
        <form action="" method="post">
        <input type="number" name="jari"><br>
        <input type="submit" name="submit"> 
        </tr>
    </table>
        </form>
    </body>
</html>

    <?php
    
    
    if (isset($_POST['submit'])){
        function luasLingkaran($jari, $phi = 3.14 ){
            $jari **= 2;
            $luas = $jari * $phi;
            return $luas;
        }
        function keliling($jari, $phi = 3.14 ){
            $keliling = ($jari * $phi) * 2;
            return $keliling;
        }

        echo $_POST['jari'];
        echo "<br>";
        echo luasLingkaran($_POST['jari']);
        echo "<br>";
        echo keliling($_POST['jari']);

    }


    ?>