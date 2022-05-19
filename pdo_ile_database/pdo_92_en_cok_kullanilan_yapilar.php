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

// Az önceki örneğin ? değil de belirttiğimiz ifadelerle ekleme

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $Hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "HATA KODU : " . $Hatamesaji->getMessage();
die();
}

$GelenISIM   =  'emir yıldırımlar';
$GelenSEHIR  =  'Eskisehir';
$GelenYAS    =   15;

$Ekle = $VeritabaniBaglantisi->prepare("INSERT INTO uyeler (adisoyadi,il,yas) values (:gelenisim,:gelensehir,:gelenyas)"); // ? yerine kendim isim koydum
$Ekle->bindParam("gelenisim",$GelenISIM,PDO::PARAM_STR);     // 1 yazacağıma kendi koyduğum ismi yazdım
$Ekle->bindValue("gelensehir",$GelenSEHIR,PDO::PARAM_STR);   // 2 yazacağıma kendi koyduğum ismi yazdım (mesela burda bindParam yerine bindValue kullandım bir fark olmadı aynı işlevi yapıyorlar)
$Ekle->bindParam("gelenyas",$GelenYAS,PDO::PARAM_INT);       // 3 yazacağıma kendi koyduğum ismi yazdım
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