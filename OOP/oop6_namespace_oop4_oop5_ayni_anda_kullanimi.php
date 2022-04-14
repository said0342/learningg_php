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
Mesela bir proje üzerinde 100 kişi çalışabilir bu durumda yazılımcılar
birbirinin tanımladığı class ları çağırabilir ya da aynı adla kendisi de
class oluşturabilir , namespace bu karışıklılığı önlemek için kullanılır
yani detay adında class adı olsun bu urun detayı ve urunler detayı olabilir,
classın başına namespace yazarsak ve sınıf hakkında bilgi vererek 
kullanırsak karışıklılık ortadan kalkmış olur.
*/

include("oop4_ahmed_class.php");    //aynı class adına sahip olan oop4 ve oop5 i dahil ediyorum
include("oop5_ahmed2_class.php");   //aynı class adına sahip olan oop4 ve oop5 i dahil ediyorum

$nesne1 = new \ahmedin_nesneleri\detay;  //kullanırken önce new den sonra '\' koyuyorum sonra namespace ismimi yazıyorum sonra da \ işareti koyup class adını yazıyorum.
echo $nesne1 -> isim."<br>";

$nesne2 = new \ahmed2nin_nesneleri\detay;  //kullanırken önce new den sonra '\' koyuyorum sonra namespace ismimi yazıyorum sonra da '\' işareti koyup class adını yazıyorum.
echo $nesne2 -> ad."<br>";

?>

</body>
</html>