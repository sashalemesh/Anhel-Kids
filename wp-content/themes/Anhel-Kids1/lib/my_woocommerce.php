<?php
//WooCommerce
//First unhook the WooCommerce wrappers:
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//Then hook in your own functions to display the wrappers your theme requires:
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}

//Declare WooCommerce support
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


//products thumbnail
function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
    global $post;
    $image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

    if ( has_post_thumbnail() ) {
        $props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
        return '<div class="img" style="background-image:url('.get_the_post_thumbnail_url().');"></div>';

    } elseif ( wc_placeholder_img_src() ) {
        return wc_placeholder_img( $image_size );
    }
}

// define the woocommerce_product_add_to_cart_text callback
function filter_woocommerce_product_add_to_cart_text( $text, $instance ) {
    $text = 'Купить';
    return $text;
};

// add the filter
add_filter( 'woocommerce_product_add_to_cart_text', 'filter_woocommerce_product_add_to_cart_text', 10, 2 );


/**
 * Show the product title in the product loop. By default this is an H3.
*/
function woocommerce_template_loop_product_title() {
    echo '<h5>' . get_the_title() . '</h5>';
}

//bilding table checkout
function woocommerce_form_field( $key, $args, $value = null ) {
    $defaults = array(
        'type'              => 'text',
        'label'             => '',
        'description'       => '',
        'placeholder'       => '',
        'maxlength'         => false,
        'required'          => false,
        'autocomplete'      => false,
        'id'                => $key,
        'class'             => array(),
        'label_class'       => array(),
        'input_class'       => array(),
        'return'            => false,
        'options'           => array(),
        'custom_attributes' => array(),
        'validate'          => array(),
        'default'           => '',
    );

    $args = wp_parse_args( $args, $defaults );
    $args = apply_filters( 'woocommerce_form_field_args', $args, $key, $value );

    if ( $args['required'] ) {
        $args['class'][] = 'validate-required';
        $required = ' <abbr class="required" title="' . esc_attr__( 'required', 'woocommerce'  ) . '">*</abbr>';
    } else {
        $required = '';
    }

    $args['maxlength'] = ( $args['maxlength'] ) ? 'maxlength="' . absint( $args['maxlength'] ) . '"' : '';

    $args['autocomplete'] = ( $args['autocomplete'] ) ? 'autocomplete="' . esc_attr( $args['autocomplete'] ) . '"' : '';

    if ( is_string( $args['label_class'] ) ) {
        $args['label_class'] = array( $args['label_class'] );
    }

    if ( is_null( $value ) ) {
        $value = $args['default'];
    }

    // Custom attribute handling
    $custom_attributes = array();

    if ( ! empty( $args['custom_attributes'] ) && is_array( $args['custom_attributes'] ) ) {
        foreach ( $args['custom_attributes'] as $attribute => $attribute_value ) {
            $custom_attributes[] = esc_attr( $attribute ) . '="' . esc_attr( $attribute_value ) . '"';
        }
    }

    if ( ! empty( $args['validate'] ) ) {
        foreach( $args['validate'] as $validate ) {
            $args['class'][] = 'validate-' . $validate;
        }
    }

    $field = '';
    $label_id = $args['id'];
    $field_container = '<p class="form-row %1$s" id="%2$s">%3$s</p>';

    switch ( $args['type'] ) {
        case 'country' :

            $countries = 'shipping_country' === $key ? WC()->countries->get_shipping_countries() : WC()->countries->get_allowed_countries();

            if ( 1 === sizeof( $countries ) ) {

                $field .= '<strong>' . current( array_values( $countries ) ) . '</strong>';

                $field .= '<input type="hidden" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="' . current( array_keys($countries ) ) . '" ' . implode( ' ', $custom_attributes ) . ' class="country_to_state" />';

            } else {

                $field = '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" ' . $args['autocomplete'] . ' class="country_to_state country_select ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" ' . implode( ' ', $custom_attributes ) . '>'
                    . '<option value="">'.__( 'Select a country&hellip;', 'woocommerce' ) .'</option>';

                foreach ( $countries as $ckey => $cvalue ) {
                    $field .= '<option value="' . esc_attr( $ckey ) . '" '. selected( $value, $ckey, false ) . '>'. __( $cvalue, 'woocommerce' ) .'</option>';
                }

                $field .= '</select>';

                $field .= '<noscript><input type="submit" name="woocommerce_checkout_update_totals" value="' . esc_attr__( 'Update country', 'woocommerce' ) . '" /></noscript>';

            }

            break;
        case 'state' :

            /* Get Country */
            $country_key = 'billing_state' === $key ? 'billing_country' : 'shipping_country';
            $current_cc  = WC()->checkout->get_value( $country_key );
            $states      = WC()->countries->get_states( $current_cc );

            if ( is_array( $states ) && empty( $states ) ) {

                $field_container = '<p class="form-row %1$s" id="%2$s" style="display: none">%3$s</p>';

                $field .= '<input type="hidden" class="hidden" name="' . esc_attr( $key )  . '" id="' . esc_attr( $args['id'] ) . '" value="" ' . implode( ' ', $custom_attributes ) . ' placeholder="' . esc_attr( $args['placeholder'] ) . '" />';

            } elseif ( is_array( $states ) ) {

                $field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="state_select ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['autocomplete'] . '>
						<option value="">'.__( 'Select a state&hellip;', 'woocommerce' ) .'</option>';

                foreach ( $states as $ckey => $cvalue ) {
                    $field .= '<option value="' . esc_attr( $ckey ) . '" '.selected( $value, $ckey, false ) .'>'.__( $cvalue, 'woocommerce' ) .'</option>';
                }

                $field .= '</select>';

            } else {

                $field .= '<input type="text" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" value="' . esc_attr( $value ) . '"  placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['autocomplete'] . ' name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

            }

            break;
        case 'textarea' :

            $field .= '<textarea name="' . esc_attr( $key ) . '" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['maxlength'] . ' ' . $args['autocomplete'] . ' ' . ( empty( $args['custom_attributes']['rows'] ) ? ' rows="2"' : '' ) . ( empty( $args['custom_attributes']['cols'] ) ? ' cols="5"' : '' ) . implode( ' ', $custom_attributes ) . '>'. esc_textarea( $value  ) .'</textarea>';

            break;
        case 'checkbox' :

            $field = '<label class="checkbox ' . implode( ' ', $args['label_class'] ) .'" ' . implode( ' ', $custom_attributes ) . '>
						<input type="' . esc_attr( $args['type'] ) . '" class="input-checkbox ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" value="1" '.checked( $value, 1, false ) .' /> '
                . $args['label'] . $required . '</label>';

            break;
        case 'password' :
        case 'text' :
        case 'email' :
        case 'tel' :
        case 'number' :

            $field .= '<input type="' . esc_attr( $args['type'] ) . '" class="input-text ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['maxlength'] . ' ' . $args['autocomplete'] . ' value="' . esc_attr( $value ) . '" ' . implode( ' ', $custom_attributes ) . ' />';

            break;
        case 'select' :

            $options = $field = '';

            if ( ! empty( $args['options'] ) ) {
                foreach ( $args['options'] as $option_key => $option_text ) {
                    if ( '' === $option_key ) {
                        // If we have a blank option, select2 needs a placeholder
                        if ( empty( $args['placeholder'] ) ) {
                            $args['placeholder'] = $option_text ? $option_text : __( 'Choose an option', 'woocommerce' );
                        }
                        $custom_attributes[] = 'data-allow_clear="true"';
                    }
                    $options .= '<option value="' . esc_attr( $option_key ) . '" '. selected( $value, $option_key, false ) . '>' . esc_attr( $option_text ) .'</option>';
                }

                $field .= '<select name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '" class="select '. esc_attr( implode( ' ', $args['input_class'] ) ) . '" ' . implode( ' ', $custom_attributes ) . ' data-placeholder="' . esc_attr( $args['placeholder'] ) . '" ' . $args['autocomplete'] . '>
							' . $options . '
						</select>';
            }

            break;
        case 'radio' :

            $label_id = current( array_keys( $args['options'] ) );

            if ( ! empty( $args['options'] ) ) {
                foreach ( $args['options'] as $option_key => $option_text ) {
                    $field .= '<input type="radio" class="input-radio ' . esc_attr( implode( ' ', $args['input_class'] ) ) .'" value="' . esc_attr( $option_key ) . '" name="' . esc_attr( $key ) . '" id="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '"' . checked( $value, $option_key, false ) . ' />';
                    $field .= '<label for="' . esc_attr( $args['id'] ) . '_' . esc_attr( $option_key ) . '" class="radio ' . implode( ' ', $args['label_class'] ) .'">' . $option_text . '</label>';
                }
            }

            break;
    }

    if ( ! empty( $field ) ) {
        $field_html = '';

        if ( $args['label'] && 'checkbox' != $args['type'] ) {
            $field_html .= '<label for="' . esc_attr( $label_id ) . '" class="' . esc_attr( implode( ' ', $args['label_class'] ) ) .'">' . $args['label'] . $required . '</label>';
        }

        $field_html .= $field;

        if ( $args['description'] ) {
            $field_html .= '<span class="description">' . esc_html( $args['description'] ) . '</span>';
        }

        $container_class = 'form-row ' . esc_attr( implode( ' ', $args['class'] ) );
        $container_id = esc_attr( $args['id'] ) . '_field';

        $after = ! empty( $args['clear'] ) ? '<div class="clear"></div>' : '';

        $field = sprintf( $field_container, $container_class, $container_id, $field_html ) . $after;
    }

    $field = apply_filters( 'woocommerce_form_field_' . $args['type'], $field, $key, $args, $value );

    if ( $args['return'] ) {
        return $field;
    } else {
        echo $field;
    }
}


