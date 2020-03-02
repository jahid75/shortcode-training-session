<?php
/*
 Template Name: My Page
 */
get_header();
// $texts = range('A', 'Z');
$texts = ['Apple', 'Banana', 'Mango', 'ManGo', 'mango'];
$search = ['mango', 'banana'];
$mangoes = array_filter( $texts, function($item) use ($search){
    return in_array( strtolower($item), $search);
});
?>

<div class="container" style="padding: 50px 0">
    <?php
    wp_login_form();
    /*
    foreach ($texts as $text) {
        //        if( 'C' == $text ){
        //            echo 'Cat ';
        //        }
        //        elseif( 'D' == $text ){
        //            echo 'Dog ';
        //        }
        //        else {
        //            echo $text . ' ';
        //        }

        switch ( $text ){
            case 'C':
                echo 'Cat ';
                break;
            case 'D':
                echo 'Dog ';
                break;
            case 'M':
                echo 'Mango ';
                break;
            default:
                echo $text . ' ';
        }
    }
    */
     // echo join( ', ', (array) $mangoes );

//    if( in_array( 'Mango',  $texts ) ) {
//         echo implode( ', ', (array) $texts );
//    } else {
//        echo $texts;
//    }


    ?>
</div>
<?php

get_footer();