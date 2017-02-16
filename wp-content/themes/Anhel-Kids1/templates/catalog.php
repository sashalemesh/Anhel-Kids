<?php
/**Template name: catalog_page */

get_header();

?>




<!--<body>-->
<!--<!--START HEADER-->
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
    <!--END HEADER-->

    <!--START CONTENT-->

<?php
//echo do_shortcode('[recent_products per_page="12" columns="4"]');




?>



<?php
$my_posts = get_posts('numberposts=0&post_type=product');
$couter = 0;
foreach ($my_posts as $post) :
    setup_postdata($post);

    ?>

    <?php if($couter == 0) {
    echo '<div class="items">';
}?>

    <div class="item">
        <div class="img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?>, </a><span><?php echo $reviews['city'];?></span></h4>
        <p><?php echo get_the_excerpt();
            the_content(); ?></p>
    </div>
    <!--Не работает если не доходит до трех-->
    <?php if($couter == 3){

    echo '</div>';

} ?>

    <?php
    //var_dump($couter);
    $couter++;
    if($couter == 4){
        $couter = 0;
    }
    global $post;
    echo '<pre>';
    var_dump($post);
    echo '</pre>';
endforeach;
?>


    <section>
        <a href="#" class="create-Case">Создать чехол</a>

        <div class="samples">
            <div class="title">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="title">Каталог готовой продукции</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="catalog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="items">
                            <h3 class="title">Чехлы</h3>
                            <?php
                            $my_posts = get_posts('numberposts=0&post_type=product');
                            foreach ($my_posts as $post) :
                            setup_postdata($post);
                            ?>
                            <div class="item">
                                <div class="img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('spec_thumb'); ?></a></div>
                                <div class="description">
                                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                    <div>
                                        <p class="price">200 грн</p>
                                        <a href="#" class="button">Купить</a>
                                    </div>
                                </div>
                            </div>
                                <?php
                            endforeach;
                            ?>
                        </div>


                        <div class="items">
                            <h3 class="title">Чехлы</h3>
                            <div class="item">
                                <div class="img" style="background-image:url(<?php bloginfo("template_directory");?>/images/Bib.png);"></div>
                                <div class="description">
                                    <h5>Польский хлопок БО19</h5>
                                    <p>Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id</p>
                                    <div>
                                        <p class="price">200 грн</p>
                                        <a href="#" class="button">Купить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img" style="background-image:url(<?php bloginfo("template_directory");?>/images/cover.png);"></div>
                                <div class="description">
                                    <h5>Польский хлопок БО19</h5>
                                    <p>Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id</p>
                                    <div>
                                        <p class="price">200 грн</p>
                                        <a href="#" class="button">Купить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img" style="background-image:url(<?php bloginfo("template_directory");?>/images/belts.png);"></div>
                                <div class="description">
                                    <h5>Польский хлопок БО19</h5>
                                    <p>Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id</p>
                                    <div>
                                        <p class="price">200 грн</p>
                                        <a href="#" class="button">Купить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img" style="background-image:url(<?php bloginfo("template_directory");?>/images/Bib.png);"></div>
                                <div class="description">
                                    <h5>Польский хлопок БО19</h5>
                                    <p>Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id</p>
                                    <div>
                                        <p class="price">200 грн</p>
                                        <a href="#" class="button">Купить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img" style="background-image:url(<?php bloginfo("template_directory");?>/images/cover.png);"></div>
                                <div class="description">
                                    <h5>Польский хлопок БО19</h5>
                                    <p>Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id</p>
                                    <div>
                                        <p class="price">200 грн</p>
                                        <a href="#" class="button">Купить</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img" style="background-image:url(<?php bloginfo("template_directory");?>/images/belts.png);"></div>
                                <div class="description">
                                    <h5>Польский хлопок БО19</h5>
                                    <p>Nam ridens democritum et, et vel porro integre. Ut sed delenit labores, elit legere duo ei. Ullum error suavitate sit ea, est facer sapientem ea. Pri consul option liberavisse id</p>
                                    <div>
                                        <p class="price">200 грн</p>
                                        <a href="#" class="button">Купить</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
<!--        <div class="reviews-block">-->
<!--            <div class="reviews-content">-->
<!--                <div class="title reviews">-->
<!--                    <div class="container">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                                <h2 class="title reviews">Контакты</h2>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

    <!--END CONTENT-->

    <!--START FOOTER-->


<?php

get_footer();

?>
