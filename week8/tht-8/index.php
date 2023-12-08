<?php
    $project_location = "/praktikum-web/BlogWeb";
    $me = $project_location;

    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case $me.'/' :
            require "views/home.php";
            break;
        case $me.'/about' :
            require "views/about.php";
            break;
        case $me.'/contact' :
            require "views/contact.php";
            break;
        default:
            http_response_code(404);
            echo "404";
            break;
    }