<?php

//RECURSİVE FONK

function message($number){
if($number <= 5){
    echo '<ul class="list-group list-group-flush">';
    echo "$number - php ile
    recursive yapılar</li>";
    echo '</ul>';
    message($number+1);  //fonksiyon içinde yine kendini çağırıyor bu yapıya recursive yani özyinelemeli fonksiyon denir
}

}

message(1);


//İÇ İÇE FONK

function anafonksiyon(){

   function altfonksiyoon(){
       echo 'ben ana fonk içindeki alt fonksiyonun metniyim';
   }

echo 'ben ana fonksiyonun metniyim';

}

/*anafonksiyonu çağırınca altfonksiyon da otomatik çağırılmaz onu da
ayrıca çağırmak gerekir. ama anafonksiyonu çağırmadan da altındaki 
herhangi bir fonksiyonu çağıramayız*/

anafonksiyon();
echo "<br>"; 
altfonksiyoon();



?>