<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title>Barber WILD</title>



    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="./temp/styles/styles.css">
    <link rel="import" href="header.html">
    <link rel="import" href="footer.html">
</head>
<body>
    <!--
        Page header
    -->
    <!--<script>
        var menuLink = document.querySelector('link[rel="import"][href="header.html"]');
        var menuContent = menuLink.import;
        var menuElement = menuContent.querySelector('.site-header');
        document.body.appendChild(menuElement.cloneNode(true));
    </script>-->

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
                <a class="current" href="#">
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
            <!--<li>
                <a href="find.html">
                    Найти магазин
                </a>
            </li>-->
        </ul>
    </nav>

    <div class="cart">
        <a href="order.html">Оформить заказ</a>
    </div>
</header>

    <!--
        Hero
    -->
    <div class="hero  hero--about">
        <div class="hero__scene scene scene--about">

        </div>

        <div class="hero__text-content">
            <h1 class="hero__title">
                Магазин<br> «Barber WILD»
            </h1>
            <!--<p class="hero__text">
                Barber WILD — это не только высококачественные средства ухода за бородой, усами и волосами для настоящих мужчин, но и истинный брутальный дух Дикого Запада. Это то, что мы с особым старанием создали для самих себя — от барбера для барбера, и решили поделиться отличным результатом с вами! 
            </p>
            <p class="hero__text">
                Идея создания мужской косметики Barber WILD пришла в 2015 году. Во время работы два приятеля барбера решили, что существующие средства для волос и бороды недостаточно хороши, и в 2016 году создали собственную линию, которая позволила им проявить свое мастерство в полной мере. Но не только профессиональный барбер — каждый мужчина, который заботится о своем здоровье и облике, может теперь по достоинству оценить качество нашей продукции, а также легко и быстро самостоятельно придать прическе, усам и бороде приятный вид.  
            </p>
            <p class="hero__text">
                Все, что мы делаем — делаем с душой, начиная от бритья и стрижки, и заканчивая укладкой и уходом за бородой и волосами. Сегодня мы производим сертифицированные средства из натуральных высококлассных компонентов, поставляем их в лучшие барбершопы. Мы отлично разбираемся в своей работе, внимательно следим за качеством продукции и развиваем Barber WILD, создавая новые средства и улучшая существующие.
            </p>-->
        </div>
    </div>

<main class="site-main">
    <section class="site-section site-section--catalog">
        <div class="wrapper">
            <header class="site-section__header">
                <h2 class="site-section__title">
                    Наши товары
                </h2>
            </header>
        </div>
        <div class="wrapper wrapper--flex">
            <article class="shop-item-s">
                <div class="shop-item-s__wrap">
                    <div class="shop-item-s__image">
                        <img src="./assets/img/b1_clay_j.png" alt="">
                    </div>
                    <div class="shop-item-s__description">
                        <h2 class="shop-item-s__title">
                            Матирующая глина<br> «Barber WILD»
                        </h2>
                        <p class="shop-item-s__volume">
                            Объем: 3.5 oz. | 100 g.
                        </p>
                        <div class="shop-item-s__buttons">
                            <a href="matt-clay-page.html" class="button  button--right-m">Подробнее</a>
                            <!--<a href="#" class="button  button--red">В корзину</a> -->
                        </div>
                    </div>
                </div>
            </article>
            <article class="shop-item-s">
                <div class="shop-item-s__wrap">
                    <div class="shop-item-s__image">
                        <img src="./assets/img/oil.png" alt="">
                    </div>
                    <div class="shop-item-s__description">
                        <h2 class="shop-item-s__title">
                            Масло для бороды<br> «Barber WILD»
                        </h2>
                        <p class="shop-item-s__volume">
                            Объем: 0.85 oz. | 25 ml.
                        </p>
                        <div class="shop-item-s__buttons">
                            <a href="beard-oil-page.html" class="button  button--right-m">Подробнее</a>
                            <!-- <a href="#" class="button  button--red">В корзину</a> -->
                        </div>
                    </div>
                </div>
            </article>
            <article class="shop-item-s">
                <div class="shop-item-s__wrap">
                    <div class="shop-item-s__image">
                        <img src="./assets/img/b5_pomade_im.png" alt="">
                    </div>
                    <div class="shop-item-s__description">
                        <h2 class="shop-item-s__title">
                            Помада для волос<br> «Barber WILD» (Ice Melon)
                        </h2>
                        <p class="shop-item-s__volume">
                            Объем: 3.5 oz. | 100 g.
                        </p>
                        <div class="shop-item-s__buttons">
                            <a href="pomade-ice-melon-page.html" class="button  button--right-m">Подробнее</a>
                            <!-- <a href="#" class="button  button--red">В корзину</a> -->
                        </div>
                    </div>
                </div>
            </article>
            <article class="shop-item-s">
                <div class="shop-item-s__wrap">
                    <div class="shop-item-s__image">
                        <img src="./assets/img/pomade_line.png" alt="">
                    </div>
                    <div class="shop-item-s__description">
                        <h2 class="shop-item-s__title">
                            Помада для волос<br> «Barber WILD»
                        </h2>
                        <p class="shop-item-s__volume">
                            Объем: 3.5 oz. | 100 g.
                        </p>
                        <div class="shop-item-s__buttons">
                            <a href="pomade-juicy-page.html" class="button  button--right-m">Подробнее</a>
                            <!-- <a href="#" class="button  button--red">В корзину</a> -->
                        </div>
                    </div>
                </div>
            </article>
            <article class="shop-item-s">
                <div class="shop-item-s__wrap">
                    <div class="shop-item-s__image">
                        <img src="./assets/img/b6-shave-oil.png" alt="">
                    </div>
                    <div class="shop-item-s__description">
                        <h2 class="shop-item-s__title">
                            Масло для подбривания<br> «Barber WILD»
                        </h2>
                        <p class="shop-item-s__volume">
                            Объем: 1.86 oz. | 55 ml.
                        </p>
                        <div class="shop-item-s__buttons">
                            <a href="shaving-oil-page.html" class="button  button--right-m">Подробнее</a>
                            <!-- <a href="#" class="button  button--red">В корзину</a> -->
                        </div>
                    </div>
                </div>
            </article>
            <article class="shop-item-s">
                <div class="shop-item-s__wrap">
                    <div class="shop-item-s__image">
                        <img src="./assets/img/soap.png" alt="">
                    </div>
                    <div class="shop-item-s__description">
                        <h2 class="shop-item-s__title">
                            Мыло для бритья<br> «Barber WILD»
                        </h2>
                        <p class="shop-item-s__volume">
                            Объем: 3,5 oz. | 100 g.
                        </p>
                        <div class="shop-item-s__buttons">
                            <a href="soap-page.html" class="button  button--right-m">Подробнее</a>
                            <!-- <a href="#" class="button  button--red">В корзину</a> -->
                        </div>
                    </div>
                </div>
            </article>
            <article class="shop-item-s">
                <div class="shop-item-s__wrap">
                    <div class="shop-item-s__image">
                        <img src="./assets/img/balm.png" alt="">
                    </div>
                    <div class="shop-item-s__description">
                        <h2 class="shop-item-s__title">
                            Бальзам после бритья<br> «Barber WILD»
                        </h2>
                        <p class="shop-item-s__volume">
                            Объем: 3.38 oz. | 100 ml.
                        </p>
                        <div class="shop-item-s__buttons">
                            <a href="after-shave-balm-page.html" class="button  button--right-m">Подробнее</a>
                            <!-- <a href="#" class="button  button--red">В корзину</a> -->
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
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