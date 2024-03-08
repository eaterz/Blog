<?php
require "function.php";
$config = require "config.php";
require "database.php";



echo "Nikolais ir mazīnš gejs"."<br>";

$db = new Database($config);

$posts = $db->execute("SELECT * FROM posts");

echo "<ol>";
foreach($posts as $post){

    echo "<li>".$post["title"] . "</li>"."<br>";
}
echo "</ol>";