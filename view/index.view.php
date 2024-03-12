<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/index.php">Posts</a>
        <a href="/about.php">About us</a>
        <a href="/story.php">story</a>
    </nav>

    <h1>Nikolais ir vismilzīgākais gejs²</h1>

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
</body>
</html>
