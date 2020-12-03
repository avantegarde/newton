<?php
/**
 * Template part for the default sliders
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ferus_Core
 */

$name = 'slider-' . $post->post_name;
?>
<div class="slick-slider-wrap slick_default <?php echo $name; ?>">

    <?php if( have_rows('cc_slides') ): ?>
        <?php while( have_rows('cc_slides') ): the_row(); 
            $image = get_sub_field('cc_slide_image');
            $caption_location = get_sub_field('cc_slide_caption_location');
            $title = get_sub_field('cc_slide_title');
            $subline = get_sub_field('cc_slide_copy');
            ?>
            <div class="" style="background-image:url('<?php echo $image; ?>');">
                <div class="slide-caption <?php echo $caption_location; ?> line-box">
                    <h3 class="section-title"><?php echo $title; ?></h3>
                    <p class="subline"><?php echo $subline; ?></p>
                    <?php if( have_rows('cc_slide_button') ): ?>
                        <?php while( have_rows('cc_slide_button') ): the_row(); 
                            $button_text = get_sub_field('cc_slide_button_text');
                            $button_url = get_sub_field('cc_slide_button_url');
                            ?>
                            <?php if ($button_text && $button_url) : ?>
                                <a href="<?php echo $button_url; ?>" data-button="arrow"><?php echo $button_text; ?></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div><!-- .slick-slider-wrap -->
<script>
jQuery(document).ready(function ($) {
    /**
     * Default Slider
     */
    $('.slick_default.<?php echo $name; ?>').slick({
        infinite: true,
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 8000,
    });
});// END document.ready
</script>
