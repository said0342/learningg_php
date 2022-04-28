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



/* **BU SAYFADAKİ ÖRNEKTE BİRDEN FAZLA ORDER BY KULLANACAĞIM
(NASIL KULLANILACAĞI 38. SATIRDA VAR)
MESELA İSİME GÖRE SIRALADIM AYNI İSİMDE 50 KİŞİ GELDİ DİĞER
KULLANDIĞIM ORDER BY DA DA YAŞA GÖRE SIRALA DERİM , AHMET ADINA
SAHİP OLANLARI SIRALARKEN YAŞLARINA GÖRE SIRALAR . ORDER BY'LARI
YAZDIĞIM SIRAYA GÖRE DE ÖNCELİK SIRALAMASINI PROGRAM AYARLAR ** */ 

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglanma Sorunu<br>";
echo "Hata Kodu : ".$hatamesaji->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler ORDER BY isim ASC , yas DESC",PDO::FETCH_ASSOC); // isim ASC dedim sonra ',' koydum sonra da yas DESC dedim -> sonuc olarak önce ilk yazdığıma göre sıraladı ismi aynı olanları da yaşlarına göre belitrriğim şekilde sıraladı

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


<!--
    LIMIT ile ORDER BY beraber de kullanılabilir
    öncelik sıralamasına dikkat et önce yazılan
    öncelikli oluyor bu kadar basit düz mantık yani ...

    
    ASC  : KÜÇÜKTEN BÜYÜĞE (A'DAN Z'YE SIRALAMA)
    DESC : BÜYÜKTEN KÜÇÜĞE (Z'DEN A'YA SIRALAMA)  
-->    