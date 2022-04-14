<!--
Classlarda yapıcı metodlara parametre gönderme , değerleri alma
Uyarı : Yıkıcı metodlara parametre gitmez
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
public function __construct($HostBilgisi="localhost",$VeriTabaniKullaniciAdi="volkanalakent",$VeriTabaniKullaniciSifresi="volkan1980",$VeriTabaniAdi="e-ticaret") //parametreleri burada da atayabiliriz
{
$metin = "Gelen host bilgisi : ".$HostBilgisi."<br>"."Gelen veritabanı kullanıcı adi :" . $VeriTabaniKullaniciAdi."<br>"."Gelen veritabanı kullanıcı şifre : ".$VeriTabaniKullaniciSifresi."<br>"."Gelen veritabanı adı bilgisi : ".$VeriTabaniAdi."<br>";    
echo $metin;
}

}

$yaz = new Deneme; 
echo "<br>";
$yaz = new Deneme("crohome","",null,"blog-site"); //bura da parametreleri değiştirebiliyorum ya da içini boşaltabiliyorum



?>
</body>
</html>