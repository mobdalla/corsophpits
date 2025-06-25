<?php 

include_once('Registro.php');
include_once('Studente.php');
class StudenteView {
    public function stampaStudente($studente){

        $vista ='<div class ="card">';

        $vista .= '<h2>'. $studente->nome . ' '. $studente->cognome . '</h2>';



        $vista .= '</div>';
        return $vista;
    }
}