<?php
require "function.php";
$config = require "config.php";
require "database.php";



echo "Nikolais ir mazīnš gejs"."<br>";

echo "<form>";
echo "<input name='id'/>";
echo "<button>Filter by ID</button>";
echo "</form>";


echo "<form>";
echo "<input name='name'/>";
echo "<button>Filter by name</button>";
echo "</form>";


$db = new Database($config);

$query_string = "SELECT * FROM posts";

$params = [];


if(isset($_GET["id"]) && $_GET["id"] != "" ){
    // paņem ieprekšējo vērtību un pieliek WHERE klāt!
    $query_string .= " WHERE id=:id";
    $params[":id"] = $_GET["id"];
}

if(isset($_GET["name"]) && $_GET["name"] != "" ){
    // paņem ieprekšējo vērtību un pieliek WHERE klāt!
    $query_string .= " LEFT JOIN categories ON posts.category_id=categories.id WHERE categories.name = :name";
    $params[":name"] = $_GET["name"];
}
$posts = $db->execute($query_string, $params);



echo "<ol>";
foreach($posts as $post){

    echo "<li>".$post["title"] . "</li>"."<br>";
}
echo "</ol>";