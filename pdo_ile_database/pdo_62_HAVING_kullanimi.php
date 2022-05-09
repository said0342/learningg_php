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
$veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritabanina Baglanilamadi";
echo "HATA MESAJİ :".$hatamesaji->getMessage();
die();
}

$sorgu = $veritabanibaglantisi->query("SELECT il , SUM(yas) AS toplamyas FROM uyeler GROUP BY il HAVING toplamyas>40"); // HAWİNG WHERE GİBİ KOŞUL BELİRTİR AMA GROUP BY KULLANDIĞIM İÇİN WHERE YERİNE HAVING KULLANDIM BAŞKA FARKI YOK
if($sorgu){
    $kayitsayisi = $sorgu -> rowCount();
    
    if($kayitsayisi>0){
     
    foreach($sorgu as $satirlar){
        echo $satirlar["il"] . " : " . $satirlar["toplamyas"] . "<br>"; 
    }    



    }
    else{
        echo "Kayit Yok";
    }
}
else{
    echo "Sorgu Hatasi";
}











$veritabanibaglantisi = null;

?>
</body>
</html>