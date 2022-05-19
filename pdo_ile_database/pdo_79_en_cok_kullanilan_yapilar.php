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

$Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler",); 
$Sorgu->execute();
if($Sorgu){
$Kayitsayisi=$Sorgu->rowCount();
        if($Kayitsayisi>0){
             $Kayit=$Sorgu->fetchAll(PDO::FETCH_BOTH);  // fetchAll çoklu veri almada kullanılır , fetchAll(Burayı boş da bırakabilirim içine alma metodu(FETCH_BOTH gibi) da yazabilirim o bana kalmış)
                 foreach($Kayit as $yaz){
                 echo $yaz["adisoyadi"]." | ".$yaz["yas"]." | ".$yaz["il"]."<br><br>";
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