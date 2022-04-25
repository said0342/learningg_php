<!--

MYSQL'DE AS , LIMIT VE ORDER BY İFADELERİ

Mysql'de verileri okurken,güncellerken,silerken veya ilişkilendirirken  
bazı durumlara (genellikle) bir takım ek yapılara ihtiyaç duyarız .
Bu ek yapılar kritik önem teşkil edebilmektedir.Çünkü onlarca,yüzlerce,
binlerce hatta milyonlarca veri içeren bir tabloda okuma,güncelleme,
silme ve ilişkilendirme işlemleri tamamen hatasız ve yazılımcının 
isteği doğrultusunda olması gerekir. Örneğin;

Tablolar birbirine bağlandığında/ilişkilendirildiğinde (join) genellikle
bir veya birden fazla sütunun isimlei her bir tabloda aynı şekilde 
yazılmış olabileceğinden dolayı aynı sütun isimleri yazılımcının falzsıyla
yazılımıcının kafasını karıştıracak ve doğal olarak yüksek ihtimalle
hataya sebebiyet verecektir.

Ya da 10000 adet veri içeren bir tablonun içerdiği veriler ekrana 
çekileceğinde hepsinin tek bir sayfada listelenmesi ya da tek bir düzenle
listelenmesi,korkunç bir görünüm,aşırı yavaşlık,büyük trafik kullanımı,
tam bir kargaşa ve kullanıcı kaybı demektir . İşte bu gibi durumlarla
karşılaşmamaız için MySql'in çok önemli üç ifadesi devreye giriyor.

AS , LIMIT , ORDER BY  . Bu ifadeleri incelersek ;
 

{ ***1***
AS : MYSQL sunucusundaki database(veritabanı) içerisinde bulunan herhangi
bir tablonun belirtilecek olan herhangi bir sütuna alias(takma ad) atamak
için kullanılır.
Örneğin: 

SELECT id AS Kimlik
(işlem sayesinde artık:
id isimli sütuna kimlik ismiyle erişilebilecektir)

SELECT id AS Kimlik , isim AS Kullaniciismi,soyisim AS KullaniciSoyismi
(işlem sayesinde ardık: 
-id isimli sütuna Kimlik
-isim isimli sütuna Kullaniciismi
-soyisim isimli sütuna da KullaniciSoyismi isimleriyle erişilebilmektedir)

SELECT sum(puan) AS KullanicininEnYüksekPuani
(işlem sayesinde artık:
puan isimli sütunun toplamına KullanicininEnYüksekPuani ismyile erişilebilir)

SELECT min(puan) AS kullanicidusukpuan , max(puan) AS kullaniciyüksekpuan
(işlem sayesinde artık:
puan isimli sütunun en düşük değerine kullanicidusukpuan ismiyle
puan isimli sütunun en yüksek değerine kullaniciyüksekpuan ismiyle erişilebilir)
}


{ ***2***
LIMIT : MySQL sunucusundaki database(veritabanı) içerisinde bulunan 
herhangi bir tablonun işlem esnasında tüm verilerini işlemek yerine
sadece belirtilen adet veya aralıklar kadar işlemek istenildiğini
belirtmek için kullanılır.
Örneğin:

LIMIT 10
(istenilen işlemde ilk kayıtları başlatılarak , 10 adet kayıt işleme
tabi tutulacak anlamına gelir . Sonuç : 1,2,3,4,5,6,7,8,9,10)

LIMIT 25,6
(istenilen işlemde 10. kayıttan başlanılarak , 10 adet kayıt işleme
tabi tutulacak anlamına gelir . Sonuçlar : 25,26,27,28,29,30)
}


{ ***3***
ORDER BY : Mysql sunucusundaki database(veritabanı) içerisinde bulunan 
herhangi bir tablonun verilerine işlem esnasında hangi sıra/sıralar
dahilinde erişilmek istenildiğini belirtmek için kullanılır. İki farklı
parametreden birinin yazılması gerekmektedir. Bu parametreler ASC ve DESC'dir.
ASC , a'dan z'ye , küçükten büyüğe sıralama yapar.
DESC , z'den a'ya , büyükten küçüğe sıralama yapar. 
Örneğin:

ORDER BY id ASC
(istenilen işlemde id sütununa göre bir sıralama yapılacağı ve bu 
sıralamanın küçükten büyüğe olarak yapılacağı anlamına gelir.
Sonuc 1,2,3,4,5,6.... gibi)

ORDER BY id DESC
(istenilen işlemde id sütununa göre bir sıralama yapılacağı ve bu 
sıralamanın büyükten küçüğe olarak yapılacağı anlamına gelir.
Sonuc 6,5,4,3,2,1.... gibi)

ORDER BY isim ASC
(istenilen işlemde isim sütununa göre bir sıralama yapılacağı ve 
bu sıralamanın a'dan z'ye yapılacağı anlamına gelir.
Sonuc : Hakan,Onur,Volkan)

ORDER BY isim DESC
(istenilen işlemde isim sütununa göre bir sıralama yapılacağı ve 
bu sıralamanın z'den a'ya yapılacağı anlamına gelir.
Sonuc : Volkan,Onur,Hakan)

ORDER BY isim ASC,bakiye ASC
(istenilen işlemde önce isim sütununa göre bir sıralama yapılacağı ve 
bu sıralamanın a'dan z'ye yapılacağı,ayrıca bakiye sütununun da sıralama
yapılması gerektiğini ve bu sıralamanın da küçükten büyüğe olarak 
yapılacağı anlamına gelir.
Sonuc : Hakan 0,Hakan 700,Hakan 1500,Onur 300,Volkan 700,Volkan 1500)

ORDER BY bakiye ASC,isim DESC
(istenilen işlemde önce bakiye sütununa göre bir sıralama yapılacağı 
ve bu sıralamanın büyükten küçüğe yapılacağı , ayrıca isim sütununun da
sıralama yapılması gerektiği ve bu sıralamanın da z'den a'ya yapılacağı
anlamına gelir
Sonuc : 0 Hakan,300 Onur,700 Volkan,700 Hakan,1500 Volkan,1500 Hakan)
}



-->