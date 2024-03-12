<?php
require "function.php";
$config = require "config.php";
require "database.php";



echo "Nikolais ir mazīnš gejs"."<br>";




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
 ?>


<form>
<input name='id'/>
<button>Filter by ID</button>
</form>


<form>

<input name='category'value='<?= ($_GET["category"] ?? '') ?>'/>
<button>Filter by category</button>
</form>

<ol>
<?php foreach($posts as $post){ ?>

    <li> <?= $post["title"] ?> </li><br>
<?php } ?>
</ol>