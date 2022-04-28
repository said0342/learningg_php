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


//AŞŞAĞIDA GÖRECEĞİM METODLAR VERİ OKUMA YÖNTEMLERİDİR !!! 


/*
fetchAll()  : MySql sunucusundaki datbase içerisinde bulunan herhangi bir
tablonun çoğul veri okuma işlemi için query metodu kullanılarak hazırlanmış
olan query(sorgu)'nun verilerini okumak için kullanılır ayrıca istenirse
verilere erişim şekli de belirtilebilir. 
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "VERITABAI BAGLANTISI BASARILI<br><br><br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglantisi Basarisiz<br>";
echo "Hata Mesaji : ".$hatamesaji->getMessage();
die();
}


$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler",PDO::FETCH_BOTH)->fetchAll();  // pdo tanımlamazsak yine fetch_both tanımlar . burda fetchAll() kullandık bu çoklu veri okuma için kullanılır , tüm kişinin verileri için.
if($sorgu){  
    foreach($sorgu as $yaz) {
echo "ID : ".$yaz[0]."<br>";                        
echo "ISIM : ".$yaz["isim"]."<br>";
echo "YAS : ".$yaz["yas"]."<br>";
echo "BECERILERI : ".$yaz["beceriler"]."<br>";
echo "BECERI SEVIYELERI : ".$yaz["beceriseviyeleri"];
echo "<br><br>";
}
}
else{
    echo "Sorgu Hatasi";
}



$VeritabaniBaglantisi = null;

?>
</body>
</html>