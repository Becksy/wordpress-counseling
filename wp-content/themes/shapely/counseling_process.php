<?php
$my_post = array(
'post_title'    => wp_strip_all_tags( "sdfsdfsd" ),
'post_content'  => $_POST['counseling_content'],
'post_status'   => 'publish',
);

echo wp_insert_post( $my_post );
?>
