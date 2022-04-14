<!--
Php de __construct ve __destruct komutlarını işleyeceğiz
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

/*
__construct()  :  Belirtilecek olan sınıfa , yapıcı metod tanımlamak 
için kullanılır.

__destruct()   :  Belirtilecek olan sınıfa , yıkıcı metod tanımlamak
için kullanılır.
*/



/*
KULLANIMI
__construct ve __destruct özel metodlardır bunlar class çalışınca 
extra çağırılmaya ihtiyat duymadan çalışırlar. Yapıcı metod olan 
__construct önce çalışır sonra kendi yazdığımız özellikler ve metodlar
çalışır en son hepsi bitince yıkıcı metod olan __destruct çalışır.

__construct ve __destruct classın içinde istediğimiz her yerde 
kullanılabilir ama ben duzenli olması için __construct u classın
başında , __destructu da classın sonunda kullanacağım
*/


class Deneme{
    
    public function __construct()
    {
    echo "Sinif calisti ve yapici metod devreye girdi.<br>";    
    }


    public $isim = "Volkan";
    public $soyisim = "Alakent";

    public function yaz(){
    $metin = "A dan Z ye PHP Egitim Seti";
    return $metin;
    }


    public function __destruct()
    {
    echo "Sinif icerisindeki tum ozellik ve metodlarin calismasi tanimlandigi icin yikici metod devreye girdi";    
    }

} 

$islemyap = new Deneme;

echo $islemyap->isim." ".$islemyap->soyisim." ".$islemyap->yaz()."<br>";


?>
</body>
</html>