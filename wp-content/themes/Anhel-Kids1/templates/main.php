<?php
/**Template name: main_page */

get_header();

?>
<?php
$post_id = get_the_ID();
$img_simple = get_field('image_sample', $post_id);

$Block_out_what_were_made_of = get_field('Block_out_what_were_made_of', $post_id);

$main = get_fields();
$reviews = get_fields(70);
$reviews1 = get_fields('post_type=reviews');
echo '<pre>';
//var_dump($reviews);
//var_dump($reviews);
echo '</pre>';
//echo get_post_meta( get_the_ID(), '_my_meta_value_key', 1 );
?>
    <!--END HEADER-->

    <!--START CONTENT-->
    <section>
        <div class="samples">
            <div class="title">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <?php if($main['samples'] != null){ ?>
                            <h2 class="title"><?php echo $main['samples'];?></h2>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-container">
            <div class="container">
                <div class="row">
                    <div class="slider">
                        <?php if (isset($img_simple) && !empty($img_simple)): ?>
                            <?php foreach ($img_simple as $block): ?>
                        <div class="items">                           
                            <div class="item">
                                <div style="background-image: url(<?php echo $block['image_1'];?>);">                                   
                                </div>
                            </div>
                             <div class="item">
                                <div style="background-image: url(<?php echo $block['image_2'];?>);">                                   
                                </div>
                            </div>
                             <div class="item">
                                <div style="background-image: url(<?php echo $block['image_3'];?>);">                                   
                                </div>
                            </div>
                             <div class="item">
                                <div style="background-image: url(<?php echo $block['image_4'];?>);">                                   
                                </div>
                            </div>                           
                        </div>
                        <?php endforeach; ?>
                            <?php endif; ?>                      
                    </div>
                    <img class="girl" src="<?php bloginfo("template_directory");?>/images/girl.svg" alt="#">
                    <img class="boy" src="<?php bloginfo("template_directory");?>/images/boy.svg" alt="#">
                </div>
            </div>
        </div>
        <div class="reviews-block">
            <div class="reviews-content">
                <div class="title reviews">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php if($main['reviews'] != null){ ?>
                                <h2 class="title reviews"><?php echo $main['reviews'];?></h2>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="reviews-block-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="reviews-slider">
                            
                       
                            
                               <?php
                        $my_posts = get_posts('numberposts=0&post_type=reviews');
                               //var_dump(count($my_posts));
                        $counter = 0;
                        foreach ($my_posts as $post) :
                            setup_postdata($post);

                            ?>

                            <?php if($counter == 0) {
                                echo '<div class="items">';
                                }?>

                                <div class="item">
                                    <div style="background-image: url(<?php echo get_the_post_thumbnail_url()?>);" class="img"></div>
                                    <h4><?php the_title(); ?></h4>
                                    <p><?php echo get_the_excerpt(); ?></p>
                                </div>
                            <!--Не работает если не доходит до трех-->
                            <?php if($counter == 3){

                                echo '</div>';

                            } ?>

                        <?php
                            //var_dump($couter);
                            $counter++;
                            if($counter == 4){
                                $counter = 0;
                            }
                        endforeach; ?>
                            
                            
                        </div>

<!--                        <div class="reviews-slider">-->
<!--                            <div class="items">-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!---->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="items">-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="items">-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                                <div class="item">-->
<!--                                    <div class="img"></div>-->
<!--                                    <h4>Имя, <span>Город</span></h4>-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis unde, omnis odio aut corrupti. Iusto repellendus laudantium amet voluptatibus eos est provident enim nihil molestias rerum officiis culpa eligendi dolor beatae itaque ratione ipsa, atque in! Hic, sunt, aliquid.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <p>Оригиналы всех отзывов Вы можете посмотреть в нашей группе<a href="https://vk.com/anhel.kids" target="_blank"><img src="<?php bloginfo("template_directory");?>/images/vk-reviews.png" alt="№"></a></p>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="320" height="" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                 viewBox="0 0 815 1080"
                 xmlns:xlink="http://www.w3.org/1999/xlink">
		 <defs>
             <style type="text/css">
                 <![CDATA[
			.fill0 {fill:#4F3D28}
                 .fill4 {fill:#4F3D28}
                 .fill2 {fill:#A2CBCA}
                 .fill3 {fill:#E0645F}
                 .fill1 {fill:#EDEDC1}
                 ]]>
             </style>
         </defs>
                <g >
                    <metadata id="CorelCorpID_0Corel-Layer"/>
                    <g id="_2780494081968">
                        <rect class="fill0" x="394" y="417" width="28.6332" height="662.676"/>
                        <g class="animation">
                            <polygon class="fill1" points="733,406 407,411 723,667 "/>
                            <polygon class="fill1" points="82,417 407,411 92,156 "/>
                            <polygon class="fill2" points="402,80 407,411 659,91 "/>
                            <polygon class="fill2" points="413,743 407,411 156,732 "/>
                            <polygon class="fill3" points="402,80 407,411 245,280 "/>
                            <polygon class="fill3" points="733,406 407,411 537,246 "/>
                            <polygon class="fill3" points="413,743 407,411 570,543 "/>
                            <polygon class="fill3" points="82,417 407,411 278,576 "/>
                            <ellipse class="fill4" cx="407" cy="411" rx="45" ry="46"/>
                        </g>
                    </g>
                </g>
		</svg>
        </div>
        <div class="reviews-block">
            <div class="reviews-content">
                <div class="title reviews">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php if($main['out_what_were_made_of'] != null){ ?>
                                <h2 class="title reviews"><?php echo $main['out_what_were_made_of'];?></h2>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="done">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="done-slider">

                            <?php if (isset($Block_out_what_were_made_of) && !empty($Block_out_what_were_made_of)): ?>
                            <?php foreach ($Block_out_what_were_made_of as $block): ?>
                            <div class="item">
                                <div class="left-block">
                                    <div class="block">
                                        <img src="<?php echo $block['image_1'];?>" alt="">
                                        <h5><?php echo $block['title_1'];?></h5>
                                        <p><?php echo $block['description_1'];?></p>
                                    </div>
                                    <div class="block">
                                    <img src="<?php echo $block['image_2'];?>" alt="">
                                    <h5><?php echo $block['title_2'];?></h5>
                                    <p><?php echo $block['description_2'];?></p>
                                    </div>
                                </div>
                                <div class="center-block">
                                    <img src="<?php echo $block['the_central_image'];?>" alt="">
                                </div>
                                <div class="right-block">
                                    <div class="block">
                                    <img src="<?php echo $block['image_3'];?>" alt="">
                                    <h5><?php echo $block['title_3'];?></h5>
                                    <p><?php echo $block['description_3'];?></p>
                                    </div>
                                    <div class="block">
                                    <img src="<?php echo $block['image_4'];?>" alt="">
                                    <h5><?php echo $block['title_4'];?></h5>
                                    <p><?php echo $block['description_4'];?></p>
                                    </div>
                                </div>
                            </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

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