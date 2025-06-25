<?php
include_once("Studente.php");
include_once("StudenteView.php");
class Registro{
    private $studenti = array(); //[]

    public function addStudente($studente){
        $this-> studenti[ ]= $studente;
        //array_push($this->studenti, $studente);
    }
    public function getStudenti(){
        return $this->studenti;
    }
    public function svuotaRegistro(){
        $this->studenti = [];
    }
    public function getStudenteIncantati(){
        $html = ' ';
        foreach($this->getStudenti() as $studente){
            $html .= $this->getStudenteCard($studente);
        }
        return $html;

    }
    public function getStudenteCard($studente){
        $vista = new StudenteView();
        return $vista->stampaStudente($studente);
    }
    public function riempo(){
        $righe =file('./studenti.csv');
        foreach($righe as $riga){
            $sottoStringa =explode(',',$riga);
            $studenti = new Studente($sottoStringa[0],$sottoStringa[1],$sottoStringa[2]);
            $this->addStudente($studenti);
        }
    }

}