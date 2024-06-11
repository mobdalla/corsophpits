<?php
session_start();
define("TITOLO","Lancia dadi");
define("IMG_PATH","./dadi/f");
define("EXT",".jpg");
//$title = "Lancia dadi";

$dado1 = rand(1,6);
$dado2 = rand(1,6);
$img_dado1 = IMG_PATH.$dado1.EXT;
$img_dado2 = IMG_PATH.$dado2.EXT;

$ris = '';
if (isset($_SESSION['partite'])){
    $_SESSION['partite']++;
} else {
    $_SESSION['partite']=0; 
    $_SESSION['vittorie']=0;
}
// if statment in php
if ($dado1 == $dado2){
    $ris = "HAI VINTO";
    if (isset($_SESSION['vittorie'])){
        $_SESSION['vittorie']++;
    } 
}else{
    $ris = "NON HAI VINTO";
}





?>