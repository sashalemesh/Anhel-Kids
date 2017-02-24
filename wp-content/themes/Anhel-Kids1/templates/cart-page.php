<?php
/**Template name: cart_page */

get_header();
//the_post(); ?>
<!--    <section>-->
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
    <div class="orders">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


<!--    <div class="catalog">-->
<!--        <div class="container">-->



<!--            --><?php //the_content();
            echo do_shortcode('[woocommerce_cart]');?>
<!--        </div>-->
<!--    </div>-->




    </div>
    </div>
    </div>
    </div>

<?php
get_footer();
?>