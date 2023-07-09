<?php
require './api.php';
function chat($query){
    global $key;
    $ch = curl_init();

    $url = 'https://api.openai.com/v1/images/generations';

    $api_key = $key;

    $post_fields = array(
        "prompt" => $query,
        "n" => 1,
        "size" => "512x512"
    );

    $header  = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_key
    ];

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_fields));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        return 'error';
    }
    curl_close($ch);

    $response = json_decode($result);
    return $response->data[0]->url;
}
if(isset($_POST['query'])){
    echo chat($_POST['query']);
}
?>