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

---exec() : MySql sunucusuna PDO ile açılmış olan bağlantı dahilinde
yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu
işleminde etkilenen kayıt sayısını bulmak için kullanılır.

---query() : MySql sunucusuna PDO ile açılmış olan bağlantı dahilinde 
yeni bir sorgu işlemi yapmak için kullanılır. Ayrıca istenirse sorgu
işlemi sonucunda dönen tüm veri değerlerini bulur ve bulduğu değerlerden
yeni bir dizi oluşturarak,oluşturduğu dizi değerini geriye döndürür.

query()'de FETC metodları vardır (select işlemleri için)

FETC metodları değerleri bir diziye veya nesneye aktarırlar
   
   FETCH_ASSOC : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarları olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir. 
   FETCH_NUM   : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili veilere sütun sıra numaraları ile erişilir.  
   FETCH_BOTH  : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hem de PHP tarafından otomatik olarak tanımlanır (1,2,3...) ve ilgili verilere ister sütun isimleri ile ister sütun sıra numaraları ile erişilir. 
   FETCH_OBJ   : Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.

*/

// bu sayfada query() ile çalışacağım 

try{
$VeritabaiBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
echo "Veritabanina Baglanti Kuruldu";
}
catch(PDOException $hatamesaji){
echo "Veritabanina Baglanilamadi<br>";
echo "Hata Mesaji : ". $hatamesaji -> getMessage();
die();
}

$sorgu = $VeritabaiBaglantisi->query("SELECT * FROM uyeler_2",PDO::FETCH_ASSOC); //BURDA uyeler_2 den sonra PDO::FETCH_ASSOC yazdım şimdilik bir şey ifade etmiyor gibi görünüyor ama ilerde görücem ki o olmadan tablodan bilgi çekemem yani çok çok önemli bir şey şimdilik sadece ne işe yaradığını bisem yeterli ilerde devamını göreceğim.

echo "<pre>";
print_r($sorgu);
echo "</pre>";

$VeritabaiBaglantisi = null;












?>
</body>
</html>