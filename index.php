<?php



echo "Nikolais ir mazīnš gejs"."<br>";

$connection_string = "mysql:host=localhost;port=3306;dbname=blog_tavs_uzvards;user=root;password=;charset=utf8mb4";

$connection = new PDO($connection_string);

$query = $connection->prepare("SELECT * FROM posts");

$query->execute();

$posts = $query->fetchAll(PDO::FETCH_ASSOC);

echo "<ol>";
foreach($posts as $post){

    echo "<li>".$post["title"] . "</li>"."<br>";
}
echo "</ol>";