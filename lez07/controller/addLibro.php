<?php

include_once("../model/Libro.php");
include_once("../repos/LibroDAO.php");

/*
var_dump($_POST);
print_r($_POST);
*/
$titolo = $_POST['titolo'];
$pagine = $_POST['pagine'];
$prezzo= $_POST['prezzo'];
$autore = $_POST['autore'];

$libro = new Libro();
$libro->$titolo = $titolo;
$libro->$prezzo = $prezzo;
$libro->$pagine  = $pagine;
$libro->$autore = $autore;

$dao = new LibroDAO();
$dao->addLibro($libro);


print_r($dao->getlibri());
