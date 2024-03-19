<?php require "components/head.php" ?>

    <?php require "components/navbar.php" ?>

    <h1>Nikolais ir vismilzīgākais gejs<sup>2345</sup></h1>
<div > 
    <form>
    <input name='id' class="border-2 border-black">
    <button >Filter by ID</button>
    </form>


    <form>
    <input  name='category'value='<?= ($_GET["category"] ?? '') ?>'/>
    <button >Filter by category</button>
    </form>
</div>
    
    <ol>

    <?php foreach($posts as $post){ ?>

        <li> <?= $post["title"] ?> </li><br>
    <?php } ?>
    </ol>
<?php require "components/footer.php" ?>
