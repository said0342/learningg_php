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

// LIKE İFADESİNİ(KOŞULUNU) İNCELEDİM                                                                                                                                      

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "Veritabi Baglantisi Basarili<br><br><br>";
} 
catch(PDOException $hatamesaji){
echo "Veritabani Baglanti Hatasi<br>";
echo "Hata Kodu : ". $hatamesaji->getMessage();
die(); 
}

$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler WHERE isim NOT LIKE '%kan%'",PDO::FETCH_ASSOC);  //LIKE'I AŞŞAĞIDA BELİRTTİM 
/*
LIKE KULLANIMI:
WHERE isim(sütun adı) LIKE '%kan%' -> Bu ifade isim sütununda , başı ve sonunda ne olursa olsun ismin içerisnde kan kelimesi bulunan her kaydı getir demek
WHERE isim(sütun adı) 'kan%' -> Bu ifade isim sütununda , başı kan ile başlayan sonu ne olduğu önemli olmayan kayıtları listeler    
WHERE isim(sütun adı) '%kan' -> Bu ifade isim sütununda , başı ne olursa olsun sonunda kan olan kayıtları listeler
NOT tersi anlamı katar
WHERE isim NOT LIKE '%kan%'  -> içerisinde kan geçmeyen isimleri listeler
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