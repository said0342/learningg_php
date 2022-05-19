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

// bindparam ve bindvalue ile güncelleme yapacağım (? KULLANMADAN)

// bu şekilde çalışıyor


try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $Hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "HATA KODU : " . $Hatamesaji->getMessage();
die();
}

$GelenIsim  =  'Easlı Kocak';
$GelenYas   =  69;
$GelenSehir =  'Afyonkarahisar';
$GelenId    =  5;

$Guncelle = $VeritabaniBaglantisi->prepare("UPDATE uyeler SET adisoyadi='".$GelenIsim."' , yas='".$GelenYas."' , il='".$GelenSehir."' WHERE id='".$GelenId."'");

/*
$Guncelle->bindParam(":isimsoyisim",$GelenIsim,PDO::PARAM_STR);
$Guncelle->bindParam(":yass",$GelenYas,PDO::PARAM_INT);               
$Guncelle->bindParam(":sehir",$GelenSehir,PDO::PARAM_STR);
$Guncelle->bindParam(":ID",$GelenID,PDO::PARAM_INT);
*/

$Guncelle->execute();

if($Guncelle){
            

  echo "Guncellendi";

}
else{
    echo "Sorgu Hatasi";
}


$VeritabaniBaglantisi = null;
?>
</body>
</html>