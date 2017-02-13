<?php
/**Template name: order_page */

get_header();

?>

    <!--END HEADER-->

    <!--START CONTENT-->
<!--<body>-->
<!--<!--START HEADER-->-->
<!--<div class="internal-pages">-->
<!--    <header>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                    <ul class="menu">-->
<!--                        <li class="logo"><a href="#"><img src="--><?php //bloginfo("template_directory");?><!--/images/logotype.svg" alt=""></a></li>-->
<!--                        <li class="constructor"><a href="#"><p>Конструктор</p></a></li>-->
<!--                        <li class="catalog"><a href="#"><p>Каталог</p></a></li>-->
<!--                        <li class="gallery"><a href="#"><p>Галерея</p></a></li>-->
<!--                        <li class="about-us"><a href="#"><p>О нас</p></a></li>-->
<!--                        <li class="vk"><a href="https://vk.com/anhel.kids" target="_blank"><img src="--><?php //bloginfo("template_directory");?><!--/images/vk.svg" alt=""></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header>-->
    <section>
        <div class="samples">
            <div class="title">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="title">Ваш заказ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="orders">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="order">
                            <li>
                                <div class="img" style="background-image:url(<?php bloginfo("template_directory");?>/images/cover.png);"></div>
                                <div class="description">
                                    <p>Индивидуальный дизайн чехла на стульчик Chicco Polly Magic</p>
                                    <b>400 грн</b>
                                </div>
                            </li>
                            <li>
                                <div class="img" style="background-image:url(<?php bloginfo("template_directory");?>/images/belts.png);"></div>
                                <div class="description">
                                    <p>Ремни на стульчик Chicco Polly Magic</p>
                                    <b>50 грн</b>
                                </div>
                            </li>
                            <li>
                                <div class="img" style="background-image:url(<?php bloginfo("template_directory");?>/images/Bib.png);"></div>
                                <div class="description">
                                    <p>Слюнявчик</p>
                                    <b>30 грн</b>
                                </div>
                            </li>
                        </ul>
                        <p class="result">Итого  480 грн</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews-block">
            <div class="reviews-content">
                <div class="title reviews">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="title reviews">Заполните контактные данные</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <form>
                            <input type="text" placeholder="Имя">
                            <input type="text" placeholder="Фамилия">
                            <input type="tel" placeholder="Телефон">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Город">
                            <input type="text" placeholder="Номер отделения Новой почты">
                            <label for="">или</label>
                            <input type="text" placeholder="Номер отделения Укрпочты">
                            <input type="submit" value="Оплатить">
                            <input type="submit" value="Оставить заявку">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews-block">
            <div class="reviews-content">
                <div class="title reviews">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="title reviews">Контакты</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--END CONTENT-->


<!--START FOOTER-->

<?php

get_footer();

?>
