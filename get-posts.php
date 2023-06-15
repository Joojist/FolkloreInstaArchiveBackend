<?php

// Simulating data retrieval from a database or other source
$posts = [
    [
        'id' => 1,
        'title' => 'Post 1',
        'content' => 'Content of Post 1'
    ],
    [
        'id' => 2,
        'title' => 'Post 2',
        'content' => 'Content of Post 2'
    ],
    [
        'id' => 3,
        'title' => 'Post 3',
        'content' => 'Content of Post 3'
    ]
];

// Convert the posts array to JSON format
$jsonData = json_encode($posts);

// Set the appropriate response headers
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Output the JSON data 
echo $jsonData;
