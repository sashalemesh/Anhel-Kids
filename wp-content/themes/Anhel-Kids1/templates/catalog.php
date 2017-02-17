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
