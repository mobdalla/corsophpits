<?php 

    $page = 'home';

    if(isset($_GET['page']) && !empty($_GET['page'])){
        $page=$_GET['page'];
    }
    //routing - instradamentio
    switch ($page) {
        case 'galleria':
            # code...
            include './views/gallery.php';
            break;
        case 'contatti':
                # code...
                include './views/contatti.php';
                break;
        default:
            # code...
            include './views/home.php';
            break;
    }
?>

