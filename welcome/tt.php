<?php

$country = file_get_contents("http://localhost:9130/api/countries.json");
#echo var_dump($country);
header("content-type:application/json");
$countrydeco = json_decode($country,true);
#echo var_dump($countrydeco);
for ($i=0 ; $i<count($countrydeco);$i++){

    $p = $countrydeco[$i];
    echo $p['name'];
    echo "<br>";
   #echo var_dump($p);
}