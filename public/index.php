<?php

session_start();

$url =filter_input(INPUT_SERVER, 'PATH_INFO');
$table = require ('../config/routes.php');

if($url === null){
    $url = '/';
}

foreach ($table as $urlRoute => $route):

    if($url === $urlRoute){
        include '../src/Controller/'.$route['file'];
        $route['action']();
    }

endforeach;