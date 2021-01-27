<?php
/**
 * @var $product
 */
?>
<main class="container">
        <h1>Our books</h1>
    <?php foreach ($product as $prodat) { ?>
        <div class="card col-lg-4" style="width: 18rem;">
            <a href="#"><img src="<?= $prodat["image"] ?>" class="card-img-top" alt="..."></a>
            <div class="card-body">
                <h4 class="card-title"><?= $prodat["title"] ?></h4>
                <p class="card-text"><?= $prodat["author"] ?> </p>
                <p class="card-text"><?= $prodat["price"] ?></p>
            </div>
        </div>

    </main>