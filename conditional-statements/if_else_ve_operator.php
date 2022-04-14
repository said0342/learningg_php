<?php

//   ?:   ??  bunlar koşullu ifadeler lazım olunca bakılacak. 

$t = date("H"); // saat bulur


/*önce ife girer mi bakar girerse girer girmezse 
else if e girer ona da girmezse else ye girer*/

if($t<"10"){   
    echo "bb";
}

else if($t>=10 && $t<20){
    echo "ab";
}

else{
    echo "cc";
}



?>