<?php 
include "Studente.php";

$s1 = new Studente();

$s1->nome ='mus';
$s1->setCognome('muh');

echo $s1->getStudente();
?>
 