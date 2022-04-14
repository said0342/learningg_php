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

/*
GÖRÜNÜRLÜKLE ALAKALI METODLAR
public      :  GENEL(her yerden erişilsin)
private     :  ÖZEL(sadece sınıf içinden erişilsin)
protected   :  KORUMALI(sınıf içerisinden ve ilgili sınıftan kalıtım yoluyla türeyen alt sınıflardan erişilsin)

ERİŞİM TÜRLERİ İLE ALAKALI METODLAR
static      :  Sabit (Sınıf içerisindeki özellik veya metoda sınıf çalıştırılmadan ($a = new Class) erişilsin istiyorsak kullanılır)

$this       :  Bu sınıfta şeklinde sınıfı işaret etmek için kullanılır.
self::      :  Kendi sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
parent::    :  Ebebeyin sınıfımda şeklinde sınıfı işaret etmek için kullanılır.
*/



/****PUBLİC ****/


class Bir{

public $isim           =  "Ahmed Said";
public const SOYISIM   =  "Çetiner";

public function Bilgi(){
$metin = "A DAN Z YE PHP EĞİTİM SETİ";
return $metin;
}

}

$Nesne = new Bir;

echo $Nesne->isim." ".Bir::SOYISIM."<br>".$Nesne->Bilgi();

//yazdırdı herhangi bir sıkıntı olmadı




?>
</body>
</html>