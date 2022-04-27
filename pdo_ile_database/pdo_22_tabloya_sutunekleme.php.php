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

// BU SAYFADA TABLOYA SÜTUN EKLEME İŞLEMLERİNİ YAPIYORUM (ADD)

try{
$veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabani Baglantisi Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglantisi Basarisiz<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}

$SorguA = $veritabanibaglantisi->query("ALTER TABLE uyeler_2 ADD babaadii  smallint(4) NOT NULL AFTER id"); // kullanımı bu şekilde ALTER TABLE sabit önce tablo adi sonra add sonra sütun adı sonra özellikleri en son da nereye eklemek istediğin (hiç bir şey yazmazsam en sonra ekler yani AFTER id yazmasaydım en sona eklerdi)

if($SorguA){
    echo "Sutun basariyla eklendi<br>";
}
else{
    echo "Sorgu Hatasi<br>";
}


$SorguB = $veritabanibaglantisi->query("ALTER TABLE uyeler                 /* Burda da birden fazla sütun ekledim yapılışında bir fark yok araya ',' koyarak 2. sütunumu da ekledim bunların sonunca yer olarak FIRS yazdım yani en başa ekle demek (bir şey yazmasam en sona eklerdi)*/
ADD anneadi varchar(20) CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL FIRST,
ADD siteyemesaj varchar(500) CHARACTER SET UTF8 COLLATE UTF8_GENERAL_CI NOT NULL FIRST
");

if($SorguB){
    echo "Sutunlar eklendi";
}
else{
    echo "Sorgu Hatasi";
}



$veritabanibaglantisi = null;

?>
</body>
</html>