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

 prepare()           :  MySql sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme göre query hazırlamak için kullanılır.
 bindParam()         :  MySql sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme prepare() kullanılarak hazırlanmış olan query'yi derlemek için kullanılır. execute içerisinde derleme yapmayacaksak kullanılır  
 bindValue()         :  MySql sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme prepare() kullanılarak hazırlanmış olan query'yi derlemek için kullanılır. execute içerisinde derleme yapmayacaksak kullanılır  
     PDO::PARAM_BOOL :  Boolean
     PDO::PARAM_NULL :  Null
     PDO::PARAM_INT  :  Integer
     PDO::PARAM_STR  :  String
 execute()           :  MySql sunucusundaki database içerisinde bulunan herhangi bir tabloya yapılacak işleme prepare() kullanılarak hazırlanmış olan query'yi çalıştırmak için kullanılır.
 fetch()             :  MySql sunucusundaki database içerisinde bulunan herhangi bir tablonun tekil veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış , execute() metodu kullanılarak çalıştırılmış ve sonuçları alınmış olan query'nin verilerini okumak için kullanılır. Ayrıca istenilirse verilere erişim şekli de belirtilebilir.  
 fetchAll()          :  MySql sunucusundaki database içerisinde bulunan herhangi bir tablonun çoğul veri okuma işlemi için prepare() metodu kullanılarak hazırlanmış , execute() metodu kullanılarak çalıştırılmış ve sonuçları alınmış olan query'nin verilerini okumak için kullanılır. Ayrıca istenilirse verilere erişim şekli de belirtilebilir.
     FETCH_ASSOC()   :  Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide ilgili tablonun sütun isimleri dizinin anahtarı olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.
     FETCH_NUM()     :  Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere sütun sıra numaraları ile erişilir.
     FETCH_BOTH      :  Tablonun verilerini okuma işlemi sırasında oluşturulacak olan dizide dizinin anahtarları hem ilgili tablonun sütun isimleri ile hem de PHP tarafından otomatik olarak tanımlanır (0,1,2,3...) ve ilgili verilere ister sütun isimleri ile ister sütun sıra numaraları ile erişilir.
     FETCH_OBJ       :  Tablonun verilerini okuma işlemi sırasında oluşturulacak olan nesnede ilgili tablonun sütun isimleri nesnenin özellikleri olarak tanımlanır ve ilgili verilere sütun isimleri ile erişilir.  

*/

try{
$VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=extraegitim;charset=UTF8","root","");
}
catch(PDOException $hata){
echo "Veritabani Baglanti Hatasi<br>";
echo "HATA MESAJI:".$hata->getMessage();
die();
}

$Sorgu = $VeritabaniBaglantisi->prepare("SELECT * FROM uyeler",array(PDO::FETCH_BOTH)); // FETC türünü de belirtmek istersek bu prepare ve exetec ile kullanırken de bu şekilde belirtmemiz gerekiyor
$Sorgu->execute();
// 41 ve 42. satırda yaptığım işlemler (( $VeritabaniBaglantisi->query() )) ifadesiyle aynı işlemi görüyor yani önce prepare ile query hazırlanıyor sonra da execute ile query çalıştırılıyor.
if($Sorgu){
$Kayitsayisi=$Sorgu->rowCount();
        if($Kayitsayisi>0){
             foreach($Sorgu as $Yaz){ // veriler biz belirtmezsek otomatik olarak fetch_both ile tanımlanır. 
                 echo $Yaz["adisoyadi"]." | ".$Yaz[1]." | ".$Yaz["yas"]."<br><br>";
             }
        
        }
        else{
            echo "Kayit Yok";
        }
}
else{
    echo "Sorgu Hatasi";
}

$VeritabaniBaglantisi = null;

?>
</body>
</html>