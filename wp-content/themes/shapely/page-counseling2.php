<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

get_header(); ?>

<?php $layout_class = ( function_exists('shapely_get_layout_class') ) ? shapely_get_layout_class(): ''; ?>
<div id="primary" class="col-md-9 mb-xs-24 <?php echo $layout_class; ?>">
  <main id="main" class="site-main" role="main">

		<?php
		$user_name = wp_get_current_user();
		$jay_post_content = '<XMP>'.$_POST['counseling_content'].'</XMP>';
		$my_post = array(
		'post_title'    => wp_strip_all_tags($user_name->user_login),
		'post_content'  => $jay_post_content,
		'post_status'   => 'publish',
		'post_type'     => 'counseling',
		'comment_status'=> 'open',
		);

		$newpost_id = wp_insert_post( $my_post );
		?>

		<p>아래의 글에서 고민을 확인해 볼 수 있습니다.</p></br></br>

		<div style="word-break:break-all" class="entry-content">
			<h4><a href="<?php echo get_the_permalink($newpost_id); ?>" > <?php echo $_POST['counseling_content'];?></a></h4>
		</div>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
