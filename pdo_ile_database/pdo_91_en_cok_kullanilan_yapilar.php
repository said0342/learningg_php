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

// Bir Başka Şekilde Ekleme Metodu

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $Hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "HATA KODU : " . $Hatamesaji->getMessage();
die();
}

$GelenISIM   =  'Nazım Akay';
$GelenSEHIR  =  'Eskisehir';
$GelenYAS    =   15;

$Ekle = $VeritabaniBaglantisi->prepare("INSERT INTO uyeler (adisoyadi,il,yas) values (?,?,?)");
$Ekle->bindParam(1,$GelenISIM,PDO::PARAM_STR);
$Ekle->bindParam(2,$GelenSEHIR,PDO::PARAM_STR);
$Ekle->bindParam(3,$GelenYAS,PDO::PARAM_INT);
$Ekle->execute();

if($Ekle){
    echo "Kayit Eklendi";
}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>
</body>
</html>