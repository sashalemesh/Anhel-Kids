<?php
get_header();

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
<br>5woocommerce5
<div class="catalog">
    <div class="container">

<?php
woocommerce_content(); ?>

    </div>
</div>





<?php //echo do_shortcode('[add_to_cart id="99"]');
//do_action( 'woocommerce_before_single_product_summary' );
get_footer();
?>
