<?php

if( ! defined( 'ABSPATH' ) ) die( 'No direct access!' );

// Shortcode for Button
function astra_child_button( $atts, $content = '') {
    $params = array(
        'url'       => '#',
        'target'    => '',
        'classes'   => '',
        'title'     => ''
    );
    $atts = shortcode_atts($params, $atts, 'ac_button' );
    extract( $atts );
    if( ! empty( $target ) ) {
        $target = 'target="' . $target . '"';
    }
    ob_start(); ?>
    <a href="<?php echo esc_url( $url ); ?>" <?php echo $target; ?> class="<?php echo $classes; ?>"><?php echo do_shortcode($content); ?></a>
    <?php
    return ob_get_clean();
}
add_shortcode( 'ac_button', 'astra_child_button' );


// [ac_button url=hasldfkjasdf ] Click Here [/ac_button]

// Nested Shortcode example
function astra_child_ul($atts, $content = '') {
    return '<ul>'. do_shortcode($content) .'</ul>';
}
add_shortcode( 'ac_ul', 'astra_child_ul' );

// Nested child shortcode
function astra_child_li( $atts, $content=''){
    return '<li>' . do_shortcode($content) . '</li>';
}
add_shortcode( 'ac_li', 'astra_child_li' );