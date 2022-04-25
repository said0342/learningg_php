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
$veritabanibaglantisi = new PDO("mysql:host=localhost;charset=UTF8","root",""); 
echo "Baglanti Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Baglanti Barasisiz<br>";
echo "Hata Kodu : " . $hatamesaji -> getMessage();
die();
}

// ŞİMDİ DE TABLO İÇERİSİNDEKİ VERİLERİ DE ALARAK FARKLI DATABASE İÇİNDE KOPYA OLUŞTURACAĞIZ YAPILIŞ MANTIĞI : veribaglantisini tanımlarkenki dbname ' i siliyoruz , alttaki işlemlerin başına da database ismi ve . ekliyouz
//exec ile tabloyu oluşturup query ile içideki bilgileri alabiliriz

$Sorgutablokopyalama = $veritabanibaglantisi->query("CREATE TABLE veritabani_1.ornekyedek LIKE test.ornek");  

if($Sorgutablokopyalama){          
    echo "Tablo Basariyla Eklendi<br>";
}
else{
    echo "Tablo EKlenemedi";
}
$sorgutabloicerikkopyalama = $veritabanibaglantisi->query("INSERT INTO veritabani_1.ornekyedek SELECT * FROM test.ornek"); //bu sorgu sayesinde tablobun içerikleri de kopyalanıyor INSERT INTO kayıtları yaz demek SELECT FROM da ornekten al diyor

if($sorgutabloicerikkopyalama){
    echo "Tablodaki kayitlar alindi";
}
else{
    echo "kayitlar alinamadi";
}








$veritabanibaglantisi = null;


?>
</body>
</html>