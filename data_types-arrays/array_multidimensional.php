<?php
//MULTIDIMENSIONAL DİZİLER (ÇOK BOYUTLU DİİZLER) *****

/*
İki boyutlu bir dizi için bir eleman seçmek için iki indekse ihtiyacınız vardır.
Üç boyutlu bir dizi için bir eleman seçmek için üç indekse ihtiyacınız vardır.
*/

/*
İSİM       STOK      FİYAT
volvo      50        750000
bmw        100       500000
toyota     20        300000

bu tabloyu çift boyutlu dizide saklama şekline bakalım:
$cars = array (
  array("volvo",50,750000),
  array("bmw",100,500000),
  array("toyota",20,300000)
);

mesela böyle bir tabloyla işlem yapmak için çok boyutlu (2 boyutlu) dizi kullanabiliriz iki boyutlu dizinin 
2 tane indisi olduğu için ([][]) 1. indisine 0 dan başlayarak yukarıdan aşağıya doğru 0 1 2 ... değerleri verilir , 
2. indisine ise soldan sağa doğru 0 1 2 ... değerleri verilir.
mesela [2][1] değeri bana 20 değerini (toyota stok) verir.
*/

//şimdi yukarıdaki tabloyu yazdıracağım ...

$cars = array(
array("volvo",50,750000),
array("bmw",100,500000),
array("toyota",20,300000)
);

echo $cars[0][0]." marka aractan elimizde ".$cars[0][1]." tane var , fiyatı da ".$cars[0][2]." €"."<br>";
echo $cars[1][0]." marka aractan elimizde ".$cars[1][1]." tane var , fiyatı da ".$cars[1][2]." €"."<br>";
echo $cars[2][0]." marka aractan elimizde ".$cars[2][1]." tane var , fiyatı da ".$cars[2][2]." €"."<br>";
echo"<br>";

// döngü kullanarak da bastırmaya çalışacağım


for($i=0;$i<3;$i++)
{
    
static $b=1;
echo "<p><b>MODEL $b</b></p>";
$b++;
echo $cars[$i][0]."<br>";

    for($j=1;$j<3;$j++)
    {
    echo $cars[$i][$j];
    echo "<br>";
    } 
echo "<br>";
echo "<br>";
}
?>