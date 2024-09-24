<?php

class Studente{

    private $nome;
    private $cognome;
    private $dataNascita;
    private $eta;


    public function __construct($nome, $cognome, $dataNascita){

        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->dataNascita = new DateTime($dataNascita);
    }
    public function setEta(){
        $interval= $this->dataNascita->diff(new DateTime());
        $this->eta = $interval->days;
    }
    public function __get($proprietaDaRitornare){
        return $this->$proprietaDaRitornare;
    }
    public function __tostring(){

        return $this->nome. ' '. $this->cognome.' '. $this->eta;
 
   }

   public function serialize(){
    return json_encode(get_object_vars($this));
   }
}