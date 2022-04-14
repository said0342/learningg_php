<!--
Sınıf içerisindeki bir private ve protected metodlara sınıf dışından
parametre  gönderme ve değerlerini alma.
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

class Deneme{

private function Test($isim,$soyisim){
$metin="merhaba"." ".$isim." ".$soyisim;
return $metin;
}

}

$islem = new Deneme;

echo $islem->Test("ahmed","cetin"); //HATA

/* Yukarıdaki işlemler hata verir
private ve procted metoda class dışından ne yazdırabiliriz ne de
değiştirebiliriz değiştireceksek ya da yazdıracaksak public 
şeklinde tanımlamamız lazım. */

?>
</body>
</html>