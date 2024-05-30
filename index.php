<?php

include "./router/function.php";
$routes = require "./router/routes.php";

deploy($_SERVER['REQUEST_URI'],$routes);