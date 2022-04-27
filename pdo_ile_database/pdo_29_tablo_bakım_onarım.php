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
CHECK    : MySql sunucusundaki database içerisinde bulunan herhangi bir
tablonun kontrol edilmesi için kullanılır.

ANALYZE  : MySql sunucusundaki database içerisinde bulunan herhangi bir
tablonunçözümlenmesi / analiz edilmesi için kullanılır.

REPAIR   : MySql sunucusundaki database içerisinde bulunan herhangi bir
tablonun onarılması için kullanılır.

OPTIMIZE : MySql sunucusundaki database içerisinde bulunan herhangi bir
tablonun optimize edilmesi için kullanılır.
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabani Baglantisi Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "HATA KODU : ".$hatamesaji->getMessage();
die();
}

// EK YÜK DİYE BİR ŞEY VAR GÜNCELLEME GELİRSE VS VS . EK YÜK ARTAR VERİTABANI YAVAŞLAR AŞAĞIDA GÖSTERDİĞİM BAKIMLARI YAPARIZ EK YÜKÜ SIFIRLARIZ.

// SHOW TABLES'I DA KULLANARAK DATABASE İÇİNDEKİ TÜM TABLOLARIN BAKIMINI FOREACH DÖNGÜSÜ İLE NASIL KISA YOLDAN YAPILDIĞINI GÖSTERMİŞ OLDUM

$SorguGenel = $VeritabaniBaglantisi->query("SHOW TABLES");
if($SorguGenel){
foreach($SorguGenel as $tabloadlari){
    $SorguA = $VeritabaniBaglantisi->query("CHECK TABLE $tabloadlari[0]");   //KULLANIMI BU ŞEKİLDE DÖNGÜYE BAĞLANMASAYDI $tabloadlari[0] yazan yerde uyeler yazacaktık mesela
    $SorguB = $VeritabaniBaglantisi->query("ANALYZE TABLE $tabloadlari[0]");
    $SorguC = $VeritabaniBaglantisi->query("REPAIR TABLE $tabloadlari[0]");
    $SorguD = $VeritabaniBaglantisi->query("OPTIMIZE TABLE $tabloadlari[0]");
    
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