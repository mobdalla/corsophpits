<?php


include '../model/Curriculum.php';
include '../controller/CurriculumCtrl.php';


$ctrl = new CurriculumCtrl();

$ctrl->addCurriculum('maria','doro');
foreach ($ctrl->getcurriculum() as $cv){
    echo $cv->nome;
}