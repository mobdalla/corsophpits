<?php


class Prodotto{
    private $id;
    private $nome;
    private $prezzo;

    public function &__get($nomeProprieta){
        return $this->$nomeProprieta;
    }
    public function __set($name, $value){
        $this->$name = $value;
    }
}