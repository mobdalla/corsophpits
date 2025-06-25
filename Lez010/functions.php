<?php

require_once './config.php' ;

function errore($codice , $messaggio){
    $data = [
        'status' => $codice,
        'message ' =>$messaggio
    ];
    header('HTTP/1.0 $messaggio');
    return  json_encode($data);
}
function addLibro($libro){
    global $conn ;
    $titolo = mysqli_real_escape_string($conn, $libro['titolo']);
    $pagine = mysqli_real_escape_string($conn, $libro['pagine']);
    $prezzo = mysqli_real_escape_string($conn, $libro['prezzo']);
    $autore = mysqli_real_escape_string($conn, $libro['autore']);
    if(empty(trim($titolo))){
        return errore('422', 'Devi inserire un titolo!');
    }elseif(empty(trim($pagine))){
        return errore('422', 'Devi inserire un numeropagine!');

    }else{
        $query = "INSERT INTO libro(titolo, pagine, prezzo, autore) values ('$titolo', '$pagine', '$prezzo','$autore')";
        $queryres = mysqli_query($conn, $query);
        if($queryres){
            $data = [
                'status' => 201,
                'message ' =>'Risorsa aggiunta con successo'
            ];
            header('HTTP/1.0 '.'201 Create');
            return  json_encode($data);
        }else{
            return errore("500", 'Internal Server Error');
        }
    }
}
function getLibri(){
    global $conn ;
    $query = 'SELECT * FROM libro';
    $eseguiQuery = mysqli_query($conn, $query);
    $res = '';
    if (mysqli_num_rows($eseguiQuery) > 0 ){
    //ci sono libri
        $res = mysqli_fetch_all($eseguiQuery);
    }
    return $res;
}

function getLibro(){

}
function updateLibro(){

}
function deleteLibro(){

}