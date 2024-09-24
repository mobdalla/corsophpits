<?php 

//Scrivi uno script PHP che controlla se una variabile numerica è positiva, negativa o zero e stampa un messaggio appropriato.

$num = -20;
if($num > 0){
    $st="il numero è positivo ".$num;
}elseif($num == 0){
    $st="il numero è zero ";
}else{
    $st="il numero è negativo";
}


echo($st);



?>