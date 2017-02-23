<?php
/**Template name: construct_page */

get_header();
$construct = get_fields();
?>
        <!--START CONTENT-->

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
            <div class="steps">
                <div class="step">
                    <div class="container">
                        <div class="row">
<!--                            --><?php //get_template_part('woocommerce/single-product/add-to-cart/variable');?>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php if($construct['step_1'] != null){ ?>
                                <h3 class="title"><?php echo $construct['step_1'];?></h3>
                                <?php }?>
                                <?php if($construct['text_1'] != null){ ?>
                                <h4 class="title"><?php echo $construct['text_1'];?></h4>
                                <?php }?>
                                <div class="constructor-slider">
                                    <div class="constructor-items">
                                        <div class="constructor-item">
                                            <label for="armchair">
                                                <div class="cloud">
                                                    <img src="<?php bloginfo("template_directory");?>/images/chair.png" alt="">
                                                </div>
                                            </label>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair">
                                                <label for="armchair"></label>
                                                <label for="armchair">Brevi fun</label>
                                            </div>
                                        </div>
                                        <div class="constructor-item">
                                            <label for="armchair-2">
                                                <div class="cloud">
                                                    <img src="<?php bloginfo("template_directory");?>/images/chair_1.png" alt="">
                                                </div>
                                            </label>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair-2">
                                                <label for="armchair-2"></label>
                                                <label for="armchair-2">Peg Perego Tatamia</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor-items">
                                        <div class="constructor-item">
                                            <label for="armchair-3">
                                                <div class="cloud">
                                                    <img src="<?php bloginfo("template_directory");?>/images/chair_2.png" alt="">
                                                </div>
                                            </label>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair-3">
                                                <label for="armchair-3"></label>
                                                <label for="armchair-3">Omega Bebe comfort</label>
                                            </div>
                                        </div>
                                        <div class="constructor-item">
                                            <label for="armchair-4">
                                                <div class="cloud">
                                                    <img src="<?php bloginfo("template_directory");?>/images/chair.png" alt="">
                                                </div>
                                            </label>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair-4">
                                                <label for="armchair-4"></label>
                                                <label for="armchair-4">Brevi fun</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor-items">
                                        <div class="constructor-item">
                                            <label for="armchair-5">
                                                <div class="cloud">
                                                    <img src="<?php bloginfo("template_directory");?>/images/chair_1.png" alt="">
                                                </div>
                                            </label>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair-5">
                                                <label for="armchair-5"></label>
                                                <label for="armchair-5">Peg Perego Tatamia</label>
                                            </div>
                                        </div>
                                        <div class="constructor-item">
                                            <label for="armchair-6">
                                                <div class="cloud">
                                                    <img src="<?php bloginfo("template_directory");?>/images/chair_2.png" alt="">
                                                </div>
                                            </label>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair-6">
                                                <label for="armchair-6"></label>
                                                <label for="armchair-6">Omega Bebe comfort</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor-items">
                                        <div class="constructor-item">
                                            <div class="cloud">
                                                <img src="<?php bloginfo("template_directory");?>/images/chair.png" alt="">
                                            </div>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair-7">
                                                <label for="armchair-7"></label>
                                                <label for="armchair-7">Brevi fun</label>
                                            </div>
                                        </div>
                                        <div class="constructor-item">
                                            <div class="cloud">
                                                <img src="<?php bloginfo("template_directory");?>/images/chair_1.png" alt="">
                                            </div>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair-8">
                                                <label for="armchair-8"></label>
                                                <label for="armchair-8">Peg Perego Tatamia</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="constructor-items">
                                        <div class="constructor-item">
                                            <div class="cloud">
                                                <img src="<?php bloginfo("template_directory");?>/images/chair_2.png" alt="">
                                            </div>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair-9">
                                                <label for="armchair-9"></label>
                                                <label for="armchair-9">Omega Bebe comfort</label>
                                            </div>
                                        </div>
                                        <div class="constructor-item">
                                            <div class="cloud">
                                                <img src="<?php bloginfo("template_directory");?>/images/chair_2.png" alt="">
                                            </div>
                                            <div class="input">
                                                <input type="radio" name="armchair" id="armchair-10">
                                                <label for="armchair-10"></label>
                                                <label for="armchair-10">Omega Bebe comfort</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input no-my-model">
                                    <input type="radio" name="armchair" id="armchair-11">
                                    <label for="armchair-11"></label>
                                    <?php if($construct['if_not_chea'] != null){ ?>
                                    <label for="armchair-11"><?php echo $construct['if_not_chea'];?></label>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php if($construct['step_2'] != null){ ?>
                                <h3 class="title"><?php echo $construct['step_2'];?></h3>
                                <?php }?>
                                <?php if($construct['text_2'] != null){ ?>
                                <h4 class="title"><?php echo $construct['text_2'];?></h4>
                                <?php }?>
                                <div class="the-cloth">
                                    <div>
                                        <div class="img" data-toggle="modal" data-target=".cloth-modal">
                                            <div class="hover">
                                                <p>Нажмите <br> для выбора</p>
                                            </div>
                                        </div>
                                        <?php if($construct['side_a'] != null){ ?>
                                        <h4 class="title"><?php echo $construct['side_a'];?></h4>
                                        <?php }?>
                                    </div>
                                    <?php if($construct['side_a_text'] != null){ ?>
                                    <?php echo $construct['side_a_text'];?>
                                    <?php }?>
                                </div>
                                <div class="the-cloth">
                                    <div>
                                        <div class="img" data-toggle="modal" data-target=".cloth-modal">
                                            <div class="hover">
                                                <p>Нажмите <br> для выбора</p>
                                            </div>
                                        </div>
                                        <?php if($construct['side_b'] != null){ ?>
                                            <h4 class="title"><?php echo $construct['side_b'];?></h4>
                                        <?php }?>
                                    </div>
                                    <?php if($construct['side_b_text'] != null){ ?>
                                        <?php echo $construct['side_b_text'];?>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php if($construct['step_3'] != null){ ?>
                                <h3 class="title"><?php echo $construct['step_3'];?></h3>
                                <?php }?>
                                <?php if($construct['text_3'] != null){ ?>
                                <h4 class="title"><?php echo $construct['text_3'];?></h4>
                                <?php }?>
                                <div class="items">
                                    <div class="item">
                                        <div class="img" data-toggle="modal" data-target=".cloth-modal">
                                            <img src="<?php bloginfo("template_directory");?>/images/images-1.png" alt="#">
                                            <div class="hover">
                                                <p>Нажмите
                                                    <br> для выбора</p>
                                            </div>
                                        </div>
                                        <div class="checkboxs-description">
                                            <div class="input checkbox">
                                                <input type="checkbox" id="checkbox-1">
                                                <label for="checkbox-1"></label>
                                                <label for="checkbox-1">Ремни</label>
                                            </div>
                                            <div class="description">
                                                <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, assumenda.</p>
                                            </div>
                                            <ul class="color">
                                                <li class="text">
                                                    <p>Цвет</p>
                                                </li>
                                                <li class="blue-1">
                                                    <input type="radio" name="color" id="color-1">
                                                    <label for="color-1"></label>
                                                </li>
                                                <li class="red">
                                                    <input type="radio" name="color" id="color-2">
                                                    <label for="color-2"></label>
                                                </li>
                                                <li class="blue-2">
                                                    <input type="radio" name="color" id="color-3">
                                                    <label for="color-3"></label>
                                                </li>
                                                <li class="yellow">
                                                    <input type="radio" name="color" id="color-4">
                                                    <label for="color-4"></label>
                                                </li>
                                                <li class="white">
                                                    <input type="radio" name="color" id="color-5">
                                                    <label for="color-5"></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" data-toggle="modal" data-target=".cloth-modal">
                                            <img src="<?php bloginfo("template_directory");?>/images/belts.png" alt="#">
                                            <div class="hover">
                                                <p>Нажмите
                                                    <br> для выбора</p>
                                            </div>
                                        </div>
                                        <div class="checkboxs-description">
                                            <div class="input checkbox">
                                                <input type="checkbox" id="checkbox-2">
                                                <label for="checkbox-2"></label>
                                                <label for="checkbox-2">Накладки
                                                    <br> на ремни</label>
                                            </div>
                                            <div class="description">
                                                <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, assumenda.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" data-toggle="modal" data-target=".cloth-modal">
                                            <img src="<?php bloginfo("template_directory");?>/images/images-3.png" alt="#">
                                            <div class="hover">
                                                <p>Нажмите
                                                    <br> для выбора</p>
                                            </div>
                                        </div>
                                        <div class="checkboxs-description">
                                            <div class="input checkbox">
                                                <input type="checkbox" id="checkbox-3">
                                                <label for="checkbox-3"></label>
                                                <label for="checkbox-3">Карман</label>
                                            </div>
                                            <div class="description">
                                                <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, assumenda.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" data-toggle="modal" data-target=".cloth-modal">
                                            <img src="<?php bloginfo("template_directory");?>/images/images-4.png" alt="#">
                                            <div class="hover">
                                                <p>Нажмите
                                                    <br> для выбора</p>
                                            </div>
                                        </div>
                                        <div class="checkboxs-description">
                                            <div class="input checkbox">
                                                <input type="checkbox" id="checkbox-4">
                                                <label for="checkbox-4"></label>
                                                <label for="checkbox-4">Муфты</label>
                                            </div>
                                            <div class="description">
                                                <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, assumenda.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" data-toggle="modal" data-target=".cloth-modal">
                                            <img src="<?php bloginfo("template_directory");?>/images/Bib.png" alt="#">
                                            <div class="hover">
                                                <p>Нажмите
                                                    <br> для выбора</p>
                                            </div>
                                        </div>
                                        <div class="checkboxs-description">
                                            <div class="input checkbox">
                                                <input type="checkbox" id="checkbox-5">
                                                <label for="checkbox-5"></label>
                                                <label for="checkbox-5">Слюнявчик</label>
                                            </div>
                                            <div class="description">
                                                <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, assumenda.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="img" data-toggle="modal" data-target=".cloth-modal">
                                            <img src="<?php bloginfo("template_directory");?>/images/images-6.png" alt="#">
                                            <div class="hover">
                                                <p>Нажмите
                                                    <br> для выбора</p>
                                            </div>
                                        </div>
                                        <div class="checkboxs-description ears">
                                            <div class="input checkbox">
                                                <input type="checkbox" id="checkbox-6">
                                                <label for="checkbox-6"></label>
                                                <label for="checkbox-6">Уши</label>
                                            </div>
                                            <div class="description">
                                                <p class="description-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, assumenda.</p>
                                            </div>
                                            <div class="input">
                                                <input type="radio" id="radio-button-1" name="radio-button" disabled>
                                                <label for="radio-button-1"></label>
                                                <label for="radio-button-1">Стандарт</label>
                                            </div>
                                            <div class="input">
                                                <input type="radio" id="radio-button-2" name="radio-button" disabled>
                                                <label for="radio-button-2"></label>
                                                <label for="radio-button-2">Большие</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="step-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <?php if($construct['srep_4'] != null){ ?>
                                <h3 class="title"><?php echo $construct['step_4'];?></h3>
                                <?php }?>
                                
                                <?php if($construct['text_4'] != null){ ?>
                                <h4 class="title"><?php echo $construct['text_4'];?></h4>
                                <?php }?>
                                <!--Начало Выводим итог-->
                                <?php if (have_posts()) : while (have_posts()) :  the_post();?>
                                <?php the_content(); ?>
                                <?php endwhile; endif; ?>
                                <!--Конец Выводим итог-->
                                <?php if($construct['your_choice'] != null){ ?>
                                <h4 class="title"><?php echo $construct['your_choice'];?></h4>
                                <?php }?>
                                <div class="constructor-item">
                                    <div class="cloud">
                                        <img src="<?php bloginfo("template_directory");?>/images/chair_1.png" alt="">
                                    </div>
                                    <p>Модель <span>Peg Perego Tatamia</span></p>
                                </div>
                                <div class="cloth">
                                    <div class="the-cloth">
                                        <div>
                                            <div class="img">

                                            </div>
                                            <h5>Ткань на стороне А <span>Польский хлопок БО13</span></h5>
                                        </div>
                                    </div>
                                    <div class="the-cloth">
                                        <div>
                                            <div class="img">

                                            </div>
                                            <h5>Ткань на стороне Б <span>Польский хлопок БО13</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="item">
                                        <div class="img">
                                            <img src="<?php bloginfo("template_directory");?>/images/belts.png" alt="#">
                                        </div>
                                        <p>Ремни</p>
                                    </div>
                                    <div class="item">
                                        <div class="img">
                                            <img src="<?php bloginfo("template_directory");?>/images/images-3.png" alt="#">
                                        </div>
                                        <p>Слюнявчик</p>
                                    </div>

                                </div>
                                <div class="results">
                                    <h3>Итог <span>480 грн</span></h3>
                                    <a href="#" class="button">Заказать</a>

                                </div>
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
                                    <h2 class="title reviews">Контакты</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--END CONTENT-->

        <!--START FOOTER-->

<!--        <footer>-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>-->
<!---->
<!--                        <form action="">-->
<!--                            <h4>Связаться с нами</h4>-->
<!--                            <div class="left-block">-->
<!--                                <input type="text" placeholder="Имя">-->
<!--                                <input type="email" placeholder="Email">-->
<!--                                <ul class="soc">-->
<!--                                    <li>-->
<!--                                        <a href="https://vk.com/anhel.kids" target="_blank"><img src="--><?php //bloginfo("template_directory");?><!--/images/vk-forma.svg" alt=""></a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="https://www.facebook.com/anhel.kids/" target="_blank"><img src="--><?php //bloginfo("template_directory");?><!--/images/facebook.svg" alt=""></a>-->
<!--                                    </li>-->
<!--                                    <li>-->
<!--                                        <a href="https://www.instagram.com/anhel_kids/" target="_blank"><img src="--><?php //bloginfo("template_directory");?><!--/images/instagram.svg" alt=""></a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                                <input type="submit" value="Отправить">-->
<!--                            </div>-->
<!--                            <textarea placeholder="Сообщение"></textarea>-->
<!--                        </form>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </footer>-->
<!--    </div>-->
    <!--END FOOTER-->



    <!--START MODAL-->
    <div class="modal fade cloth-modal" aria-hidden="true">
        <div class="modal-dialog modal-lg full-width">
            <div class="modal-content">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#cloth-1" data-toggle="tab">Хлопок</a></li>
                    <li><a href="#cloth-2" data-toggle="tab">Плащевка</a></li>
                    <li><a href="#cloth-3" data-toggle="tab">Кожа</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="cloth-1">
                        <div class="items">
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/belts.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-1" >
                                        <label for="cloth-modal-1"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-3.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-2">
                                        <label for="cloth-modal-2"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-4.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-3">
                                        <label for="cloth-modal-3"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/Bib.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-4">
                                        <label for="cloth-modal-4"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/belts.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-5">
                                        <label for="cloth-modal-5"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-3.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-6">
                                        <label for="cloth-modal-6"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-4.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-7">
                                        <label for="cloth-modal-7"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/Bib.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-8">
                                        <label for="cloth-modal-8"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/belts.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-9">
                                        <label for="cloth-modal-9"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-3.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-10">
                                        <label for="cloth-modal-10"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-4.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-11">
                                        <label for="cloth-modal-11"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/Bib.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-12" checked="checked" >
                                        <label for="cloth-modal-12"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="cloth-2">
                        <div class="items">
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/Bib.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-13">
                                        <label for="cloth-modal-13"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/belts.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-14">
                                        <label for="cloth-modal-14"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-3.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-15">
                                        <label for="cloth-modal-15"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-4.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-16">
                                        <label for="cloth-modal-16"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/Bib.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-17" checked="checked" >
                                        <label for="cloth-modal-17"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="cloth-3">
                        <div class="items">
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/belts.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-18" >
                                        <label for="cloth-modal-18"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-3.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-19">
                                        <label for="cloth-modal-19"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-4.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-20">
                                        <label for="cloth-modal-20"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/Bib.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-21">
                                        <label for="cloth-modal-21"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/belts.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-22">
                                        <label for="cloth-modal-22"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-3.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-23">
                                        <label for="cloth-modal-23"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/images-4.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-24">
                                        <label for="cloth-modal-24"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="img">
                                    <img src="<?php bloginfo("template_directory");?>/images/Bib.png" alt="#">
                                    <div class="hover">
                                        <p>Нажмите <br> для выбора</p>
                                        <button class="button" data-dismiss="modal" aria-hidden="true">Выбрать</button>
                                        <input type="radio" name="cloth-modal" id="cloth-modal-25">
                                        <label for="cloth-modal-25"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--END MODAL-->
    <?php

    get_footer();

    ?>

    <script>
        $(document).ready(function() {
            $('.constructor-slider').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
            });

            $('.img ').on('click', function(){
                    $('.img').removeClass('active');
                    $(this).addClass('active').find('input').prop("checked", true).trigger("click");
                }
            );
        });
    </script>

