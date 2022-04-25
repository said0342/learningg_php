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
  getMessage()    :  MySQL sunucusuna yeni bir bağlantı açma işlemi sırasında olası bir hata ile karşılaşılması durumunda hata açıklama değerini bularak, bulduğu değeri geriye döndürür. (PDOExceptionun özelliği gibidir)
  */


   // php de try catch metodlarını inceliyorum bu ikisi beraber kullanılır açıklamalarını yanlarında yaptım

    try{   //burada hata oluşabilecek kodlarımız bulunmaktadır
    $VeritabaniBaglantisi  =  new PDO("mysql:host=localhost;dbname:veritabani_1","root",""); //silip de altta yazdığım : charset=UTF8
    $VeritabaniBaglantisi -> exec("SET CHARACTER SET UTF8"); // mesela 1 üst satırdaki özellikleri yukarıda tanımlamak istemedik altta bu şekilde de tanımlayabiliyoruz. Ben şu anda charseti tanımladım yukarıdan da siliyorum. "execi sonra detaylı inceleyeceğim"
    echo "veritabani baglantisi kuruldu";
    }
    catch(PDOException $hatamesaji){ //eğer hata oluşursa buraya gel . catch kullanılınca yanında parantez içinde bir parametre kullanmak zorundayız. bir de biz burda PDOExceptionu $hatamesaji adlı değişkene attık ya da farklı bir düşünceyle sınıftan nesne türettik ($hatamesaji = new PDOException )
    // 1 üst satırda PDOExceptionu class gibi gör $hatamesaji da nesne oluyor gibi düşün getMessage() de sanki clasın özelliği gibi düşün sonra yazdır.
    echo "veritabani baglantisi hatasi<br>";
    echo "hata aciklamasi : " . $hatamesaji -> getMessage();
    die(); // hata oluştuysa daha sonraki kodları çalıştırma  
    }

    $VeritabaniBaglantisi  =  null;

?>

</body>
</html>