//setings product variable
/**
 * Output a list of variation attributes for use in the cart forms.
 *
 * @param array $args
 * @since 2.4.0
 */
function wc_dropdown_variation_attribute_options( $args = array() ) {
    $args = wp_parse_args( apply_filters( 'woocommerce_dropdown_variation_attribute_options_args', $args ), array(
        'options'          => false,
        'attribute'        => false,
        'product'          => false,
        'selected' 	       => false,
        'name'             => '',
        'id'               => '',
        'class'            => '',
        'show_option_none' => __( 'Choose an option', 'woocommerce' )
    ) );

    $options               = $args['options'];
    $product               = $args['product'];
    $attribute             = $args['attribute'];
    $name                  = $args['name'] ? $args['name'] : 'attribute_' . sanitize_title( $attribute );
    $id                    = $args['id'] ? $args['id'] : sanitize_title( $attribute );
    $class                 = $args['class'];
    $show_option_none      = $args['show_option_none'] ? true : false;
    $show_option_none_text = $args['show_option_none'] ? $args['show_option_none'] : __( 'Choose an option', 'woocommerce' ); // We'll do our best to hide the placeholder, but we'll need to show something when resetting options.

    if ( empty( $options ) && ! empty( $product ) && ! empty( $attribute ) ) {
        $attributes = $product->get_variation_attributes();
        $options    = $attributes[ $attribute ];
    }
//Формирует вывод свойств продукта
    $html = '<select id="' . esc_attr( $id ) . '" class="' . esc_attr( $class ) . '" name="' . esc_attr( $name ) . '" data-attribute_name="attribute_' . esc_attr( sanitize_title( $attribute ) ) . '"' . '" data-show_option_none="' . ( $show_option_none ? 'yes' : 'no' ) . '">';
    $html .= '<option value="">' . esc_html( $show_option_none_text ) . '</option>';

    if ( ! empty( $options ) ) {
        if ( $product && taxonomy_exists( $attribute ) ) {
            // Get terms if this is a taxonomy - ordered. We need the names too.
            $terms = wc_get_product_terms( $product->id, $attribute, array( 'fields' => 'all' ) );

            foreach ( $terms as $term ) {
                if ( in_array( $term->slug, $options ) ) {
                    $html .= '<option value="' . esc_attr( $term->slug ) . '" ' . selected( sanitize_title( $args['selected'] ), $term->slug, false ) . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $term->name ) ) . '</option>';
                }
            }
        } else {
            foreach ( $options as $option ) {
                // This handles < 2.4.0 bw compatibility where text attributes were not sanitized.
                $selected = sanitize_title( $args['selected'] ) === $args['selected'] ? selected( $args['selected'], sanitize_title( $option ), false ) : selected( $args['selected'], $option, false );
                $html .= '<option value="' . esc_attr( $option ) . '" ' . $selected . '>' . esc_html( apply_filters( 'woocommerce_variation_option_name', $option ) ) . '</option>';
            }
        }
    }

    $html .= '</select>';

    echo apply_filters( 'woocommerce_dropdown_variation_attribute_options_html', $html, $args );
}


