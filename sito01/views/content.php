<?php

$pagine ="home";
if(isset($_GET['page']) && !empty($_GET['page'] )){
    $pagine = $_GET['page'];
}

switch ($pagine) {
    case 'about':
        # echo pagina 
        echo 'about';
        break;
    case 'contatti':
            # echo pagina 
            echo 'contatti';
            break;
    
    default:
        # code...
        break;
}

?>