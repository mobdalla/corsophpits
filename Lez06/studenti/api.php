<?php


include('Registro.php');

$ctrl = new Registro();

$ctrl->riempo();

$studentiJson = [];
$studenti = $ctrl->getStudenti();
foreach($studenti as $studenti){
    $studentiJson[]=$studenti->serialize();
}
header["application/json"]
echo json_encode($studentiJson);
