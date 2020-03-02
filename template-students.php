<?php
/*
 Template Name: Students
 */


get_header(); ?>

<div id="primary" class="full-width-mega">
    <?php
    $args = array(
        'post_type'         => 'post',
        'posts_per_page'    => -1,
        'category_name'     => 'bengali'
//        'tax_query' => array(
//            'relation' => 'AND',
//            array(
//                'taxonomy'=> 'book',
//                'terms'   => 2
//            ),
//            array(
//                'taxonomy'=> 'fruit',
//                'field'   => 'slug',
//                'terms'   => 'mango'
//            ),
//        )
    );
    $args = apply_filters( 'ac_post_query', $args );
    // new WP_Query( $args ); // Class
    // get_posts( $args ); // Function

    // $posts = get_posts( $args );
//    if( count( $posts ) > 0 ) {
//        foreach ($posts as $post) {
//            setup_postdata( $post );
//            $post_link = get_permalink();
//            echo "<h4>" . get_the_title() . "</h4>";
//            echo "<p><a href='{$post_link}'>View Post</a></p>";
//        }
//    }
        $posts = new WP_Query( $args );
        if( $posts->have_posts() ){
            while ( $posts->have_posts() ){
                $posts->the_post();
                $post_link = get_permalink();
                echo "<h4>" . get_the_title() . "</h4>";
                echo "<p><a href='{$post_link}'>View Post</a></p>";
            }
        }
    else {
        echo "No Posts found!";
    }

    ?>
</div><!-- #primary -->
<?php get_footer(); ?>
