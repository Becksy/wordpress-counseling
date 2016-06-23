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

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shapely' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="nav-container">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <div class="container nav-bar">
                        <div class="row">
                            <div class="module left">
                                <?php shapely_get_header_logo(); ?>
                            </div>
                            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                                <i class="fa fa-bars"></i>
                            </div>
                            <div class="module-group right">
                                <div class="module left">
                                    <?php shapely_header_menu(); // main navigation ?>
                                </div>
                                <!--end of menu module-->


                                <div class="module widget-handle search-widget-handle left">
																	<?php if(is_user_logged_in()) :?>
                                    <div class="menu">
																			<div>로그아웃</div>
                                    </div>
																		<div class="function">
																			<div class="ab-sub-wrapper">
																				<ul class="ab-submenu">
																					<li><a class="ab-item" href="<?php echo wp_logout_url(home_url()); ?>">로그아웃</a></li>
																					<li><a class="ab-item" href="#">계정관리</a></li>
																				</ul>
																			</div>
                                    </div>


																	<?php endif; ?>
																	<?php if(!is_user_logged_in()) :?>
																		<div class="menu">
                                        <div>로그인</div>
                                    </div>
                                    <div class="function">
																			<div class="container">
																				<?php do_action( 'wordpress_social_login' ); ?>
																			</div>
                                    </div>
																	<?php endif; ?>
                                </div>


                            </div>
                            <!--end of module group-->
                        </div>
                </div>
            </nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->

	<div id="content" class="main-container">
    <section class="page-title-section bg-secondary">
      <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <h3 class="page-title"> 고민이 등록되었습니다 </h3>

            </div>
        </div>
      </div>
    </section>
    <section class="content-area <?php echo ( get_theme_mod('top_callout', true ) ) ? '' : ' pt0 ' ?>">
      <div id="main" class="<?php echo ( !is_page_template( 'template-home.php' )) ? 'container': ''; ?>" role="main">
        <div class="row">
          <?php $layout_class = ( function_exists('shapely_get_layout_class') ) ? shapely_get_layout_class(): ''; ?>
          <div id="primary" class="col-md-9 mb-xs-24 <?php echo $layout_class; ?>">
            <main id="main" class="site-main" role="main">


<?php
$user_name = wp_get_current_user();

$my_post = array(
'post_title'    => wp_strip_all_tags($user_name->user_login),
'post_content'  => $_POST['counseling_content'],
'post_status'   => 'publish',
'post_type'     => 'counseling',
'comment_status'=> 'open',
);

$newpost_id = wp_insert_post( $my_post );
?>

아래의 글에서 고민을 확인해 볼 수 있습니다.<br><br>

<h4><a href="<?php echo get_the_permalink($newpost_id); ?>"> <?php echo $_POST['counseling_content'];?></a></h4>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
