<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>Barber WILD</title>


    <link  href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="import" href="header.html">
    <link rel="import" href="footer.html">
</head>
<body>
    <!--
        Page header
    -->
    <header class="site-header">
        <a href="index.html">
            <div class="site-header__logo">
                Barber WILD
            </div>
        </a>

        <div class="site-header__menu-icon">
            <div class="site-header__menu-icon__middle"></div>
        </div>

        <nav class="main-nav">
            <ul>
                <li>
                    <a href="about.html">
                        О нас
                    </a>
                </li>
                <li>
                    <a href="shop.html">
                        Каталог
                    </a>
                </li>
                <li>
                    <a href="partners.html">
                        Сотрудничество
                    </a>
                </li>
                <!--<li>
                    <a href="promos.html">
                        Найти магазин
                    </a>
                </li>-->
                <!--<li>
                    <a href="cart.html">
                        Корзина
                    </a>
                </li>-->
            </ul>

        </nav>

        <div class="cart">
            <a href="order.html">Оформить заказ</a>
        </div>

        <nav class="secondary-nav">
            <ul>
                <li>
                    <a href="faq.html">
                        Вопрос — ответ
                    </a>
                </li>
                <li>
                    <a href="gallery.html">
                        Галерея
                    </a>
                </li>
                <li>
                    <a href="recomendations.html">
                        Советы
                    </a>
                </li>
                <li>
                    <a href="find.html">
                        Найти магазин
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <!--<script>
        var menuLink = document.querySelector('link[rel="import"][href="header.html"]');
        var menuContent = menuLink.import;
        var menuElement = menuContent.querySelector('.site-header');
        document.body.appendChild(menuElement.cloneNode(true));
    </script>-->

    <!--
        Hero
    -->
    <div class="hero">
        <div class="hero__scene scene">

        </div>

        <div class="hero__text-content">
            <h1 class="hero__title">
                «Barber WILD»
            </h1>
            <p class="hero__motto">
                — то, что нужно для твоей головы
            </p>
            <p class="hero__subtitle">
                Мужская косметика с характером
            </p>
        </div>
    </div>

    <main class="site-main site-main--no-bg">
        <article class="shop-item  shop-item--clay">
            <div class="shop-item__deco "></div>
            <div class="shop-item__image"></div>
            <div class="shop-item__description">
                <h2 class="shop-item__title">
                    Матирующая глина<br> «Barber WILD»
                </h2>
                <div class="shop-item__text">
                     Глина  Barber Wild создана на водной основе, поэтому не только несет пользу здоровью кожи и волос, но и значительно легче смывается водой. Пчелиный воск обладает влагоотталкивающей структурой, а исцеляющая энергия ценного масла арганы благотворно влияет на волосы и кожу головы, насыщая их питательными ингредиентами. Уникальная текстура помады Barber Wild после высыхания придает волосам роскошный матовый оттенок, сохраняющийся в течение всего дня.
                </div>

                <div class="shop-item__buttons">
                    <a href="matt-clay-page.html" class="button  button--right-m">Подробнее</a>
                    <!--<a href="#" class="button  button--red">В корзину</a>-->
                </div>
            </div>
        </article>

        <article class="shop-item  shop-item--oil  shop-item--alt">
            <div class="shop-item__deco"></div>
            <div class="shop-item__image"></div>
            <div class="shop-item__description">
                <h2 class="shop-item__title">
                    Масло для бороды<br> «Barber WILD»
                </h2>
                <div class="shop-item__text">
                    Масло для бороды Barber Wild полностью состоит из высококачественных природных компонентов. Его основу составляют масла касторовых семян, миндаля и косточек винограда. Эти ингредиенты делают волосы послушными, они не колются, не путаются, и укладка становится легкой и приятной. Увлажненная кожа под бородой приобретает особенную мягкость и здоровый внешний вид. 
                </div>

                <div class="shop-item__buttons">
                    <a href="beard-oil-page.html" class="button  button--right-m">Подробнее</a>
                    <!--<a href="#" class="button  button--red">В корзину</a>-->
                </div>
            </div>
        </article>

        <article class="shop-item  shop-item--pomade">
            <div class="shop-item__deco"></div>
            <div class="shop-item__image"></div>
            <div class="shop-item__description">
                <h2 class="shop-item__title">
                    Помада для волос<br> «Barber WILD»
                </h2>
                <div class="shop-item__text">
                    Помада Barber Wild создана на водной основе, поэтому не только несет пользу здоровью кожи и волос, но и значительно легче смывается водой. Пчелиный воск обладает влагоотталкивающей структурой, а исцеляющая энергия ценного масла арганы благотворно влияет на волосы и кожу головы, насыщая их питательными ингредиентами. Уникальная текстура помады Barber Wild после высыхания придает волосам роскошный матовый оттенок, сохраняющийся в течение всего дня.
                </div>

                <div class="shop-item__buttons">
                    <a href="pomade-juicy-page.html" class="button  button--right-m">Подробнее</a>
                    <!--<a href="#" class="button  button--red">В корзину</a>-->
                </div>
            </div>
        </article>

        <article class="shop-item  shop-item--soap  shop-item--alt">
            <div class="shop-item__deco"></div>
            <div class="shop-item__image"></div>
            <div class="shop-item__description">
                <h2 class="shop-item__title">
                    Мыло «Barber WILD»
                </h2>
                <div class="shop-item__text">
                    Мыло для бритья Barber Wild сделано по крафтовому рецепту вручную. Его основу составляют натуральные масла, которые содержат впечатляющее изобилие витаминов А и Е, обеспечивают защиту кожи, насыщают ее влагой, и оказывают великолепный эффект регенерации. Особый ингредиент – белая глина эффективно, но мягко очищает поры, сужая их, а приятный успокаивающий аромат мыла и хорошее настроение способны сделать любой день лучшим.
                </div>

                <div class="shop-item__buttons">
                    <a href="soap-page.html" class="button  button--right-m">Подробнее</a>
                    <!--<a href="#" class="button  button--red">В корзину</a>-->
                </div>
            </div>
        </article>

        <!--<section>
            <video width="320" height="240" controls>
                <source src="./assets/video/promo.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
                Your browser does not support the video tag.
                </video>
        </section>-->
    </main>

    <!--
        Page footer
    -->
    <footer class="site-footer">
        <div class="social">
            <a class="social__icon" href="https://vk.com/barberwild">
                <svg class="social__vk" data-name="ssVk.svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 455.62 304.37">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #847d79;
                            }
                        </style>
                    </defs>
                    <title>ssVk</title>
                    <path class="cls-1" d="M3930.11,1544.92c12.57-16.55,25.43-32.88,37.71-49.65a135.9,135.9,0,0,0,18.38-34.41c2.82-7.87,4.8-15.74,3.33-24.34-1.9-11.19-8.72-17.72-20.09-17.77q-34.78-.16-69.56,0a20.8,20.8,0,0,0-7.5,1.36,43,43,0,0,0-17.68,12.65c-1.72,2.1-3.51,4.56-4.09,7.11-2.54,11.37-7.87,21.5-13.52,31.46-12.4,21.89-27,42.38-41.46,62.91a15.63,15.63,0,0,1-3.68,3.84c-3.94,2.74-8.1,4.08-12.83.71v-6.41q0-46.08,0-92.15c0-2.58,0-5.16-.1-7.73-.76-14.41-9-25.29-22.92-29.11a69.49,69.49,0,0,0-17.57-2.3c-10.89-.11-21.79.42-32.68.91a66.6,66.6,0,0,0-23,5.16c-9.44,4-16.92,10.18-21.3,19.65s-1.4,15.18,8.93,16.83c.39.06.79.09,1.17.17,11.29,2.31,13.94,4.73,13.87,16.68-.16,24,0,48-.11,71.94a24.17,24.17,0,0,1-1.08,6.95c-1.11,3.58-3.52,5.64-8.47,5l-5.21-7.78c-22.58-33.65-41.29-69.18-53.16-108.1-2.48-8.14-4.72-9.72-13.19-9.76q-30.92-.14-61.83-.25a63.16,63.16,0,0,0-6.53.21c-12.32,1.24-19.9,8.59-21.26,20.86a41.47,41.47,0,0,0,2.31,18.69c15.33,42.83,33.07,84.59,55.26,124.38,13.72,24.59,29,48.12,47.64,69.35,12.59,14.36,26.37,27.41,42.74,37.45,15.26,9.36,31.61,15.45,49.71,15.67q22.89.28,45.78,0c13.65-.19,21.87-7.45,24.73-21,3.19-15.05,6.56-30.07,9.85-45.1l1.44-.69c2.49,2.72,5.14,5.3,7.43,8.17,11.48,14.4,23.22,28.62,34.17,43.41,8.11,11,17.75,16.11,31.81,15.51,22.95-1,46-.3,69-.35a36,36,0,0,0,18.14-4.82c12.49-7.19,16.22-20.56,9.11-33.12a71.65,71.65,0,0,0-6.62-9.11q-30.18-37.87-60.41-75.69c-5.4-6.79-5.64-11.11-.69-18.26C3920.52,1557.52,3925.32,1551.22,3930.11,1544.92Z"
                        transform="translate(-3534.41 -1401.06)" />
                </svg>
            </a>
            <a class="social__icon" href="#">
                <svg class="social__fb" data-name="ssFb.svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 197.74 395.09">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #847d79;
                                stroke: #847d79;
                                stroke-miterlimit: 10;
                            }
                        </style>
                    </defs>
                    <title>ssFb</title>
                    <path class="cls-1" d="M1586.63,1734.74V1538.05h-43.39v-67.87h43.36c0-4.23,0-7.64,0-11.05.14-14.29-.21-28.61.63-42.85a107.47,107.47,0,0,1,4.58-24.76c8.59-28.14,29.4-42.31,57.08-47.57a183.28,183.28,0,0,1,29.5-3c19.24-.48,38.49-.19,57.74-.2a18.22,18.22,0,0,1,2.87.52v66.93c-1.95.16-4.14.48-6.34.49-9.92.06-19.83-.1-29.75.09a80.14,80.14,0,0,0-13,1.32c-10.63,2-15.13,6.85-15.45,17.84-.4,13.66-.1,27.33-.1,41.8h65.54l-7.69,68.12H1674.1v196.9Z"
                        transform="translate(-1542.73 -1340.15)" />
                </svg>
            </a>
            <a class="social__icon" href="https://www.instagram.com/barber_wild/">
                <svg class="social__in" data-name="ssIn.svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 393.8 393.8">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: #847d79;
                            }
                        </style>
                    </defs>
                    <title>ssIn</title>
                    <path class="cls-1" d="M2782.69,1340.8H2620.88a116,116,0,0,0-116,116V1618.6a116,116,0,0,0,116,116h161.81a116,116,0,0,0,116-116V1456.79A116,116,0,0,0,2782.69,1340.8Zm-81,293a95.43,95.43,0,1,1,95.43-95.43A95.43,95.43,0,0,1,2701.69,1633.79Zm112-166.55a39.78,39.78,0,1,1,39.78-39.78A39.78,39.78,0,0,1,2813.7,1467.24Z"
                        transform="translate(-2504.89 -1340.8)" />
                </svg>
            </a>
        </div>

        <nav class="footer-nav">
            <ul>
                <li>
                    <a href="about.html">
                        О нас
                    </a>
                </li>
                <li>
                    <a href="shop.html">
                        Каталог
                    </a>
                </li>
                <li>
                    <a href="partners.html">
                        Сотрудничество
                    </a>
                </li>
                <!--<li>
                    <a href="promos.html">
                        Акции
                    </a>
                </li>
                <li>
                    <a href="faq.html">
                        Вопрос — ответ
                    </a>
                </li>
                <li>
                    <a href="gallery.html">
                    </a>
                </li>
                <li>
                    <a href="recomendations.html">
                        Советы
                    </a>
                </li>-->
                <!--<li>
                    <a href="find.html">
                        Найти магазин
                    </a>
                </li>-->
            </ul>
        </nav>
    </footer>

    <script src="./temp/scripts/App.js"></script>
</body>
</html>
