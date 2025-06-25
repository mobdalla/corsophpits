<?php 

include_once '../services/Libreria.php';

if (isset($_POST['titolo'])){
    $titolo = $_POST['titolo'];
    $pagine = $_POST['pagine'];
    $prezzo = $_POST['prezzo'];
    $autore = $_POST['autore'];

    $l = new LibreriaRest();
    $l->addLibro($_POST['titolo'],$_POST['pagine'], $_POST['prezzo'], $_POST['autore']);

}
class LibreriaRest{
    private $service;
    public function __construct(){
        $this->service = new Libreria();

    }

    public function getLibri(){

        return $this->service->getLibri();
    }
    public function addLibro($titolo, $pagine, $prezzo, $autore){
        $this->service->addLibro($l);
    }
}