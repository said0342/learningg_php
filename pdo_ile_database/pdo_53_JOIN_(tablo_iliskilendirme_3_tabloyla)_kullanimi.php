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

JOIN : Tabloları ilişkilendiriyor.Örneğin bir datayı birden fazla tabloda 
tutuyorsak yani bir üye var bu üyeye ait istatistik var sipariş var vs. bir
çok kayıt olabilir ve bunlar ayrı ayrı tabloda olabilir işte alttaki 
terimler küme işlemi gibi işlem yapıyor yani ya kesişen değerler ya sağda kalan
değerler ya da solda kalan değerleri buluyor gibi düşünülebilir detaylarını 
az sonra göreceğiz.



INNER JOIN    : MySql sunucusundaki database içerisinde bulunan herhangi iki
veya daha fazla tablonun eşleşen değerlerinin birbiri ile ilişkilendirilmesi
için kulllanılır.

LEFT JOIN     : MySql sunucusundaki database içerisinde bulunan herhangi iki
veya daha fazla tablonun soldaki tabloya göre birbiri ile ilişkilendirilmesi
için kulllanılır.

RIGHT JOIN    : MySql sunucusundaki database içerisinde bulunan herhangi iki
veya daha fazla tablonun sağdaki tabloya göre birbiri ile ilişkilendirilmesi
için kulllanılır.

NATURAL JOIN  : MySql sunucusundaki database içerisinde bulunan herhangi iki
veya daha fazla tablonun eşleşen değerlerinin birbiri ile otomatik
ilişkilendirilmesi için kulllanılır. 


ALTTAKİLER(USING,ON) DE JOİNLERİN İLİŞKİLENDİRİLMESİNİ YAPIYOR

USING          : MySql sunucusundaki database içerisinde bulunan herhangi iki
veya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında ortak
sütun koşulunu tanımlamak/belirtmek için kullanılır.  

ON             : MySql sunucusundaki database içerisinde bulunan herhangi iki
veya daha fazla tablonun birbirleri ile ilişkilendirilmesi sırasında sütun
koşulunu tanımlamak/belirtmek için kullanılır.

*/




/* 

BU SAYFA HAKKINDA BİLGİ :

BU SAYFADA 3 TABLOYU BAĞLAMAYI YAPTIM

*/

/* NOT : (INNER JOIN'IN SIKINTISI) her tabloda id olduğu için yazdırırken sadece ilk tablonunkini yazdırıyorum hepsininkini yazdırmak
istersem de sorguda * olan yere AS ile takma isim vererek ve uyeler.id siparis.id falan diye tek tek tanımlamak lazım öyle yapınca 
sıkıntı olmuyor onu ben pdo_54 de yapacağım */


try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabani Baglantisi Basarili<br><br><br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglantisi Basarisiz<br><br><br>";
echo "Hata Mesaji : ". $hatamesaji->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->query("SELECT * FROM uyeler INNER JOIN siparisler ON uyeler.id = siparisler.uyeid INNER JOIN istatistikler ON uyeler.id=istatistikler.uyeid",PDO::FETCH_ASSOC); // 3 TABLO BAĞLAMA YAPISI BU ŞEKİLDE OLUYOR

if($Sorgu){
 
 $KayitSayisi = $Sorgu -> rowCount(); 

   if($KayitSayisi>0){
     foreach($Sorgu as $satirbilgi){
     echo $satirbilgi["id"]." | ".$satirbilgi["adisoyadi"]." | ".$satirbilgi["yas"]." | ".$satirbilgi["sehir"]." | ".$satirbilgi["uyeid"]." | ".$satirbilgi["urunadi"]." | ".$satirbilgi["urunfiyati"]." | ".$satirbilgi["uyeid"]." | ".$satirbilgi["siteyegirissayisi"]." | ".$satirbilgi["siparissayisi"]."<br><br><br>"; 
     }


   }
   else{
       echo "Kayit Bulunamadi<br>";
   }




}
else{
    echo "Sorgu Hatasi<br>";
}





$VeritabaniBaglantisi = null;
?>
</body>
</html>