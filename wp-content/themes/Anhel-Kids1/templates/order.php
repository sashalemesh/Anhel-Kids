<?php
/**Template name: order_page */

get_header();

?>



    <!--END HEADER-->

    <!--START CONTENT-->
<!--<body>-->
<!--START HEADER-->
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

<!--        --><?php
//        /**
//         * Review order table
//         *
//         * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
//         *
//         * HOWEVER, on occasion WooCommerce will need to update template files and you
//         * (the theme developer) will need to copy the new files to your theme to
//         * maintain compatibility. We try to do this as little as possible, but it does
//         * happen. When this occurs the version of the template file will be bumped and
//         * the readme will list any important changes.
//         *
//         * @see 	    https://docs.woocommerce.com/document/template-structure/
//         * @author 		WooThemes
//         * @package 	WooCommerce/Templates
//         * @version     2.3.0
//         */
//
//        if ( ! defined( 'ABSPATH' ) ) {
//            exit;
//        }
//        ?>
<!--        <table class="shop_table woocommerce-checkout-review-order-table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th class="product-name">[1wer]--><?php //_e( 'Product', 'woocommerce' ); ?><!--</th>-->
<!--                <th class="product-total">[1wer]--><?php //_e( 'Total', 'woocommerce' ); ?><!--</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php
////            do_action( 'woocommerce_review_order_before_cart_contents' );
//
//            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
//                $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
//
//                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
//                    ?>
<!--                    <tr class="--><?php //echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?><!--">-->
<!--                        <td class="product-name">-->
<!--                            [2wer] --><?php //echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?>
<!--                            [3wer] --><?php //echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?>
<!--                            --><?php//// echo WC()->cart->get_item_data( $cart_item ); ?>
<!--                        </td>-->
<!--                        <td class="product-total">-->
<!--                            [wer4]--><?php //echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
<!--                        </td>-->
<!--                    </tr>-->
<!--                    --><?php
//                }
//            }
//
////            do_action( 'woocommerce_review_order_after_cart_contents' );
//            ?>
<!--            </tbody>-->
<!--            <tfoot>-->
<!---->
<!--            <tr class="cart-subtotal">-->
<!--                <th>[5wer]--><?php //_e( 'Subtotal', 'woocommerce' ); ?><!--</th>-->
<!--                <td>[5wer]--><?php //wc_cart_totals_subtotal_html(); ?><!--</td>-->
<!--            </tr>-->
<!---->
<!--            <tr class="order-total">-->
<!--                <th>[6wer]--><?php //_e( 'Total', 'woocommerce' ); ?><!--</th>-->
<!--                <td>[6wer]--><?php //wc_cart_totals_order_total_html(); ?><!--</td>-->
<!--            </tr>-->
<!---->
<!--            --><?php ////do_action( 'woocommerce_review_order_after_order_total' ); ?>
<!---->
<!--            </tfoot>-->
<!--        </table>-->
<!---->
<!--        <br>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!--        --><?php //echo do_shortcode('[woocommerce_cart]');
//
//       echo do_shortcode('[woocommerce_checkout]');?>
<!--Конец Нужно удалить-->
        <div class="orders">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<!--                        <ul class="order">-->
                        <?php echo do_shortcode('[woocommerce_cart]');?>
                            <!--Криво ссылки выводит-->
<!--                            --><?php
//                            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
//                                $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
//                                if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) {
//                                    ?>
                            <?php
                            //твечает за вывод страницы карзины
//                            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
//                                $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
//                                $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );
//
//                                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
//                                    $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
//                                    ?>
<!---->
<!--                                    <li>-->
                                        <!--Выводим картинки (необходимо стили править)-->
<!--                                        <div class="img" style="background-image:url();">-->
<!--                                            --><?php
//                                            $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
//
//                                            if ( ! $product_permalink ) {
//                                                echo $thumbnail;
//                                            } else {
//                                                printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );
//                                            }
//                                            ?>
<!--                                        </div>-->
<!--                                        <div class="description">-->
                                            <!--Выводит тайтл-->
<!--                                            <p>--><?php //echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;'; ?><!--</p>-->
<!--<p>--><?php //if ( ! $product_permalink ) {
//    echo apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key ) . '&nbsp;';
//    } else {
//    echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_title() ), $cart_item, $cart_item_key );
//    } ?><!--</p>-->
<!--                                            <b>[--><?php //echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times; %s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); ?><!--]-->
<!--                                                --><?php //echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?><!--</b>-->
<!--                                        </div>-->
<!---->
<!--                                    </li>-->
<!---->
<!--                                    --><?php
//                                }
//                            }
//                            ?>
<!--                        </ul>-->
                        <!--Subtotal заменить на Total-->
<!--                        <p class="result">--><?php //_e( 'Subtotal', 'woocommerce' ); ?><!--  --><?php //wc_cart_totals_subtotal_html(); ?><!--</p>-->

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
<!--                        <form>-->
<!--                            <input type="text" placeholder="Имя">-->
<!--                            <input type="text" placeholder="Фамилия">-->
<!--                            <input type="tel" placeholder="Телефон">-->
<!--                            <input type="email" placeholder="Email">-->
<!--                            <input type="text" placeholder="Город">-->
<!--                            <input type="text" placeholder="Номер отделения Новой почты">-->
<!--                            <label for="">или</label>-->
<!--                            <input type="text" placeholder="Номер отделения Укрпочты">-->
<!--                            <input type="submit" value="Оплатить">-->
<!--                            <input type="submit" value="Оставить заявку">-->
<!--                        </form>-->
                        <?php echo do_shortcode('[woocommerce_checkout]'); ?>
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
