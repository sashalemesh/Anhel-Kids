<?php
get_header();
?>

    <p>werwerwerwerwerwrrwe1</p>
    <p>werwerwerwerwerwrrwe2</p>
    <p>werwerwerwerwerwrrwe3</p>
    <p>werwerwerwerwerwrrwe4</p>
    <p>werwerwerwerwerwrrwe5</p>
    <section id="main">
    <br>
    <br>


    <duv>    <?php woocommerce_content(); ?>       </duv>
<?php //echo do_shortcode('[add_to_cart id="99"]'); ?>
        <br>
        <br>
        <br>
        <br>

        <?php
        do_action( 'woocommerce_before_single_product_summary' );

//            global $post;
//        echo '<pre>';
//            var_dump($post->post_title);
//        echo '</pre>';
//
//        global $post;
//        echo '<pre>';
//        var_dump($post);
//        echo '</pre>';
        ?>

    <br>
    <br>

    </section>
    <p>werwerwerwerwerwrrwe5</p>
    <p>werwerwerwerwerwrrwe6</p>
    <p>werwerwerwerwerwrrwe7</p>
    <p>werwerwerwerwerwrrwe8</p>

<?php
get_footer();
?>