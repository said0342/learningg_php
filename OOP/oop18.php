<!--
Sınıf içerisinde görünümlük ve erişilebilirlik
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


/*$this ve self:: kullanımı
Aynı class içerisinde tanımlanan özelliği yine o sınıf içerisindeki 
metodda kullanmak istiyorsak normal değişkenler için $this , 
sabitler için self:: kullanılır */


class Bir{

private $isim           =  "Ahmed Said"; //private olmasına rağmen dışarda yazdırdım çünkü önce sınıfın içinde bir fonksiyonda çalıştırdım fonksiyonu da public yaptım o fonksiyonu da dışarıda çağırdım
protected const SOYISIM   =  "Çetiner";

public function Bilgi(){
$metin = $this->isim." ".self::SOYISIM;
return $metin;
}

}

$Nesne = new Bir;

echo $Nesne->Bilgi();





?>
</body>
</html>