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
  PDO()           :  Kendisine verilen parametreler doğrultusunda , MySQL sunucusuna yeni bir bağlantı açmak için kullanılır.
  PDOException    :  MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hatayı ayıklamak için kullanılır.
  getMessage()    :  MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata açıklama değerini bularak, bulduğu değeri geriye döndürür.
  */

  $VeritabaniHostAdresi     =   "localhost";    
  $VeritabaniKullaniciAdi   =   "root";
  $VeritabaniSifresi        =   ""; 
  $VeritabaniAdi            =   "veritabani_1";

  $VeritabaniBaglantisi     =   new PDO("mysql:host=$VeritabaniHostAdresi;dbname=$VeritabaniAdi;charset=UTF8" ,$VeritabaniKullaniciAdi,$VeritabaniSifresi);
  // bir üst satırda mesela host:localhost  şeklinde değişkenler olmadan da yapabilirdik değişken tanımlamak falan boşuna kod satırı oldu. Zaten pdo_3 de burada bahsettiğim şekilde kullandım...
  
  echo "<pre>";
  print_r($VeritabaniBaglantisi);
  echo "</pre>";
  
  $VeritabaniBaglantisi     =   null;

   ?>
    
</body>
</html>