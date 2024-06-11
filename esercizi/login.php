<?php

//$username = $_GET['username'] ?? ''; operatore coalesce
$username = isset($_GET['username']) ? $_GET['username']:''; //operatore iteratore
$password = $_GET['password'] ?? 'nobody' ;
//per stampare chiave -> valore : usrname = mus , pasword = 12345
foreach ( $_GET as $chiave => $valore ){

    echo $chiave.": ".$valore;
    echo '<br>';
}

/*
$loggato = checkLogin($username,$password);
function checkLogin($username, $password){
    if ($username=='mus' && $password=='12345'){
        return true;
    }else{
        return false;
    }
}
 if($loggato){
    header("Location:https://www.github.com");
 }else{
    header("Location:https://www.google.com");
 }*/



?>