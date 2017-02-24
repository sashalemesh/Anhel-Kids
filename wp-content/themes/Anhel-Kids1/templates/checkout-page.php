<?php
/**Template name: checkout_page */
get_header();
?>
<section>
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

<?php echo do_shortcode('[woocommerce_checkout]'); ?>

                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
?>