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

// bu işlemleri exec() ile de yapabiliriz exec() ile select yapılmaz ama ben tek tek yapmayacağım yapıldığını bilmem yeterli tek farkı kontrol ederken denk değil mi yapıyoruz (if($sorgu !== false))

try{
$veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=test;charset=UTF8","root","");
echo "Baglanti Basarili<br>";
}
catch(PDOException $hatamesaji){
echo "Baglanti Barasisiz<br>";
echo "Hata Kodu : " . $hatamesaji -> getMessage();
die();
}

// şimdi tablo kopyalama çalışacağız (AYNI DATABASE İÇERİSİNDE KOPYALAMA , PDO_14 DE FARKLI DATABASELER ARASI KOPYALAMA YAPACAĞIM)

$Sorgu = $veritabanibaglantisi->query("CREATE TABLE ornekyedek LIKE ornek"); // BURADA ORNEK TABLOSUNUN YAPISAL OLARAK AYNISINI ORNEKYEDEK TABLOSU OLARAK OLUŞTURDUM AMA DATALAR YANİ İÇERİKLER KOPYALANMADI SADECE TABLOYU YAPISAL OLARAK KOPYALADIM.



if($Sorgu){          
    echo "Tablo Basariyla Eklendi";
}
else{
    echo "Tablo EKlenemedi";
}




$veritabanibaglantisi = null;


?>
</body>
</html>