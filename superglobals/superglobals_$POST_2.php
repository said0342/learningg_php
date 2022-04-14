
<!-- BURADA FORM SAYFASINI DA GÖNDERDİĞİM SAYFAYI DA AYNI
SAYFADA KODLADIM  -->

<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
<!-- FORMUN YANINDAKİ ACTİON KISMINDA YAZDIKLARIM SAYESİNDE AYNI SAYFADA İKİ İŞLEMİ DE YAPABİLDİM -->
<div class="form-group">
<label>Email:</label>    
<input type="email" class="form-control" id="myemail" name="email"> <!--bu hazır bir form şu anlık benim için name önemli-->
</div> 
<!-- input tipini mesela email yazarsak @ işareti girmemizi zorunlu kılar mesela password yazarsak ..... şeklinde gösterir vs --->
<div class="form-group">

<label>Sifreniz:</label>
<input type="password" class="form-control" id="myName" name="sifre"> <!--bu hazır bir form şu anlık benim için name önemli-->
</div>

<button type="submit" class="btn btn-primary">Gönder</button>
</form>


<!-- !!!! BURADA DA LİNK SAYFASINI VE GÖNDERDİĞİM SAYFAYI AYNI SAYFA İÇERİSİNDE YAZDIM -->

<?php


    $ilkdegisken=$_POST['email'];
    $ikincidegisken=$_POST['sifre'];


    echo "mail adresiniz : $ilkdegisken <br> şifreniz : $ikincidegisken";




?>