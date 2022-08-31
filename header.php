<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>



    <header id="masthead" class="site-header">
        		<div class="row header-area">
					<div class="col-lg-2 col-sm-5 flex">
						<img src="<?php echo get_option('logo'); ?>" />
					</div>



					<div class="col-lg-5 col-sm-7 flex-right">
						<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
								</span>
								<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .nav-toggle -->
							
							
						<div class="header-navigation-wrapper">
							<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x( 'Horizontal', 'menu', 'twentytwenty' ); ?>">
								<ul class="primary-menu reset-list-style">
										
									<?php
									if ( has_nav_menu( 'primary' ) ) {

										wp_nav_menu(
											array(
												'container'  => '',
												'items_wrap' => '%3$s',
												'theme_location' => 'primary',
											)
										);

									} elseif ( ! has_nav_menu( 'expanded' ) ) {

										wp_list_pages(
											array(
												'match_menu_classes' => true,
												'show_sub_menu_icons' => true,
												'title_li' => false,
												'walker'   => new TwentyTwenty_Walker_Page(),
											)
										);

									}
									?>

								</ul>

							</nav><!-- .primary-menu-wrapper -->

						
							<div class="header-toggles hide-no-js">
								<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">
									<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
										<span class="toggle-inner">
											<span class="toggle-text"><?php _e( 'Menu', 'twentytwenty' ); ?></span>
											<span class="toggle-icon">
												<?php twentytwenty_the_theme_svg( 'ellipsis' ); ?>
											</span>
										</span>
									</button><!-- .nav-toggle -->
								</div><!-- .nav-toggle-wrapper -->
							</div><!-- .header-toggles -->
						</div><!-- .header-navigation-wrapper -->
					</div>
			

					<div class="col-lg-4 col-md-12 mtop-20 flex-right m-hide">
						<span class="the-search" style="margin-right:20px;"><img src="<?php echo get_template_directory_uri() . '/images/search.png'; ?>" /></span>
						<span class="the-phone" style="margin-right:20px;"><a href="tel:<?php echo get_option('top_phone_number'); ?>"><?php echo get_option('top_phone_number'); ?></a></span>
                		<span><a href="<?php echo get_option('top_button_link'); ?>"><div class="top-button-right" style="display:inline;"><?php echo get_option('top_button_text'); ?></div></a></span>
					</div>
					
					
				</div>
	</header>


		

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
