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

$VeritabaniBaglantisi  =  new PDO("mysql:host=localhost;dbname:veritabani_1;charset=UTF8","root","");

  if($VeritabaniBaglantisi){ // Kontroller Bu Şekilde Kullanılmamalıdır.
      echo "veritabanına bağlantı basariyla kuruldu";
  }
  else{
      echo "veritabanina baglanilamadi";
  }


$VeritabaniBaglantisi  =  null;

?>

</body>
</html>