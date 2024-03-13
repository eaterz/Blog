<?php require "components/head.php" ?>

    <?php require "components/navbar.php" ?>

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
<?php require "components/footer.php" ?>
