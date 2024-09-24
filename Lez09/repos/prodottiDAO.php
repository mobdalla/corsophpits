<?php

include './Connessione.php';

if(isset($_POST['prodotto'])){

    $p = new ProdottiDAO();
    $p->addProdotto($_POST['prodotto'], $_POST['prezzo']);
    
}

class ProdottiDAO{

    private Connessione $connessione;
    private $conn ;
    public function __construct(){
        $this->connessione = new Connessione();
        $this->conn = $this->connessione->getConn();
    }
    
   
    public function addProdotto($nome, $prezzo){

      //  $st="INSERT INTO prodotto (nome, prezzo) VALUES (:nome, :prezzo)";
       $st =  $this->conn->prepare("INSERT INTO prodotti (nome, prezzo) VALUES (:nome, :prezzo)");
        $st->bindParam(":nome",$nome,PDO::PARAM_STR);
        $st->bindParam(":prezzo",$prezzo, PDO::PARAM_INT);
    
        $st->execute();

    }

}