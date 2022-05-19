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
catch(PDOException $hata){
echo "Veritabani Baglanti Hatasi<br>";
echo "HATA MESAJI:".$hata->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->prepare("SELECT adisoyadi , il AS SEHIR FROM uyeler",);  // bu şekilde de yapılabilir * yazınca tüm sütunlara erişebiliyoruz ama sütun adı yazarsak sadece yazdığım sütuna erişebilirim
$Sorgu->execute();                                       // mesela il adlı sütuna takma ad taktım takma adımın ismini de SEHIR koydum sonra takma adla erişebilirim                          
if($Sorgu){
$Kayitsayisi=$Sorgu->rowCount();
        if($Kayitsayisi>0){
             $Kayit=$Sorgu->fetchAll(PDO::FETCH_BOTH); 
                 foreach($Kayit as $yaz){
                 echo $yaz["adisoyadi"]." | ".$yaz["SEHIR"]."<br><br>";
                 }
        }
        else{
            echo "Kayit Yok";
        }
}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>
</body>
</html>