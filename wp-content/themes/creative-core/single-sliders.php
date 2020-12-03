<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ferus_Core
 */

get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>

                    <?php
                    $feat_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'original' );
                    $image = $feat_image[0] ? $feat_image[0] : get_template_directory_uri() . '/inc/images/hero.jpg';
                    $contentLocation = 'content-center';
                    ?>

                    <header id="page-header" class="<?php echo $contentLocation; ?>">
                        <div class="header-img parallax v-align" data-plx-img="<?php echo $image; ?>">
                            <div class="header-content v-inner">
                                <h1 class="page-title"><?php the_title(); ?></h1>
                                <div class="header-subline entry-meta">
                                    <p class="date-author">
                                        <span class="date"><?php echo the_date('d-m-Y'); ?></span> |
                                        <span class="author">Author: <?php the_author(); ?></span>
                                    </p>
                                    <?php // ferus_core_posted_on(); ?>
                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="container">
                        <div class="entry-wrap">
                            <?php
                            $slider_type = get_field('cc_slider_type');
                            if ($slider_type === 'slideset') {
                                get_template_part('template-parts/slider', 'slideset');
                            } else {
                                get_template_part('template-parts/slider', 'default');
                            }
                            ?>
                        </div><!-- .entry-wrap -->
                    </div><!-- .container -->

                </article><!-- #post-## -->
            <?php endwhile; // End of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
