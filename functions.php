<?php

add_filter( 'the_title', 'wpse_64467_prefix_title', '', 2 );
function wpse_64467_prefix_title( $title, $id ){
    if (strpos($title, '|')):
        $title_array = explode('|', $title);
    else:
        $title_array = '';
    endif;
    return is_array($title_array) ? $title_array[0] : $title;
}
?>