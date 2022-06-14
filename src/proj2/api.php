<?php
$info = 'Data Unfetched';
$data = 'No data found';

if(isset($_POST))
{
    $info = 'Data fetched successfully!';
    $data = $_POST;
}

$result['data'] = $data;
$result['info'] = $info;

echo json_encode([$result]);