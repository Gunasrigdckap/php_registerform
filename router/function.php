<?php 

function deploy($url,$routes) {

    $uri = parse_url($url);
    $path = $uri['path'];

    if (array_key_exists($path,$routes)) {

        $runFile = $routes[$path];
        $runFile();
    } else {
        echo "Page not found 404 ";
    }

};