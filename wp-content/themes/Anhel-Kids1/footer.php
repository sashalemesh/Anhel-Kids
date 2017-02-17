
<?php
$footer = get_fields(27);
?>
<?php if(!is_page_template('templates/construct.php')) { ?>
<div class="reviews-block">
    <div class="reviews-content">
        <div class="title reviews">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php if($footer['contacts'] != null){ ?>
                        <h2 class="title reviews"><?php echo $footer['contacts'];?></h2>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <?php if($footer['footer_text'] != null){ ?>
                <?php echo $footer['footer_text'];?>
                <?php }?>
                <!--Contact form 7-->
                <?php echo do_shortcode('[contact-form-7 id="87" title="contact"]'); ?>
<!--                <form action="">-->
<!--                    <h4>Связаться с нами</h4>-->
<!--                    <div class="left-block">-->
<!--                        <input type="text" placeholder="Имя">-->
<!--                        <input type="email" placeholder="Email">-->
<!--                        <ul class="soc">-->
<!--                            <li><a href="https://vk.com/anhel.kids" target="_blank"><img src="--><?php //bloginfo("template_directory");?><!--/images/vk-forma.svg" alt=""></a></li>-->
<!--                            <li><a href="https://www.facebook.com/anhel.kids/" target="_blank"><img src="--><?php //bloginfo("template_directory");?><!--/images/facebook.svg" alt=""></a></li>-->
<!--                            <li><a href="https://www.instagram.com/anhel_kids/" target="_blank"><img src="--><?php //bloginfo("template_directory");?><!--/images/instagram.svg" alt=""></a></li>-->
<!--                        </ul>-->
<!--                        <input type="submit" value="Отправить">-->
<!--                    </div>-->
<!--                    <textarea placeholder="Сообщение"></textarea>-->
<!--                </form>-->
            </div>
        </div>
    </div>
</footer>

<?php
//переработать для page.php
if ( is_page_template('page.php')) { ?>
</div>
<?php } ?>
<?php
if ( is_page_template('templates/order.php') || is_page_template('templates/construct.php') || is_page_template('templates/gallery.php') || is_page_template('templates/catalog.php')) { ?>
</div>
    <?php } ?>
<?php //if ( is_page_template('templates/order.php') or is_page_template('templates/construct.php')) { ?>
<!--</div>-->
<?php //} ?>


<!--END FOOTER-->
<!--<script src="js/jquery-2.1.4.min.js"></script>-->
<!--<script src="js/bootstrap.min.js"></script>-->
<!--<script src="js/snap.svg.js"></script>-->
<!--<script src="js/common.js"></script>-->
<!--<script src="js/slick.min.js"></script>-->
<script>
    $(document).ready(function(){
        $('.slider').slick({});

        $('.reviews-slider').slick({
            arrows:false,
            dots:true
        });

        $('.done-slider').slick({});



    });



</script>
    <?php
    wp_footer();
    ?>
</body>

</html>
