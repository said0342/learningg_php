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

//classlarla ilgili örnek kullanımlar açıklamalarını oop1 de yaptım


class Detay{

public $isim = "volkan";
public const SOYISIM = "alakent"; 
public function Bilgiler(){
 $meslek   =   "bilgisayar muhendisi";
 $sehir    =   "konya";
 $metin    =   "Meslegi : $meslek <br> Memleketi : $sehir";
 return $metin;
}
}

$sonuc = new Detay;

echo $sonuc -> isim." "; 
echo Detay::SOYISIM."<br>";
echo $sonuc -> Bilgiler();


?>
</body>
</html>