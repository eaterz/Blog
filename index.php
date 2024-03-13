<?php

echo "Hi";
$url =parse_url($_SERVER["REQUEST_URI"]) ["path"];

if($url == "/"){
    require "controllers/index.php";
}

if($url == "/about"){
    require "controllers/about.php";
}

if($url == "/story"){
    require "controllers/story.php";
}