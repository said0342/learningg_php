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


//AŞŞAĞIDA GÖRECEĞİM METODLAR VERİ OKUMA YÖNTEMLERİDİR !!! 


/*
query()     : MySql sunucusuna PDO ile açılmış olan bağlantı dahilinde yeni
bir sorgu işlemi yapmak için kullanılır ayrıca istenirse sorgu işlemi
sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden yeni bir
dizi oluşturarak oluşturduğu dizi değerini geriye döndürür.

fetch()     : MySql sunucusundaki datbase içerisinde bulunan herhangi bir
tablonun tekil veri okuma işlemi için query metodu kullanılarak hazırlanmış
olan query(sorgu)'nun verilerini okumak için kullanılır ayrıca istenirse
verilere erişim şekli de belirtilebilir.

fetchAll()  : MySql sunucusundaki datbase içerisinde bulunan herhangi bir
tablonun çoğul veri okuma işlemi için query metodu kullanılarak hazırlanmış
olan query(sorgu)'nun verilerini okumak için kullanılır ayrıca istenirse
verilere erişim şekli de belirtilebilir. 

    FETCH_ASSOC   : Tablonun verilerini okuma işlemi sırasında oluşturulacak
    olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak
    tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
    
    FETCH_NUM     : Tablonun verilerini okuma işlemi sırasında oluşturulacak
    olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır
    ve ilgili verilere sütun sıra numaraları ile erişilir.
    
    FETCH_BOTH    : Tablonun verilerini okuma işlemi sırasında oluşturulacak
    olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile
    hem de PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili
    verilere ister ürün isimleri ister sütun sıra numaraları ile erişilir.

    FETCH_OBJ     : Tablonun verilerini okuma işlemi sırasında oluşturulcak
    olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak
    tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=veritabani_1;charset=UTF8","root","");
echo "VERITABAI BAGLANTISI BASARILI<br><br><br>";
}
catch(PDOException $hatamesaji){
echo "Veritabani Baglantisi Basarisiz<br>";
echo "Hata Mesaji : ".$hatamesaji->getMessage();
die();
}

// anahtar adı = sütun adı    PHP tarafından oluşmus değerler = 1 , 2 , 3 ...

$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler"); // SELECT -> okuma(read) işlemi yapıyor (SELECT ASLINDA SEÇME İŞLEMİ YAPIYOR İSTEDİĞİM TABLOYU SATIRI FARKETMEZ SEÇİP HAFIZASINDA TUTUYOR ÖRNEĞİN İLERDE GİRİŞ EKRANI YAPARKEN BİLGİLERİ SELECT İLE ALIRIZ KONTROL YAPARIZ AYNI MI DEĞİL Mİ DİYE AYNI İSE GİRİŞ YAPAR AYNI DEĞİLSE GİRMEZ MESELA BUNUN GİBİ ZATEN İLERDE DETAYLI İNCELEYECEĞİM.  
if($sorgu){
//şu anda değer depolandı (dizi oluşturup dizi olarak depolandı unutma query'nin özelliği dizi olarak depolamak)
foreach($sorgu as $yaz){
   
echo "ID : ".$yaz[0]."<br>";                           // ürün sıra numaraları ile de alınabilir (id->1 isim->2 yas->3 beceriler->4 beceriseviyeleri->5 ' de yazılabilir)
echo "ISIM : ".$yaz["isim"]."<br>";
echo "YAS : ".$yaz[2]."<br>";
echo "BECERILERI : ".$yaz["beceriler"]."<br>";
echo "BECERI SEVIYELERI : ".$yaz["beceriseviyeleri"];
echo "<br><br>";
}


}
else{
    echo "Sorgu Hatasi";
}



$VeritabaniBaglantisi = null;

?>
</body>
</html>