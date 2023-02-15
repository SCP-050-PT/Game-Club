<?php

require_once 'includes/connect.php';

include 'includes/header.php';

?>

<body>
    <div class="container">
        <div class="product_list">
            <h1>Список </h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th colspan="2"></th>
                </tr>
                <?php
                $products = mysqli_query($connect, "SELECT * FROM `products`");
                $products = mysqli_fetch_all($products);
                foreach ($products as $product) {
                ?>
                    <tr>
                        <td><?= $product[0] ?></td>
                        <td><?= $product[1] ?></td>
                        <td><?= $product[2] ?>₽</td>
                        <td><a href="update_product.php?id=<?= $product[0] ?>"><img src="img/icons/edit.svg"></a></td>
                        <td><a href="includes/delete.php?id=<?= $product[0] ?>"><img src="img/icons/delete.svg"></a></td>
                    </tr>
                <?php
                }

                ?>
            </table>
        </div>

        <div class="container">
                <div class="form_align">
                    <div class="form">
                        <h2>Добавление товара</h2>
                        <form action="includes/add_product.php" method="post" enctype="multipart/form-data">
                            <div class="form_item">
                                <label for="product_title_area">Название товара</label>
                                <input type="text" name="product_title" id="product_title_area">
                            </div>

                            <div class="form_item">
                                <label for="image">Изображение товара</label>
                                <input type="file" name="image" id="image">
                            </div>

                            <div class="form_item">
                                <label for="discription_area">Описание товара</label>
                                <textarea name="discription" id="discription_area" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form_item">
                                <label for="price_area">Цена товара</label>
                                <input type="number" name="price" id="price_area">
                            </div>
                            <button type="submit">Добавить товар</button>
                        </form>
                    </div>
            </div>
    </div>
</body>
</html>