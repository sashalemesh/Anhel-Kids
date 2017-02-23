<?php
function woocommerce_content() {

    if ( is_singular( 'product' ) ) {

        while ( have_posts() ) : the_post();

            wc_get_template_part( 'content', 'single-product' );

        endwhile;

    } else { ?>

        <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
<!--Выводит тайтл страницы SHOP-->
<!--            <h1 class="page-title">--><?php //woocommerce_page_title(); ?><!--</h1>-->

            <?php
            /**Template name: catalog_page */

            $catalog = get_fields(90);
            ?>
            <!--START CONTENT-->
            <section>
            <?php if($catalog['sozdat_checol'] != null){ ?>
                <a href="<?php echo $catalog['sozdat_checol_url'];?>" class="create-Case"><?php echo $catalog['sozdat_checol'];?></a>
            <?php }?>
            <div class="samples">
                <div class="title">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="title"><?php woocommerce_page_title();?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <?php endif; ?>

        <?php do_action( 'woocommerce_archive_description' ); ?>

        <?php if ( have_posts() ) : ?>

            <?php do_action('woocommerce_before_shop_loop'); ?>

            <?php woocommerce_product_loop_start(); ?>

            <?php woocommerce_product_subcategories(); ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <?php wc_get_template_part( 'content', 'product' ); ?>

            <?php endwhile; // end of the loop. ?>

            <?php woocommerce_product_loop_end(); ?>

            <?php do_action('woocommerce_after_shop_loop'); ?>

        <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

            <?php wc_get_template( 'loop/no-products-found.php' ); ?>

        <?php endif;

    }
}