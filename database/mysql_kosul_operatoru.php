<!--

=         örneğin WHERE Volkan = Volkan   sonuç=true
!=        örneğin WHERE Volkan != Volkan  sonuç=false
<
>
<=
>=
%         konum operatörü   örneğin :
                       Volkan%     başında bolkan olanlar 
                       %Volkan     başında herhangi bir şey olacak sonunda volkan olacak
                       %Volkan%    başında ve sonunda bir şeyler olacak ortada volkan olacak
NOT       olumsuzluk (tam zıttına çevirir)
LIKE      içerisinde (belirtilecek olan değerin aranacak değer içerisinde geçmesi gerektiğini sınamak için kullanılır)   WHERE isim LIKE 'kan%'
IN        içeren (belirtilecek olan değerin aranacak değer işe eşitlik sınaması için kullanılır)  ÖRNEĞİN:WHERE kategoriid IN (8,15,16)  true/false
FIND_IN_SET  ayrılmış halde içeren(belirtilecek olan değerin virgülle ayrılmış yapıya göre içerisinde bulunan değer ile eşitlik sınaması için kullanılır)  ÖRNEĞİN : WHERE FIND_IN_SET (8,Sütun adı)  true/false
BETWEEN   aralığında    aranacak olan değerin aralığını sınamak için kullanılır   ÖRNEĞİN : WHERE ID BETWEEN 4 AND 8
AND = && = VE
OR  = || = VEYA

ÇOK BOYUTLU KULLANIM YAPISI : WHERE(true/false...AND/OR true/false)AND/OR(true/false...AND/OR true/false...)...
ÇOK BOYUTLU KULLANIM YAPISI : WHERE(true/false...&&/|| true/false)&&/||(true/false...&&/|| true/false...)...



-->
