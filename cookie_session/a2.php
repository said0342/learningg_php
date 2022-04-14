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

$yasam_suresi = time() + (60*5);

/*
setcookie("kullanici_adi","said",$yasam_suresi); 
setcookie("kullanici_soyadi","çetiner",$yasam_suresi); 
setcookie("kullanici_email_adress","ahmed@gmail.com",$yasam_suresi); 
setcookie("kullanici_telefonu","05442544515",$yasam_suresi);

setcookie("sepet_ID","5",$yasam_suresi);
setcookie("sepe_tutari","1250",$yasam_suresi);
setcookie("sepet_taksit_sayisi","6",$yasam_suresi);
setcookie("sepet_odeme_turu","kredi_karti",$yasam_suresi);

echo "<pre>";
print_r($_COOKIE["kullanici"]);
echo "<pre>";
*/

setcookie("kullanici[_adi]","said",$yasam_suresi); 
setcookie("kullanici[_soyadi]","çetiner",$yasam_suresi); 
setcookie("kullanici[_email_adress]","ahmed@gmail.com",$yasam_suresi); 
setcookie("kullanici[_telefonu]","05442544515",$yasam_suresi);

setcookie("sepet[_ID]","5",$yasam_suresi);
setcookie("sepet[_tutari]","1250",$yasam_suresi);
setcookie("sepet[_taksit_sayisi]","6",$yasam_suresi);
setcookie("sepet[_odeme_turu]","kredi_karti",$yasam_suresi);

echo "<pre>";
print_r($_COOKIE["sepet"]);
echo "<pre>";

?>



</body>
</html>