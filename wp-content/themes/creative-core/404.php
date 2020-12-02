<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Ferus_Core
 */

get_header();
?>
<?php
$image = get_template_directory_uri() . '/inc/images/hero.jpg';
?>
<div id="page-header" class="content-center">
		<div class="header-img parallax v-align" data-plx-img="<?php echo $image; ?>">
				<div class="header-content v-inner">
					<h1 class="page-title">Whoops! Nothing Found</h1>
					<!-- <div class="header-subline"></div> -->
				</div>
		</div>
</div>

<div class="container">

		<!-- Page Top Widgets -->
		<?php if ( is_active_sidebar( 'page-top' ) ) : ?>
				<section id="page-top" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'page-top' ); ?>
				</section>
		<?php endif; ?>

		<div class="row">

				<div id="primary" class="content-area page-body col-md-12">

						<!-- Inner Top Widgets -->
						<?php if ( is_active_sidebar( 'inner-top' ) ) : ?>
								<section id="inner-top" class="widget-area" role="complementary">
										<?php dynamic_sidebar( 'inner-top' ); ?>
								</section>
						<?php endif; ?>

						<main id="main" class="site-main" role="main">
						<?php while (have_posts()) : the_post(); ?>
								<!-- BreadCrumbs -->
								<?php
								if (function_exists('yoast_breadcrumb')) {
										yoast_breadcrumb('<div id="breadcrumbs" class="col-md-12">', '</div>');
								}
								?>

								<?php get_template_part('template-parts/content', 'page'); ?>

								<?php // If comments are open or we have at least one comment, load up the comment template.
								/*if (comments_open() || get_comments_number()) :
										comments_template();
								endif;*/ ?>
						<?php endwhile; // End of the loop. ?>
						</main><!-- #main -->

						<!-- Inner Bottom Widgets -->
						<?php if ( is_active_sidebar( 'inner-bottom' ) ) : ?>
								<section id="inner-bottom" class="widget-area" role="complementary">
										<?php dynamic_sidebar( 'inner-bottom' ); ?>
								</section>
						<?php endif; ?>

				</div><!-- #primary -->

				<?php //get_sidebar(); ?>

		</div><!-- .row -->

</div><!-- .container -->

<!-- Page Bottom Widgets -->
<?php if ( is_active_sidebar( 'page-bottom' ) ) : ?>
		<section id="page-bottom" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'page-bottom' ); ?>
		</section>
<?php endif; ?>

<?php
get_footer();