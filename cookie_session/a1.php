<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookkie</title>
</head>
<body>
    
<?php

/*
setcookie()  :  Belirtilecek olan değerler doğrultusunda cookie (çerez) oluşturmak veya silmek için kullanılır.
Parametreler :  1. parametre:çerez adı , 2. parametre:çerez değeri , 3. parametre:çerez yaşam süreci 
*/

$yasam__suresi = time() + 30;

setcookie("kullanici__adi","said",$yasam__suresi); 
setcookie("kullanici__soyadi","çetiner",$yasam__suresi); 
setcookie("egitim__adi","a dan z ye php",$yasam__suresi); 

print_r($_COOKIE);
echo "<br>";

if(isset($_COOKIE["kullanici__adi"])){
echo "kullanici adi : " . $_COOKIE["kullanici__adi"] . "<br>";    
}
if(isset($_COOKIE["kullanici__soyadi"])){
echo "kullanici soyadi : " . $_COOKIE["kullanici__soyadi"] . "<br>";    
}
if(isset($_COOKIE["egitim__adi"])){
echo "egitim adi : " . $_COOKIE["egitim__adi"] . "<br>";    
}

setcookie("kullanici__adi","","0");

 
 
?>

</body>
</html>