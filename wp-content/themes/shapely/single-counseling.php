<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shapely
 */

get_header(); ?>

    <?php $layout_class = ( function_exists('shapely_get_layout_class') ) ? shapely_get_layout_class(): ''; ?>
	<div id="primary" class="col-md-9 mb-xs-24 <?php echo $layout_class; ?>">
		<main id="main" class="site-main" role="main">

		<?php
    global $post;
    $author_id= $post->post_author;

    if(get_current_user_id()==$author_id){
  		the_post();

      $Jay = get_post_format().'Jay';
  		get_template_part( 'template-parts/content', $Jay );

  			// If comments are open or we have at least one comment, load up the comment template.
  		if ( comments_open() || get_comments_number() ) :
  			comments_template();
  		endif;
    }else{
      echo "<h4>해당 고민에 초대 받지 않았습니다.</h4>";
    }


		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
