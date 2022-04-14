<!--
Sınıf içerisindeki bir özelliğe sınıf dışından değer atama
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//bu kısımda sabitlerin değerlerinin değişimini inceleyeceğim

class Deneme{
    public const ISIM      =   "Volkan";
    public const SOYISIM   =   "Alakent";
}

$islem = new Deneme;
$islem -> ISIM = "onur"; //değişmedi
$islem -> SOYISIM = "onur"; //değişmedi
//Deneme::ISIM = "sadi";   //hata veriyor değişmiyor
echo Deneme::ISIM . " " . Deneme::SOYISIM;


/* SABİT ŞEKLİNDEKİ ÖZELLİK SINIF DIŞINDAN DEĞİŞTİRİLEMİYOR
DEĞİŞTİRMEK İSTİYORSAK DEĞİŞKEN YANİ PUBLİC DEĞER VERMELİYİZ */


?>
</body>
</html>