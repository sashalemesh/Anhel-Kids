<?php
/**Template name: catalog_page */
get_header();
$catalog = get_fields();
?>
 <!--START CONTENT-->
    <section>
        <?php if($catalog['sozdat_checol'] != null){ ?>
        <a href="<?php echo $catalog['sozdat_checol_url'];?>" class="create-Case"><?php echo $catalog['sozdat_checol'];?></a>
        <?php }?>
        <?php
//        $my_posts = get_posts();
//        $couter = 0;
//        foreach ($my_posts as $post) :
//            setup_postdata($post);
//            global $post;
//            echo '<pre>';
//            var_dump($post);
//            echo '</pre>';
//        endforeach;
        ?>

        <div class="samples">
            <div class="title">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="title"><?php the_title(); ?></h2>
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
                                <?php
                                //Выводит ссылки на продукт (линки)
                                do_action( 'woocommerce_before_shop_loop_item' );
                                //Выводит картинки (thumbnails)
                                do_action( 'woocommerce_before_shop_loop_item_title' );
                                ?>
                                <div class="description">
                                    <!--Выводит тайтл-->
                                    <?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
                                    <!--Выводит краткое описание-->
                                    <?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ); ?>
                                    <div>
                                        <!--Выводит цену (200грн)-->
                                        <?php do_action( 'woocommerce_after_shop_loop_item_title' );?>
                                        <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
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
