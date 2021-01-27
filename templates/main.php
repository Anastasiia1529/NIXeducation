<?php
/**
 * @var $product
 */
?>
<div class="container wrapper">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./Img/banner1.jpg" class="d-block w-100" alt="First slide">
            <p class="carousel-text">ONLY AWESOME STORIES</p>
            <a class="carousel-button">MORE BOOKS</a>
        </div>
        <div class="carousel-item">
            <img src="./Img/banner2.jpg" class="d-block w-100" alt="Second slide">
            <p class="carousel-text">ONLY AWESOME STORIES</p>
            <a class="carousel-button">MORE BOOKS</a>
        </div>
        <div class="carousel-item">
            <img src="./Img/banner3.jpg" class="d-block w-100" alt="Third slide">
            <p class="carousel-text">ONLY AWESOME STORIES</p>
            <a class="carousel-button">MORE BOOKS</a>
        </div>
        <div class="carousel-item">
            <img src="./Img/banner4.jpg" class="d-block w-100" alt="Forth slide">
            <p class="carousel-text">ONLY AWESOME STORIES</p>
            <a class="carousel-button">MORE BOOKS</a>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<main class="container">
    <h1>Popular books</h1>
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
</div>