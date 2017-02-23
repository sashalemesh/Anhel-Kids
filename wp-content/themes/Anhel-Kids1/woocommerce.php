<?php
get_header();

?>
<?php
/**Template name: catalog_page */
//
//$catalog = get_fields(10);
//?>
<!--START CONTENT-->
<!--<section>-->
<!--        --><?php //if($catalog['sozdat_checol'] != null){ ?>
<!--    <a href="--><?php //echo $catalog['sozdat_checol_url'];?><!--" class="create-Case">--><?php //echo $catalog['sozdat_checol'];?><!--</a>-->
<!--        --><?php //}?>

<!--<div class="samples">-->
<!--    <div class="title">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                    <h2 class="title">--><?php //woocommerce_page_title(); the_title(); ?><!--</h2>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<?php
woocommerce_content(); ?>






<?php //echo do_shortcode('[add_to_cart id="99"]');
//do_action( 'woocommerce_before_single_product_summary' );
get_footer();
?>
