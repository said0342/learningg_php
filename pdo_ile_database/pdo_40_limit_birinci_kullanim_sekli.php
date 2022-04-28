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
LIMIT    : MySql sunucusundaki database içerisinde bulunan herhangi
bir tablonun işlem esnasında tüm verilerini işlemek yerine sadece
belirtilen adet veya aralıklar kadar işlemek istenildiğini belirtmek
için kullanılır.
*/

/* SELECT : Verileri seçiyor depoluyor yani okuyor ve depoluyor da
diyebiliriz aynı anlama geliyor zaten */

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglanma Sorunu<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler LIMIT  2",PDO::FETCH_ASSOC); //BURADA LIMIT KULLANDIM LIMIT 2 DEDİM YANİ TABLOYA KAYITLI İLK 2 VERİYİ GETİRDİ. 

if($Sorgu){

foreach($Sorgu as $yaz){
echo $yaz["id"] . " | " . $yaz["isim"] . " | " .  $yaz["yas"] . " | " . $yaz["beceriler"] . " | " . $yaz["beceriseviyeleri"]."<br><br><br>";  

}

}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>
</body>
</html>