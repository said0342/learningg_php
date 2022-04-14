<!--
Sınıf içerisindeki public metodlara sınıf dışından parametre
gönderme ve değerlerini alma.
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
public function Test($isim,$soyisim){
$metin="Merhaba ".$isim." ".$soyisim." Nasılsın";
return $metin;
}
}

$islem = new Deneme;

echo $islem -> Test("Ahmed Said","Çetiner");



?>
</body>
</html>