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

// Bir önceki sayfadaki ekleme örneğini execute içerisinde yapacağız

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $HataMesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "HATA KODU : " . $HataMesaji->getMessage();
die();
}

$Ekle = $VeritabaniBaglantisi->prepare("INSERT INTO uyeler (adisoyadi , il , yas) values (?,?,?)");  // ? koyduk 3 tane altta da değerlerini yazdık
$Ekle->execute(['kazım','bozkır','35']);  // execute içerisinde de bu şekilde satır yani 1 kişi ekleyebiliriz...
if($Ekle){
$KayitSayisi=$Ekle->rowCount();
if($KayitSayisi>0){
echo "Eklendi";
}
else{
    echo "Kayit Yok";
}
}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = NULL;

?>
</body>
</html>