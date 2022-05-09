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
DISTINCT : MySql sunucusundaki database içerisinde bulunan herhangi bir
tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna , 
sütunlara ait tekrar eden verilerin sadece ilkini işleme dahil eder 
diğerlerinin işlem dışında bırakılmasını sağlamak için kullanılır.

GROUP BY : MySql sunucusundaki database içerisinde bulunan herhangi bir
tablonun verilerini okuma işlemi sırasında belirtilecek olan sütuna , 
sütunlara ait tekrar eden verilerin gruplandırılmasını sağlamak için
kullanılır.

HAVING   : GROUP BY ile gruplandırma yaparken koşul ya da koşullar 
belirtmek için kullanılır. (WHERE query'de koşullandırmaya yarıyor
HAVING 'da gruplandırmada koşullandırmaya yarıyor).
*/

try{
$VeritabaniBaglantisi=new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritabanina Baglanilamadi<br>";
echo "HATA MESAJİ : ".$hatamesaji->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->query("SELECT il , SUM(yas) AS toplamyas FROM uyeler GROUP BY il",PDO::FETCH_ASSOC); // SUM MIN MAX FALAN DA KULLANILABİLİR SUM YAZDIM MESELA O ŞEHİRDE YAŞAYANLARIN YAŞLARININ TOPLAMLARINI ALDIM 

if($Sorgu){ 
$kayitsayisi = $Sorgu -> rowCount();
if($kayitsayisi>0){
foreach($Sorgu as $satirlar){
echo $satirlar["il"]." | ".$satirlar["toplamyas"]."<br>";
   
echo "<br><br>";

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





