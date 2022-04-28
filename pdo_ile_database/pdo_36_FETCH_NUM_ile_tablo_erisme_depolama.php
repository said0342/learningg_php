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


$sorgu = $VeritabaniBaglantisi->query("SELECT * FROM bilgiler",PDO::FETCH_NUM); // PDO::FETCH_...   tanımlamazsak php otomatik olarak FETCH_BOTH tanımlar. 
if($sorgu){
foreach($sorgu as $yaz){
   
    //PDO::FETCH_NUM İLE ALDIĞIMIZ İÇİN VERİLERİ SADECE PHP ' NİN SÜTUNLARA VERDİĞİ NUMARALAR İLE ERİŞEBİLİRİM , SÜTUN İSİMLERİ İLE ERİŞEMEM
echo "ID : ".$yaz[0]."<br>";                        
echo "ISIM : ".$yaz[1]."<br>";
echo "YAS : ".$yaz[2]."<br>";
echo "BECERILERI : ".$yaz[3]."<br>";
echo "BECERI SEVIYELERI : ".$yaz[4];
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