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

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $HataMesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "HATA KODU : " . $HataMesaji->getMessage();
die();
}

$Ekle = $VeritabaniBaglantisi->prepare("INSERT INTO uyeler (adisoyadi , il , yas) values ('ismet','seydisehir','80')");
$Ekle->execute();
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