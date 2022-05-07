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

BURADAKİ ORNEKTE BEN UYELER TABLOSU İLE SİPARİSLER TABLOSUNU YUKARIDAKİ 
METODLARI KULLANMADAN YAPMAYA ÇALIŞTIM UYELERDEN DAHA ÖNCE SİPARİŞ 
VERENLERİ LİSTELEDİK SİPARİŞ SAYISI 0 OLANLARI ALMADIK AMA ÇOK UZUN
SÜRDÜ VE ÇOK ZOR OLDU DİĞER SAYFALARDA BU ORNEĞİ ÜSTTE YAZDIĞIM METODLARLA
YAPACAĞIM DAHA KOLAY VE KISA OLACAK... 

*/



try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabani Baglantisi Basarili<br><br><br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglantisi Basarisiz<br><br><br>";
echo "Hata Mesaji : ". $hatamesaji->getMessage();
die();
}

$SorguA = $VeritabaniBaglantisi->query("SELECT * FROM uyeler",PDO::FETCH_ASSOC);
if($SorguA){
  $kayit_sayisiA = $SorguA->rowCount();
     if($kayit_sayisiA>0)
     {
      foreach($SorguA as $satirlarA){
      $SorguB = $VeritabaniBaglantisi->query("SELECT * FROM siparisler WHERE uyeid = ". $satirlarA["id"],PDO::FETCH_ASSOC);
      
         if($SorguB){
             $kayit_sayisiB = $SorguB->rowCount();
                
                     


                    foreach($SorguB as $satirlarB)
                    {
                    if($kayit_sayisiB>0){
                            echo $satirlarA["id"]." | ".$satirlarA["adisoyadi"]." | ".$satirlarA["yas"]." | ".$satirlarA["sehir"]." ".">>>>>>";    
                            
                    echo $satirlarB["id"]." | ".$satirlarB["uyeid"]." | ".$satirlarB["urunadi"]." | ".$satirlarB["urunfiyati"]."<br><br>";  
                    }
                }   
                
         }
         else{
             echo "Sorgu B Hatasi<br>";
         }      
        }

     }
     else
     {
     echo "Hic kayit bulunamadi<br>";
     }

}
else{
    echo "Sorgu A Hatasi<br>";
}

$VeritabaniBaglantisi = null;
?>
</body>
</html>