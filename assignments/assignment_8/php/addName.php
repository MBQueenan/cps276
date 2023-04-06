<?php

$data = json_decode($_POST['data']);


$response = (object)[
    'masterstatus'=>'success',
    'msg'=>$data->name
];

echo json_encode($response);
?>