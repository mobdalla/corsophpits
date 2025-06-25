<?php


include_once '../model/Libro.php';
include_once '../repos/LibroDAOn.php';


class Libreria{
    private  $dao;

    function __construct(){
        $this->dao = new LibroDAO();

    }
    public function addLibro($titolo, $pagine, $prezzo, $autore){
        $libro = new Libro();
        $libro->titolo = $titolo;
        $libro->pagine = $pagine;
        $libro->prezzo = $prezzo;
        $libro->autore = $autore;
        $this->dao->addLibro($libro);
    }

    public function  getLibri(){
        $this->dao->getlibri();
    }
}