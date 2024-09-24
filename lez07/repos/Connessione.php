<?php
/**
 * Summary of Connessione
 * database name = java
 * user name = root
 * pass non esiste
 */
class Connessione{

    //le variable che nn cambia sono const(costante)
    private const NOME_DB ="java";
    private const USER ="root";    private const PASS ="";

    private $conn;
    public function getConn(){
        if (is_null($this->conn)){
            $this->conect();
        }
        return $this->conn;
    }
    private function conect(){
        try {
            $this->conn =  new PDO('mysql:host=localhost:3306;dbname='.self::NOME_DB, self::USER, self::PASS);
            //code...
        } catch (PDOException $pDOException) {
            echo ''.$pDOException->getMessage();
        }
    }

    public function disconect(){
        $this->conn = null;
    }
}
