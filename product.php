<?php

require_once 'includes/connect.php';

$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `products` WHERE `id` = '$product_id'");
$product = mysqli_fetch_assoc($product);


include 'includes/header.php';

?>

<!-- Страница товара -->

<body>
    <div class="container">
        <div class="product_page">
            <div class="product_img">
                <img src="<?= $product['image'] ?>" alt="product">
            </div>
            <div class="product_info">
                <h2><?= $product['title'] ?></h2>
                <p class="price">Цена: <?= $product['price'] ?> ₽</p>
                <button class="product_button">Добавить в корзину</button>
            </div>
        </div>
        <div class="product_discription">
            <h2>Описание</h2>
            <p><?= $product['discription'] ?></p>
        </div>
    </div>

    <?php

    include 'includes/footer.php';

    ?>