//edit price
//add_filter( 'woocommerce_get_price_html', 'wpa83367_price_html', 100, 2 );
//function wpa83367_price_html( $price, $product ){
//    return 'Was:' . str_replace( '<ins>', ' Now:<ins>', $price );
//}
//function wpa83368_price_html( $price,$product ){
////     return $product->price;
//    if ( $product->price > 0 ) {
//        if ( $product->price && isset( $product->regular_price ) ) {
//            $from = $product->regular_price;
//            $to = $product->price;
//            return '<div class="old-colt"><del>'. ( ( is_numeric( $from ) ) ? woocommerce_price( $from ) : $from ) .' Retail </del>  | </div><div class="live-colst">'.( ( is_numeric( $to ) ) ? woocommerce_price( $to ) : $to ) .'Our Price</div>';
//        } else {
//            $to = $product->price;
//            return '<div class="live-colst">' . ( ( is_numeric( $to ) ) ? woocommerce_price( $to ) : $to ) . 'Our Price</div>';
//        }
//    } else {
//        return '<div class="live-colst">0 Our Price</div>';
//    }
//}


//add_filter('wc_price',my_wc_price);
//function my_wc_price($return){
//    $returne = '';
//echo'<span>'. $return .'</span>';
//    echo '<pre>';
//    var_dump($return);
//    echo '</pre>';
//}


