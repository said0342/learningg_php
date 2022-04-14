<?php
require_once("session_start.php");
?>
<?php

$isim=$_POST["isim"];
$soyisim=$_POST["soyisim"];

if(($isim)!="" and ($soyisim)!=""){
$_SESSION["adi"]=$isim;
$_SESSION["sifresi"]=$soyisim;

echo "merhaba $isim $soyisim ". "siteye giris yaptiniz"; echo "<br>";
echo "<a href='a8.php'>cıkıs</a>";
}

else{
echo "lutfen formda herhangi bir bosluk birakmayiniz"; echo "<br>";
echo "<a href='a6.php'>forma dön</a>";

}

?>