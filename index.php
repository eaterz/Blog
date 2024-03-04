<?php
require "function.php";
require "database.php";


echo "Nikolais ir mazīnš gejs"."<br>";

$db = new Database();

$posts = $db->do();
echo "<ol>";
foreach($posts as $post){

    echo "<li>".$post["title"] . "</li>"."<br>";
}
echo "</ol>";