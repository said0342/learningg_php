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

/*** NOT : 1 ÖNCEKİ SAYFADA YAPTIĞIM İŞLEMİN AYNISINI YAPACAĞIM TEK FARK DATABASE İSMİNİ YUKARIDA YAZMAYACAĞIM AŞŞAĞIDA KENDİM BELİRTECEĞİM ***/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;charset=UTF8","root",""); // dbname'i burdan sildim
echo "Veritabani Baglantisi Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "HATA KODU : ".$hatamesaji->getMessage();
die();
}


$SorguGenel = $VeritabaniBaglantisi->query("SHOW TABLES FROM extraegitim"); // buraya dbname'i from yardımı ile ekledim
if($SorguGenel){
foreach($SorguGenel as $tabloadlari){
    $SorguA = $VeritabaniBaglantisi->query("CHECK TABLE extraegitim.$tabloadlari[0]");     //dbname adını ekledim . koydum sonra tablo ismini yaptım
    $SorguB = $VeritabaniBaglantisi->query("ANALYZE TABLE extraegitim.$tabloadlari[0]");    //dbname adını ekledim . koydum sonra tablo ismini yaptım
    $SorguC = $VeritabaniBaglantisi->query("REPAIR TABLE extraegitim.$tabloadlari[0]");    //dbname adını ekledim . koydum sonra tablo ismini yaptım
    $SorguD = $VeritabaniBaglantisi->query("OPTIMIZE TABLE extraegitim.$tabloadlari[0]");   //dbname adını ekledim . koydum sonra tablo ismini yaptım
    
    if(($SorguA==true) and ($SorguB==true) and ($SorguC==true) and ($SorguD==true)){
       echo "Database icindeki $tabloadlari[0] tablosunun bakimi yapildi"."<br>";
    }
    else{
        echo "Sorgu Hatası";
    }
}
}

else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>
</body>
</html>