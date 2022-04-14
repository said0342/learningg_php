<!--
Classlarda yapıcı metodlara parametre gönderme , değerleri alma
Uyarı : Yıkıcı metodlara parametre gitmez

Parametre:fonksiyon içindeki bilgilere denir örneğin:
function toplama($a,$b) diye bir fonksiyon yazdım burda fonksiyon parametreleri $a ve $b ' dir.
-->

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

class Deneme{
public function __construct($HostBilgisi,$VeriTabaniKullaniciAdi,$VeriTabaniKullaniciSifresi,$VeriTabaniAdi)
{
$metin = "Gelen host bilgisi : ".$HostBilgisi."<br>"."Gelen veritabanı kullanıcı adi :" . $VeriTabaniKullaniciAdi."<br>"."Gelen veritabanı kullanıcı şifre : ".$VeriTabaniKullaniciSifresi."<br>"."Gelen veritabanı adı bilgisi : ".$VeriTabaniAdi."<br>";    
echo $metin;
}

public function toplama($a,$b)
{
$k=$a+$b;
return $k;    
}

}
/*
Normalde fonksiyona parametre gönderirken fonksiyon ismini yazdıktan sonra
'()' içine parametre varsa yazarız mesela topla($t,$y) gibi ...
Ama yapıcı metodda yani __construct'ın parametrelerini classı tanımlarken  
Class ismini çağırdığımız yere parantez açıp kapatıp onun içine yazarız
örneğin:
$oku = new Deneme("a","b");  gibi yazılır çünkü yapıcı metod class
çağırılır çağırılmaz tanımlanır extra çağırmayız ama normal fonksiyonda
çağırma işlemi yaparız yaptığımız yerde parametre varsa yazarız.
*/
$yaz = new Deneme("localhost","volkan_alakent","volkan1980","Eticaret"); //açıklamasını üstte yaptım (bu parametreler yapıcı yani __construct metodunun parametreleri)
echo "<br>"; //html kodlarının php içinde çalışması için başına echo yazmak ve "" içinde yazmak gerekiyor.
echo $yaz->toplama(5,6);


?>
</body>
</html>