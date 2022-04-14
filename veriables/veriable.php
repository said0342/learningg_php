<?php
$x=5; //global değişken

function mytest(){
global $x; 
$y=7; //fonk içinde etkin local bir değişkendir
echo "x degiskenini yazdirmaya calısalim : $x"; //fonk içinde x i yazdıamam çunkü x global yazdırmak istersem de fonk içinde x değişkenini başına global koyarak bir daha tanımlarım...
echo "<br>";
echo "local degiskenim:$y";
echo "<br>";
}


mytest();

echo "x degiskenini disarida yazdirmaya calisalim:$x"; //sıkıntı olmaz çunkü globaldir

echo "lokal degiskeni disarida cagiralim:$y"; //değişken local olduğu için tanımlandığı yerde geçerlidir fonksiyonun içinde yani

echo "<br>";

function mytest2(){
static $a=5;  //normalde fonksiyonu dışarıda 1 kere çağırınca değer eski haline döner dönmesini istemiyorsak static yardımıyla tanıtırız her artırdığımız değer yeni değerimiz olur
echo $a;
$a++;
echo "<br>";
}

mytest2();
mytest2();
mytest2();
?>