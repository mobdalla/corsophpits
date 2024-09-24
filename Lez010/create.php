<?php

require_once './functions.php';

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Headers:Content-type, Access-Control-Allow-Headers, Authorrization, x-request-with');

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod == 'POST'){
    $inputData = json_decode(file_get_contents("php://input"), true);
    $libro = '';
    var_dump($inputData);
    if(empty($inputData)){
       // header('HTTP/1.0 '.'201 Create');
        $libro= addLibro($_POST);
    }else{
        $libro = addLibro($inputData);
    }
    if($libro['status'] ==  201){
        header('HTTP/1.0 '.'201 Create');
        echo $libro;
    }else{

        header('HTTP/1.0 '.'500 Internal Server Error');
        echo $libro;
    }
    
    
}else{
    $data = [
        'status' => 405,
        'message ' =>$requestMethod. 'method not allowed'
    ];
    header('HTTP/1.0 405 Method Not Allowed');
    echo json_encode($data);
}
