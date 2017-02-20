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
<?php

get_footer();

?>
