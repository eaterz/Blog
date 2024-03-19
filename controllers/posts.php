<?php
require "function.php";
$config = require "config.php";
require "database.php";

$page_title = "Posts";


$db = new Database($config);

$query_string = "SELECT * FROM posts";

$params = [];


if(isset($_GET["id"]) && $_GET["id"] != "" ){
    // paņem ieprekšējo vērtību un pieliek WHERE klāt!
    $query_string .= " WHERE id=:id";
    $params[":id"] = $_GET["id"];
}

if(isset($_GET["category"]) && $_GET["category"] != "" ){
    // paņem ieprekšējo vērtību un pieliek WHERE klāt!
    $query_string .= " LEFT JOIN categories ON posts.category_id=categories.id WHERE categories.name = :category";
    $params[":category"] = $_GET["category"];
}
$posts = $db->execute($query_string, $params);
 
require "view/posts.view.php";

