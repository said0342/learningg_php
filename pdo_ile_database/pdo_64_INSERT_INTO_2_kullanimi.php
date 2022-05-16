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
INSERT INTO : MySql sunucusundaki database içerisinde bulunan herhangi
bir tabloya yeni bir kayıt satırı ile birlikte verisini de /verilerini de
eklemek için kullanılırç.
*/

try{
$Veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hatamesaji){
echo "Veritbani Baglanti Hatasi."."<br>";
echo "Hata Kodu :".$hatamesaji->getMessage();
die();
}

/*$Ekle = $Veritabanibaglantisi->query("INSERT INTO uyeler (il,adisoyadi,yas) values ('Konya','Ahmed Said Çetiner',19)");
if(!$Ekle){
    echo "Sorgu Hatasi";
}
*/
//else{

$Sorgu = $Veritabanibaglantisi->query("SELECT * FROM uyeler",PDO::FETCH_ASSOC);
if($Sorgu){
$kayitsayisi = $Sorgu -> rowCount();
  if($kayitsayisi>0){       //burada eklediğim kişişle birlikte errana yazdırdım
  
    foreach($Sorgu as $yazdir){
        echo "$yazdir[id]"." | ".$yazdir["adisoyadi"]." | ".$yazdir["il"]." | ".$yazdir["yas"]."<br><br>";
    }
  
  }
  else{
      echo "Kayit Yok";
  }
}
else{
    echo "Sorgu Hatasi";
}

//}

$Veritabanibaglantisi = null;

?>
</body>
</html>