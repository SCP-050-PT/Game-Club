<?php

require_once 'includes/connect.php';

include 'includes/header.php';

?>

<main>

    <!-- Блок Слайдер -->
    <section class="banner-section page-section">
        <div class="container">
            <div class="banner-section_inner">
                <div class="banner-section_slider">
                    <a class="banner-section_slider-item" href="#">
                        <img class="banner-section_slider-img" src="img/slider/banner-slider1.jpg" alt="slider1">
                    </a>
                    <a class="banner-section_slider-item" href="#">
                        <img class="banner-section_slider-img" src="img/slider/banner-slider2.jpg" alt="slider2">
                    </a>
                    <a class="banner-section_slider-item" href="#">
                        <img class="banner-section_slider-img" src="img/slider/banner-slider3.jpg" alt="slider3">
                    </a>
                    <a class="banner-section_slider-item" href="#">
                        <img class="banner-section_slider-img" src="img/slider/banner-slider4.jpg" alt="slider4">
                    </a>
                </div>
                <a class="banner-section_item sale-item" href="#">
                    <div class="sale-item_top">
                        <p class="sale-item_info">
                            скидка
                        </p>
                        <div class="sale-item_price"></div>
                        <div class="sale-item_price-new">8 490р.</div>
                        <div class=" sale-item_price-old">9 990р.</div>
                    </div>
                    <img src="img/content/sale-1.jpg" alt="banner" class="sale-item_img">
                    <h5 class="sale-item_title">Наушники HyperX Cloud Alpha S</h5>
                    <p class="sale-item_footer">
                        Акция действует до
                        <span>31.12.2022</span>
                    </p>
                </a>
            </div>
        </div>
    </section>

    <!-- Блок Поиск -->
    <section id="search" class="page-section">
        <div class="search ">
            <div class="container">
                <div class="search_inner">
                    <div class="search_tabs">
                        <a class=" tab search_tabs-item tab--active" href="#tab-1">Поиск по номеру</a>
                        <a class=" tab search_tabs-item" href="#tab-2">Поиск по марке</a>
                        <a class=" tab search_tabs-item" href="#tab-3">Поиск по названию товара</a>
                    </div>
                    <div class="search_content">
                        <div id="tab-1" class="tabs-content search_content-item tabs-content--active">
                            <form class="search_content-form">
                                <input class="search_content-input" type="text" placeholder="Введите номер">
                                <button class="search_content-btn" type="submit">искать</button>
                            </form>
                        </div>
                        <div id="tab-2" class="tabs-content search_content-item">
                            <form class="search_content-form">
                                <input class="search_content-input" type="text" placeholder="Введите марку">
                                <button class="search_content-btn" type="submit">искать</button>
                            </form>
                        </div>
                        <div id="tab-3" class="tabs-content search_content-item">
                            <form class="search_content-form">
                                <input class="search_content-input" type="text" placeholder="Введите название товара">
                                <button class="search_content-btn" type="submit">искать</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Блок Категории -->
    <section id="categories" class="categories page-section">
        <div class="container">
            <div class="categories_inner">
                <a  class="categories_item" href="#product-tab-1">
                    <div class="categories_item-info">
                        <h4 class="categories_item-title">Мыши</h4>
                        <p class="categories_item-text">Подробнее</p>
                    </div>
                    <div class="categories_item-img">
                        <img  alt="" src="img/categories/categories-1.jpg">
                    </div>
                </a>
                <a  class="categories_item" href="#product-tab-2">
                    <div class="categories_item-info">
                        <h4 class="categories_item-title">Клавиатуры</h4>
                        <p class="categories_item-text">Подробнее</p>
                    </div>
                    <div class="categories_item-img">
                        <img  alt="" src="img/categories/categories-2.jpg">
                    </div>
                </a>
                <a  class="categories_item" href="#product-tab-3">
                    <div class="categories_item-info">
                        <h4 class="categories_item-title">Наушники</h4>
                        <p class="categories_item-text">Подробнее</p>
                    </div>
                    <div class="categories_item-img">
                        <img  alt=""  src="img/categories/categories-3.jpg">
                    </div>
                </a>
                <a  class="categories_item" href="#product-tab-4">
                    <div class="categories_item-info">
                        <h4 class="categories_item-title">Кресла</h4>
                        <p class="categories_item-text">Подробнее</p>
                    </div>
                    <div class="categories_item-img">
                        <img  alt=""  src="img/categories/categories-4.jpg">
                    </div>
                </a>
                <a  class="categories_item" href="#product-tab-5">
                    <div class="categories_item-info">
                        <h4 class="categories_item-title">Столы</h4>
                        <p class="categories_item-text">Подробнее</p>
                    </div>
                    <div class="categories_item-img">
                        <img  alt=""  src="img/categories/categories-5.jpg"> 
                    </div>   
                </a>
                <a  class="categories_item" href="#product-tab-6">
                    <div class="categories_item-info">
                        <h4 class="categories_item-title">Коврики</h4>
                        <p class="categories_item-text">Подробнее</p>
                    </div>
                    <div class="categories_item-img">
                        <img  alt=""  src="img/categories/categories-6.jpg">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Блок Популярные товары -->
    <section id="products" class="products">
        <div class="container">
            <div class="products_inner">
                <h2 class="product_title">Популярные товары</h2>
                <div class="tabs-wrapper">
                    <div class="tabs products_tabs">
                        <a class="tab products_tab tab--active"  href="product-tab-1">Мыши</a>
                        <a class="tab products_tab"  href="product-tab-2">Клавиатуры</a>
                        <a class="tab products_tab"  href="product-tab-3">Наушники</a>
                        <a class="tab products_tab"  href="product-tab-4">Кресла</a>
                        <a class="tab products_tab"  href="product-tab-5">Столы</a>
                        <a class="tab products_tab"  href="product-tab-6">Коврики для мыши</a>
                    </div>
                    <div class="tabs-container products_container">
                        <div id="product-tab-1" class="tabs-content products_content tabs-content--active">
                            <div class="product-slider">
                                <?php
                                    $products = mysqli_query($connect, "SELECT * FROM `products`");
                                    $products = mysqli_fetch_all($products);
                                    foreach ($products as $product) {
                                ?>
                                    <div class="product-slider_item">
                                        <div class="product-item_wrapper"><!-- product-item_not-available -->
                                            <button class="product-item_basket">
                                                <img src="img/icons/basket_white-icon.svg" alt="">
                                            </button>
                                            <a href="#" class="product-item_notify-link">
                                                <span>Сообщить о поступлении</span>
                                            </a>
                                            <a class="product-item product-item--sale" href="product.php?id=<?= $product[0] ?>">
                                                <p class="product-item_hover-text">
                                                    посмотреть товар
                                                </p>
                                                <img class="product-item_img" src="<?= $product[4] ?>" alt="">
                                                <h4 class="product-item_title">
                                                    <?= $product[1] ?>
                                                </h4>
                                                <p class="price product-item_price">
                                                    <?= $product[2] ?> ₽
                                                </p>
                                                <p class="product-item_notify-text">
                                                    нет в наличии
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                            <!-- <div id="product-tab-2" class="tabs-content products_content">
                            slider-2
                            <div id="product-tab-3" class="tabs-content products_content">
                                slider-3
                            </div>
                            <div id="product-tab-4" class="tabs-content products_content">
                                slider-4
                            </div>
                            <div id="product-tab-5" class="tabs-content products_content">
                                slider-5
                            </div>
                            <div id="product-tab-6" class="tabs-content products_content">
                                slider-6
                            </div>
                        </div>
                        <div class="product_more">
                            <a class="product_more-link" href="#">Показать еще</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php

include 'includes/footer.php';

?>