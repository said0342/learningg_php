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
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "Veritabi Baglantisi Basarili<br><br><br>";
} 
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Kodu : ". $hatamesaji->getMessage();
die(); 
}

$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler WHERE (yas=35 OR yas=40) AND beceriler LIKE '%java%'",PDO::FETCH_ASSOC); // AND VE OR GÖRÜRSEN BUNLARI PARANTEZLE AYIRMAK LAZIM YOKSA BERABER KULLANILIRSA SIKINTI OLUR PARANTEZ İÇİNE ALINAN ÖNCELİKLİ OLUR ...
if($sorgu){
foreach($sorgu as $satirlar){

echo $satirlar["id"]." | ".$satirlar["isim"]." | ".$satirlar["yas"]." | ".$satirlar["beceriler"]." | ".$satirlar["beceriseviyeleri"]."<br><br>";


}
}
else{
    echo "Sorgu Hatasi";
}



$VeritabaniBaglantisi = null;

?>
</body>
</html>