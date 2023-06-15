<?php
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    //$url = $request->request->get('url');
    //$url = $_POST['url'];

    $options = [
        'http' => [
            'method' => 'GET',
            'header' => 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36'
        ],
    ];
    
    $context = stream_context_create($options);
    $html = file_get_contents('https://www.instagram.com/p/CtWxxX8tIo1/', false, $context);
    
    if ($html === false) {
        http_response_code(500);
        echo 'Error fetching HTML';
    } else {
        header('Content-Type: text/html');
        echo $html;
    }
?>