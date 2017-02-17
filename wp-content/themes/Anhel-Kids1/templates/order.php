<?php
/**Template name: order_page */

get_header();

?>



    <!--END HEADER-->

    <!--START CONTENT-->
<!--<body>-->
<!--<!--START HEADER-->-->
<!--<div class="internal-pages">-->
<!--    <header>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
<!--                    <ul class="menu">-->
<!--                        <li class="logo"><a href="#"><img src="--><?php //bloginfo("template_directory");?><!--/images/logotype.svg" alt=""></a></li>-->
<!--                        <li class="constructor"><a href="#"><p>Конструктор</p></a></li>-->
<!--                        <li class="catalog"><a href="#"><p>Каталог</p></a></li>-->
<!--                        <li class="gallery"><a href="#"><p>Галерея</p></a></li>-->
<!--                        <li class="about-us"><a href="#"><p>О нас</p></a></li>-->
<!--                        <li class="vk"><a href="https://vk.com/anhel.kids" target="_blank"><img src="--><?php //bloginfo("template_directory");?><!--/images/vk.svg" alt=""></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header>-->
    <section>
        <div class="samples">
            <div class="title">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h2 class="title">Ваш заказ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--       Начало Нужно удалить-->
<br>
<br>
<br>
<br>
<br>
        <?php
        /**
         * Review order table
         *
         * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
         *
         * HOWEVER, on occasion WooCommerce will need to update template files and you
         * (the theme developer) will need to copy the new files to your theme to
         * maintain compatibility. We try to do this as little as possible, but it does
         * happen. When this occurs the version of the template file will be bumped and
         * the readme will list any important changes.
         *
         * @see 	    https://docs.woocommerce.com/document/template-structure/
         * @author 		WooThemes
         * @package 	WooCommerce/Templates
         * @version     2.3.0
         */

        if ( ! defined( 'ABSPATH' ) ) {
            exit;
        }
        ?>
        <table class="shop_table woocommerce-checkout-review-order-table">
            <thead>
            <tr>
                <th class="product-name">[1wer]<?php _e( 'Product', 'woocommerce' ); ?></th>
                <th class="product-total">[1wer]<?php _e( 'Total', 'woocommerce' ); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php
//            do_action( 'woocommerce_review_order_before_cart_contents' );

            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                    ?>
                    <tr class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                        <td class="product-name">
                            [2wer] <?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
                            [3wer] <?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
                            <?php// echo WC()->cart->get_item_data( $cart_item ); ?>
                        </td>
                        <td class="product-total">
                            [wer4]<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
                        </td>
                    </tr>
                    <?php
                }
            }

//            do_action( 'woocommerce_review_order_after_cart_contents' );
            ?>
            </tbody>
            <tfoot>

            <tr class="cart-subtotal">
                <th>[5wer]<?php _e( 'Subtotal', 'woocommerce' ); ?></th>
                <td>[5wer]<?php wc_cart_totals_subtotal_html(); ?></td>
            </tr>

<!--            --><?php //foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
<!--                <tr class="cart-discount coupon---><?php //echo esc_attr( sanitize_title( $code ) ); ?><!--">-->
<!--                    <th>--><?php //wc_cart_totals_coupon_label( $coupon ); ?><!--</th>-->
<!--                    <td>--><?php //wc_cart_totals_coupon_html( $coupon ); ?><!--</td>-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>
<!---->
<!--            --><?php //if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
<!---->
<!--                --><?php //do_action( 'woocommerce_review_order_before_shipping' ); ?>
<!---->
<!--                --><?php //wc_cart_totals_shipping_html(); ?>
<!---->
<!--                --><?php //do_action( 'woocommerce_review_order_after_shipping' ); ?>
<!---->
<!--            --><?php //endif; ?>

<!--            --><?php //foreach ( WC()->cart->get_fees() as $fee ) : ?>
<!--                <tr class="fee">-->
<!--                    <th>--><?php //echo esc_html( $fee->name ); ?><!--</th>-->
<!--                    <td>--><?php //wc_cart_totals_fee_html( $fee ); ?><!--</td>-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>

<!--            --><?php //if ( wc_tax_enabled() && 'excl' === WC()->cart->tax_display_cart ) : ?>
<!--                --><?php //if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
<!--                    --><?php //foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : ?>
<!--                        <tr class="tax-rate tax-rate---><?php //echo sanitize_title( $code ); ?><!--">-->
<!--                            <th>--><?php //echo esc_html( $tax->label ); ?><!--</th>-->
<!--                            <td>--><?php //echo wp_kses_post( $tax->formatted_amount ); ?><!--</td>-->
<!--                        </tr>-->
<!--                    --><?php //endforeach; ?>
<!--                --><?php //else : ?>
<!--                    <tr class="tax-total">-->
<!--                        <th>--><?php //echo esc_html( WC()->countries->tax_or_vat() ); ?><!--</th>-->
<!--                        <td>--><?php //wc_cart_totals_taxes_total_html(); ?><!--</td>-->
<!--                    </tr>-->
<!--                --><?php //endif; ?>
<!--            --><?php //endif; ?>

            <?php //do_action( 'woocommerce_review_order_before_order_total' ); ?>

            <tr class="order-total">
                <th>[6wer]<?php _e( 'Total', 'woocommerce' ); ?></th>
                <td>[6wer]<?php wc_cart_totals_order_total_html(); ?></td>
            </tr>

            <?php //do_action( 'woocommerce_review_order_after_order_total' ); ?>

            </tfoot>
        </table>

        <br>
<br>
<br>
<br>
<br>
        <?php echo do_shortcode('[woocommerce_cart]');

//                    global $post;
//                    echo '<pre>';
//                    var_dump($post);
//                    echo '</pre>';

       echo do_shortcode('[woocommerce_checkout]');?>
<!--Конец Нужно удалить-->
        <div class="orders">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <ul class="order">
                            <?php
                            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) {
                                    ?>

                                    <li>
                                        <div class="img"
                                             style="background-image:url(<?php bloginfo("template_directory"); ?>/images/cover.png);"></div>
                                        <div class="description">
                                            <p><?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?></p>
                                            <b>[<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>]
                                                <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?></b>
                                        </div>
                                    </li>

                                    <?php
                                }
                            }
                            ?>
                        </ul>
                        <p class="result"><?php _e( 'Subtotal', 'woocommerce' ); ?>  <?php wc_cart_totals_subtotal_html(); ?></p>
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
                        <form>
                            <input type="text" placeholder="Имя">
                            <input type="text" placeholder="Фамилия">
                            <input type="tel" placeholder="Телефон">
                            <input type="email" placeholder="Email">
                            <input type="text" placeholder="Город">
                            <input type="text" placeholder="Номер отделения Новой почты">
                            <label for="">или</label>
                            <input type="text" placeholder="Номер отделения Укрпочты">
                            <input type="submit" value="Оплатить">
                            <input type="submit" value="Оставить заявку">
                        </form>
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
