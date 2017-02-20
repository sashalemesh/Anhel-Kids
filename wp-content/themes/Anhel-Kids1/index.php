<?php
/**Template name: gallery_page */

get_header();
the_post();
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



            <?php the_content();    ?>
        </div>
    </div>
<!--Выводим посты с post_type=reviews-->

<?php
//$my_posts = get_posts('numberposts=0&post_type=reviews');
//foreach ($my_posts as $post) :
//    setup_postdata($post);
//    ?>
<!--        <a href="--><?php //the_permalink(); ?><!--">--><?php //the_post_thumbnail(); ?><!--</a>-->
<!--        <div class="">-->
<!--            <h3><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h3>-->
<!--            <p>--><?php //echo get_the_date('F j');?><!-- : --><?php //echo the_content() ; ?><!--</p>-->
<!---->
<!--        </div>-->
<!---->
<?php //endforeach;

?>


<!--    Выводим стандартные посты посты-->
<!--    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!---->
<!--        --><?php //if(have_posts()) : ?>
<!--            --><?php //while (have_posts()) :the_post();?>
<!--                <h1 class="title">--><?php //the_title(); ?><!--</h1>-->
<!--                --><?php //the_content() ; ?>
<!--            --><?php //endwhile;?>
<!--        --><?php //endif;?>
<!---->
<!---->
<!--    </div>-->

<?php

get_footer();

?>