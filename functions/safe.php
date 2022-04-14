<?php
function security($text){  //güvenlik fonksiyonu
$text=trim($text);    //bilgi girerken ortadan başlamaması için çok boşluk bırakamaması için vs
$text=stripslashes($text); // sitemize saldırırken html ve js ile saldıracakalrsa / işaretten kullanmak zorundalar bu fonksiyon bu işareti(/) siler
$text=htmlspecialchars($text); //bu da html ile ilgili özel karakterleri siler
return $text;
}
?>