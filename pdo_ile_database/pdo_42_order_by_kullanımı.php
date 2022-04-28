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
ORDER BY : MySql sunucusundaki database içerisinde bulunan herhangi
bir tablonun verilerine işlem esnasında hangi sıra veya sıralar 
dahilinde erişilmek istenildiğini belirtmek için kullanılır 
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

$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler ORDER BY isim ASC",PDO::FETCH_ASSOC); // ORDER BY yazdıktan sonra hangi sütuna göre sıralanacaksa onun adını yazıyorum sonra - ASC YAZARSAM A'DAN Z'YE (KÜÇÜKTEN BÜYÜĞE) - DESC YAZARSAM Z'DEN A'YA (BÜYÜKTEN KÜÇÜĞE) - SIRALANIR.

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