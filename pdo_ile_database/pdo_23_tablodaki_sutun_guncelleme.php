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

// BU SAYFADA TABLOYA SÜTUN DEĞİŞTİRME GÜNCELLEME İŞLEMLERİNİ YAPIYORUM (CHANGE)

try{
$veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabani Baglantisi Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglantisi Basarisiz<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}

$SorguA = $veritabanibaglantisi->query("ALTER TABLE uyeler_2 CHANGE sehir aldigim_not int(10) UNSIGNED NOT NULL");
//Kullanımı yukarıda olduğu gibi tablo adı CHANGE değişecek sütun ismi yeni sütun ismi yeni yapısını belirtebilirsin int char vs. istedğin özelliğini değiştirebilirsin en son da NUT NULL boş bırakılamaz demek 
if($SorguA){
    echo "Sutun basariyla guncellendi<br>";
}
else{
    echo "Sorgu Hatasi<br>";
}





$veritabanibaglantisi = null;

?>
</body>
</html>