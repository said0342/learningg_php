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

// FIND_IN_SET OPERATÖRÜNÜ İNCELEDİM                                                                                                                                      

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "Veritabi Baglantisi Basarili<br><br><br>";
} 
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Kodu : ". $hatamesaji->getMessage();
die(); 
}

$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler WHERE FIND_IN_SET('java',beceriler)",PDO::FETCH_ASSOC); 
/*
Bu FIND_IN_SET direk yazdığımız şeyi arıyor mesela java arattık sadece javayı buldu mesela bunu LIKE ile yapmış olsaydık javayı bulurdu bi de javanın geçtiği javascript'i de bulurdu mesela

-WHERE beceriler LIKE '%java%' -> bunu yapsaydık mesela becerilerinde javascript olanlar da gelecekti ama FIND_IN_SET direk kelime arıyor.

UYARI : FIND_IN_SET KULLANMAK İÇİN , İLE AYRILMIŞ OLMALARI GEREKİYOR (direk kelime aradığı için hassas biraz mesela becerileri 'motor ustası' aratırken de motor ustası şeklinde aratırsan gelir boşluk dahi önemlidir)

NOT ifadesi yine aynı şekilde kullanılır : not demek tersi demek   kullanımı:  NOT FIND_IN_SET
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