<?php

 class Studente {
    public $nome;
    private $cognome;
    public function setCognome($cognome){
        $this->cognome = $cognome;

    }
    public function getStudente(){
        return $this->nome.' '. $this->cognome;
    }
 }

?>