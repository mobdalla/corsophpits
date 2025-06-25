<?php

require_once './functions.php';

header('Access-Control-Allow-Origin:*');
header('Content-Type:application/json');
header('Access-Control-Allow-Method:GET');
header('Access-Control-Allow-Headers:Content-type, Access-Controò-Allow-Headers, Authorrization, x-request-with');

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod == 'GET'){
    $res = getLibri();
    if(!empty($res)){
        $data = [
            'status' => 200,
            'message ' =>$requestMethod. 'OK',
            'data' => $res
        ];
        header('HTTP/1.0 200 OK');
        echo json_encode($data);
    }else{
    //non ci sono libri
    $data = [
        'status' => 404,
        'message ' =>$requestMethod. 'No resource found'
    ];
    header('HTTP/1.0 404 No resource found');
    echo json_encode($data);
    }
}else{
    $data = [
        'status' => 405,
        'message ' =>$requestMethod. 'method not allowed'
    ];
    header('HTTP/1.0 405 Method Not Allowed');
    echo json_encode($data);
}
