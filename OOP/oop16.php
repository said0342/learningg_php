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



/****PRİVATE ****/


class Bir{

private $isim           =  "Ahmed Said";
private const SOYISIM   =  "Çetiner";

private function Bilgi(){
$metin = "A DAN Z YE PHP EĞİTİM SETİ";
return $metin;
}

}

$Nesne = new Bir;

echo $Nesne->isim." ".Bir::SOYISIM."<br>".$Nesne->Bilgi();

//yazdırmadı private olduğu için hata verdi




?>
</body>
</html>