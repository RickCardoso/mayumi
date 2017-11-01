<?php
/**
 * Template part for displaying page content in home.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mayumi
 */

?>

<!-- svg sprites -->
<svg style="width:0; height:0; position: absolute; top: -9999px;">
	<symbol id="clock" viewBox="0 0 70 70">
		<style>
			.cls-1, .cls-3 {
				stroke: #606060;
				fill: none;
			}
			.cls-1 {
				stroke-width: 4px;
			}
			.cls-2 {
				fill: #606060;
			}
			.cls-3 {
				stroke-linecap: round;
				stroke-width: 3px;
				fill-rule: evenodd;
			}
		</style>
		<g>
	    <circle cx="35" cy="35" r="33" class="cls-1"/>
	    <circle cx="35" cy="35" r="4" class="cls-2"/>
	    <path d="M36.500,34.500 L36.500,12.500 " class="cls-3"/>
	    <path d="M35.854,37.646 L25.490,48.010 " class="cls-3"/>
	  </g>
	</symbol>
</svg>
<!---->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<section class="hero-section" style="background-image: url(<?php echo CFS()->get('hero_background'); ?>)">
			<div class="page-container">
				<h1><?php echo CFS()->get('hero_title'); ?></h1>
				<p><?php echo CFS()->get('hero_subtitle'); ?></p>
				<div class="white-line"></div>
				<div class="arrow-down" href="#"><i class="fal fa-chevron-down" data-fa-transform="rotate-45"></i></div>

				<div class="social-menu">

				<?php

				$menu_name = 'menu-3';

		    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) :
					$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
		    	$menu_items = wp_get_nav_menu_items($menu->term_id);

		    	foreach ( (array) $menu_items as $key => $menu_item ) : ?>

						<a class="social-link" href="<?php echo $menu_item->url; ?>"><i class="fab fa-<?php echo $menu_item->title; if ( $menu_item->title == 'facebook' ) : echo '-f'; endif; ?>"></i></a>

			    <?php endforeach;

		    endif; ?>

				</div><!-- .social-menu -->

			</div>
		</section>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<div class="page-container">

			<section class="our-story-section">

				<div class="row">
					<div class="big-col">
						<div class="img-wrap">
							<h1>Our <b>Story</b></h1>
							<?php echo wp_get_attachment_image(CFS()->get('our_story_big_image'), 'full', false, array('class'=>'img-fluid big-image')) ?>
							<div class="line-1"></div>
						</div>
						<div class="text-block">
							<?php echo CFS()->get('our_story_row_2') ?>
							<a class="btn-std btn-blue" href="#">Join Us</a>
						</div>
					</div>
					<div class="small-col">
						<svg><use xlink:href="#clock"></use></svg>
						<div class="text-block">
							<?php echo CFS()->get('our_story_row_1') ?>
						</div>
						<div class="img-wrap">
							<div class="line-2"></div>
							<?php echo wp_get_attachment_image(CFS()->get('our_story_small_image'), 'full', false, array('class'=>'img-fluid')) ?>
							<div class="block-1"></div>
						</div>
					</div>
				</div>

			</section>

		</div>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'mayumi' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
