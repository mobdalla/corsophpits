
<?php 

include '../repos/Connessione.php';
include_once('../model/Libro.php');
class LibroDAO{

    private $connessione ;


    public $conn ;
    public function __construct(){
        $this->connessione = new Connessione();
        $this->conn =$this->connessione->getConn();

    }
    public function getlibri(){
        $res = $this->conn->query('select * from libro');
        $res->setFetchMode(PDO::FETCH_CLASS,'Libro');
        $libri = [];
        while($record = $res->fetch()){
            $libri[] = $record;
        }
        return $libri;
    }
    public function addLibro(Libro $libro){

        $statement = $this->conn->prepare('insert into libro (titolo, pagine, prezzo , autore) values(:t, :pag, :pre, :au)') ;
        $statement->bindParam(':t',$libro->titolo, PDO::PARAM_STR);
        $statement->bindParam(':pag',$libro->pagine, PDO::PARAM_INT);
        $statement->bindParam(':pre',$libro->prezzo, PDO::PARAM_INT);
        $statement->bindParam(':au',$libro->autore, PDO::PARAM_STR);

        try {
            //code...
            if($libro->titolo == ''){
                echo 'metti titolo';
            }
            $statement->execute();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}