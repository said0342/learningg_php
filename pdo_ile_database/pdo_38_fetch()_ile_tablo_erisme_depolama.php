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
fetch()     : MySql sunucusundaki datbase içerisinde bulunan herhangi bir
tablonun tekil veri okuma işlemi için query metodu kullanılarak hazırlanmış
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


$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler",PDO::FETCH_ASSOC)->fetch();  // pdo tanımlamazsak yine fetch_both tanımlar . burda fetch() kullandık bu tekil veri okuma için kullanılır tek kişinin verileri(tek satır) için.
if($sorgu){   
echo "ID : ".$sorgu["id"]."<br>";                        
echo "ISIM : ".$sorgu["isim"]."<br>";
echo "YAS : ".$sorgu["yas"]."<br>";
echo "BECERILERI : ".$sorgu["beceriler"]."<br>";
echo "BECERI SEVIYELERI : ".$sorgu["beceriseviyeleri"];
echo "<br><br>";
}
else{
    echo "Sorgu Hatasi";
}



$VeritabaniBaglantisi = null;

?>
</body>
</html>