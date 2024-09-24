<?php

    include './model/Curriculum.php';
    include './controller/CurriculumCtrl.php';
    session_start(); //deve precedere qualsiasi output

    if (isset($_SESSION['controller'])){
        $controller = $_SESSION['controller'];
    }else{
        $controller = $_SESSION['controller'] = new CurriculumCtrl();
    }
   
    if (isset($_POST['nome']) && isset($_POST['cognome'])){
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];

        $controller->addCurriculum($nome, $cognome);

        var_dump($controller->getcurriculum());
    }
    include './view/form.php';
    include './view/table.php'
?>