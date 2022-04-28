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
WHERE : MySql sunucusundaki database içerisinde bulunan herhangi bir
tablonun işlem esnasında tüm verilerini işlemek yerine sadece koşula 
bağlı verilerin işlemek istenildiğini belirtmek için kullanılır. 

Örneğin web sayfasında kullanıcı siteye giriş yapmak istiyor
bu where ifadesiyle bir çok kontrol yapılır mesela kullanıcı adını
ahmet0342 girdi bu kullanıcı adı olanları çeker şifreleri karşılaştırır vs.

Bir diğer örnek e ticaret sitesinde filtreleme yapılırken kullanılır
iphone markaları getir diyebiliriz where koşul ifadesi ile o da
isminde iphone geçenleri getirir vs vs ... 
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "Veritabi Baglantisi Basarili<br><br><br>";
} 
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Kodu : ". $hatamesaji->getMessage();
die(); // sistem die() fonksiyonunu gördüğü anda kod okumayı bırakır
}

$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler WHERE yas!=40",PDO::FETCH_ASSOC); // koşul belirtmek için where yazıyoruz işlem yapmak istedğimiz sütun adımızı yazoyoruz sonra "< > <= >= != bunları kullanıyoruz"
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