//edit price Начиная от
//function wc_ninja_custom_variable_price( $price, $product ) {
//    // Main Price
//    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
//    $price = $prices[0] !== $prices[1] ? sprintf( __( 'Начиная от: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
//
//    // Sale Price
//    $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
//    sort( $prices );
//    $saleprice = $prices[0] !== $prices[1] ? sprintf( __( 'Начиная от: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
//
//    if ( $price !== $saleprice ) {
//        $price = '' . $saleprice . ' ' . $price . '';
//    }
//
//    return $price;
//}
//add_filter( 'woocommerce_variable_sale_price_html', 'wc_ninja_custom_variable_price', 10, 2 );
//add_filter( 'woocommerce_variable_price_html', 'wc_ninja_custom_variable_price', 10, 2 );

//edit <del class="wer"> dont work!!!
//class  my_WC_Product extends  WC_Product {
//    public function get_price_html_from_to( $from, $to ) {
//        $price = '<del class="wer">' . ( ( is_numeric( $from ) ) ? wc_price( $from ) : $from ) . '</del> <ins>' . ( ( is_numeric( $to ) ) ? wc_price( $to ) : $to ) . '</ins>';
//
//        return apply_filters( 'woocommerce_get_price_html_from_to', $price, $from, $to, $this );
//    }
//}

