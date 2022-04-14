<?php

/*
supeglobals=küresel değişken
Php de önceden tanımlanmış bazı değişkenler supergloballerdir.
yani kapsamları ne olursa olsun her zaman erişilebilirler.
ve onlara herhangi bir function class veya dosyadan özel
bir şey yapmak zorunda kalmadan erişebiliriz
$GLOBALS
$_SERVER
$_REQUEST
$_GET
$_POST
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/ 
 
//$GLOBALS *****
/*bu değişkenlere php nin herhangi bir yerinden erişmek için
kullanırız.php tüm global değişkenleri $GLOBALS[index]
adlı bir arrayde depolar,değişkenin adını tutar.*/

$x=12;
$y=7;
 
function add(){
echo $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}

add(); echo "<br>";


//_SERVER *****
/*Headers ,paths ve script konumları hakkında bilgi
tutan bir php süper küresel değiş<kendir*/

echo $_SERVER['PHP_SELF']."<br>"; // şu anda kullandığım programın internettiki localhosttan sonraki halini veriyor mesela learnin-php/superglobals gibi

$indicesServer = array('PHP_SELF', //bunlar php nin sitesindeki _SERVER lar.
'argv',
'argc',
'GATEWAY_INTERFACE',
'SERVER_ADDR',
'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL',
'REQUEST_METHOD',
'REQUEST_TIME',
'REQUEST_TIME_FLOAT',
'QUERY_STRING',
'DOCUMENT_ROOT',
'HTTP_ACCEPT',
'HTTP_ACCEPT_CHARSET',
'HTTP_ACCEPT_ENCODING',
'HTTP_ACCEPT_LANGUAGE',
'HTTP_CONNECTION',
'HTTP_HOST',
'HTTP_REFERER',
'HTTP_USER_AGENT',
'HTTPS',
'REMOTE_ADDR',
'REMOTE_HOST',
'REMOTE_PORT',
'REMOTE_USER',
'REDIRECT_REMOTE_USER',
'SCRIPT_FILENAME',
'SERVER_ADMIN',
'SERVER_PORT',
'SERVER_SIGNATURE',
'PATH_TRANSLATED',
'SCRIPT_NAME',
'REQUEST_URI',
'PHP_AUTH_DIGEST',
'PHP_AUTH_USER',
'PHP_AUTH_PW',
'AUTH_TYPE',
'PATH_INFO',
'ORIG_PATH_INFO') ;

echo '<table cellpadding="10">' ;
foreach ($indicesServer as $arg) {
    if (isset($_SERVER[$arg])) {
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ;
    }
    else {
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ;
    }
}
echo '</table>' ;
echo "<br>"; echo "<br>"; echo "<br>";

?>













































































































































































































?>