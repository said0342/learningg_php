<!-- static nedir ne için kullanılır vs -->

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

class Islem{

   public static $isim="ahmed"; //buraya static eklersek classı new ile çağırmadan da içindeki özelliği yazdırabiliriz

}

echo Islem::$isim;  //static ile özellik tanımlarsak da bu şekilde yazdırırız



// STATİC İFADESİ SABİTLERDE ÇALIŞMAZ NORMAL DEĞİŞKEN VE METODLARDA ÇALIŞIR











?>
</body>
</html>