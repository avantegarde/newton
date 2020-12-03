<?php
/**
 * Template part for the slideset sliders
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ferus_Core
 */

$name = 'slider-' . $post->post_name;
$columns = get_field('cc_slideset_columns');
?>
<style>
.slick-slider-wrap {
    display: none;
}
.slick-slider-wrap.slick-initialized {
    display: block;
}
</style>
<div class="slick-slider-wrap gallery-slideset <?php echo $columns .' '. $name; ?>">

    <?php if( have_rows('cc_slideset_slides') ): ?>
        <?php while( have_rows('cc_slideset_slides') ): the_row(); 
            $image = get_sub_field('cc_slideset_image');
            $url = get_sub_field('cc_slideset_image_url');
            ?>
            <div>
                <?php if ($url) {
                    echo '<a href="'.$url.'" target="_blank"><img src="'.$image.'"></a>';
                } else {
                    echo '<img src="'.$image.'">';
                } ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div><!-- .slick-slider-wrap -->
<script>
jQuery(document).ready(function ($) {
    /**
     * Gallery Slideset
     */
    var columns = <?php echo '"'.$columns.'"'; ?>;
    var col_number = 3;
    var breakpoint_600 = 2;
    var breakpoint_480 = 1;
    if (columns === 'col4') {
        var col_number = 4;
        var breakpoint_600 = 3;
        var breakpoint_480 = 2;
    } else if (columns === 'col5') {
        var col_number = 5;
        var breakpoint_600 = 3;
        var breakpoint_480 = 2;
    }
    $('.gallery-slideset.<?php echo $name; ?>').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 6000,
        slidesToShow: col_number,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: breakpoint_600,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: breakpoint_480,
                    slidesToScroll: 1
                }
            }
        ]
    });
});// END document.ready
</script>