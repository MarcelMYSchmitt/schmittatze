<?php

$request = $_SERVER['REDIRECT_URL'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/home.html';
        break;
    case '' :
        require __DIR__ . '/views/home.html';
        break;
    default:
        require __DIR__ . '/views/404.html';
        break;
}
