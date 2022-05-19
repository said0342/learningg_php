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

// bindparam ve bindvalue ile güncelleme yapacağım (? KULLANARAK)

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $HataMesaji){
echo "Veritabani Baglantİ Hatasi<br>";
echo "Hata Kodu : " . $HataMesaji->getMessage();
die();
}

$ISIMM = 'omer hosaf';
$SEHIRYENI = 'YOZGAT';
$SEHIRESKI = 'konya';
$YAS = 70;

$Guncelle = $VeritabaniBaglantisi->prepare("UPDATE uyeler SET il=? , yas=? , adisoyadi=? WHERE il=?");
$Guncelle->bindParam(1,$SEHIRYENI,PDO::PARAM_STR);
$Guncelle->bindParam(2,$YAS,PDO::PARAM_INT);
$Guncelle->bindParam(3,$ISIMM,PDO::PARAM_STR);
$Guncelle->bindParam(4,$SEHIRESKI,PDO::PARAM_STR);
$Guncelle->execute();

if($Guncelle){
    echo "Kayit Guncellendi";
}
else{
    echo "Sorgu Hatasi";
}


$VeritabaniBaglantisi = null;

?>

</body>
</html>