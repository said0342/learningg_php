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

// IN OPERATÖRÜNÜ İNCELEDİM                                                                                                                                      

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "Veritabi Baglantisi Basarili<br><br><br>";
} 
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Kodu : ". $hatamesaji->getMessage();
die(); 
}

$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler WHERE isim NOT IN('serkan','hakan')",PDO::FETCH_ASSOC); 
/*
IN KULLANIMI:
WHERE id IN(3,5,1)   ->  id'si 3 5 1 olanları listeler
WHERE isim IN('ahmed','mehmet')  -> isim sütununda ahmed ve mehmet yazanları listeler
NOT tersi anlamı katar.
WHERE yas IN(40,50)  -> yaşı 40 ve 50 olmayanları getir
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