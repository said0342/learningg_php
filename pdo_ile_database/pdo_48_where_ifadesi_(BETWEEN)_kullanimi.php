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

// BETWEEN OPERATÖRÜNÜ İNCELEDİM                                                                                                                                      

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "Veritabi Baglantisi Basarili<br><br><br>";
} 
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Kodu : ". $hatamesaji->getMessage();
die(); 
}

$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler WHERE yas BETWEEN 35 AND 40",PDO::FETCH_ASSOC); 
/*
WHERE yas BETWEEN 35 AND 40 -> YAŞI 35 VE 40 ARASI OLANLAR 35,40 DAHİL
WHERE yas NOT BETWEEN 35 AND 40 -> NOT'LI HALİ 35 VE 40 ARASI OLMAYANLAR DEMEK

KULLANIŞ ŞEKLİNİ DE YUKARDA GÖSTERDİM
*/
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