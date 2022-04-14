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



/****PROTECTED ****/


class Bir{

protected $isim           =  "Ahmed Said";
protected const SOYISIM   =  "Çetiner";

protected function Bilgi(){
$metin = "A DAN Z YE PHP EĞİTİM SETİ";
return $metin;
}

}

$Nesne = new Bir;

echo $Nesne->isim." ".Bir::SOYISIM."<br>".$Nesne->Bilgi();

//yazdırmadı protected olduğu için hata verdi




?>
</body>
</html>