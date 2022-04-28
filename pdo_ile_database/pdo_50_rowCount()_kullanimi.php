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
rowCount() : MySql sunucusundaki database içerisinde bulunan herhangi bir
tablonun toplam kayıt sayısını bulmak veya işlem yapıldığında etkilenen
kayıt sayısını bulmak için kullanılır.
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritananina Baglanma Hatasi<br>";
echo "HATA KODU : ". $hatamesaji->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler WHERE yas BETWEEN  21 AND 40 ",PDO::FETCH_ASSOC);
 if($Sorgu){
 $kayit_sayisi = $Sorgu -> rowCount(); // KULLANIMI BU ŞEKİLDEDİR ÜSTTEKİ SORGUYU ÇEKERKEN YAPTIĞIM FİLTREYE UYGUN KAÇ TANE KAYIT VARSA SAYABİLEN BİR FONKSİYONDUR
 echo "bilgiler tablosundaki kayit sayisi : ".$kayit_sayisi."<br><br><br>";
 
    if($kayit_sayisi>0)
    {
    foreach($Sorgu as $yaz){
    echo $yaz["id"]." | ".$yaz["isim"]." | ".$yaz["yas"]." | ".$yaz["beceriler"]." | ".$yaz["beceriseviyeleri"]."<br><br>";
    }

    }
    else{
        echo "Hic Kayit Yok";
    }




} 
  else{
     echo "Sorgu Hatasi";
 }

$VeritabaniBaglantisi = null;

?>
</body>
</html>