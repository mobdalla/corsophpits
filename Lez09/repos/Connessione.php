<?php

class Connessione{
    private const DB_NAME="java";
    private const HOST = 'mysql:host=localhost:3306;dbname='.self::DB_NAME;
    private const USER = "root";
    private const PASS = "";

    private $conn = null ;
    public function getConn(){
        if(is_null($this->conn)){
            $this->connetti();
        }
        return $this->conn;
    }

    private function connetti(){
        try {
            $this->conn =new PDO(self::HOST, self::USER, self::PASS);
            echo("Sei Connesso!");
        } catch (PDOException $th) {

                echo $th->getMessage();

        }
    }

}