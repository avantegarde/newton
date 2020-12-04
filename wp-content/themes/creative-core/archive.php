<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ferus_Core
 */

get_header();
// Infinite Scroll Vars
$archive_scroll = $wp_query->get_queried_object();
if (isset($archive_scroll->taxonomy) && $archive_scroll->taxonomy === 'category') {
    $cat_id = $archive_scroll->term_id;
    $tag_id = '';
} elseif (isset($archive_scroll->taxonomy) && $archive_scroll->taxonomy === 'post_tag') {
    $tag_id = $archive_scroll->term_id;
    $cat_id = '';
} else {
    $cat_id = '';
    $tag_id = '';
}
$blog_url = get_permalink( get_option( 'page_for_posts' ) );
?>

<?php
    $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
    $pageImage = $img[0];
    $image = $pageImage ? $pageImage : get_template_directory_uri() . '/inc/images/hero.jpg';
?>
<div id="page-header" class="">
    <div class="header-img parallax v-align" data-plx-img="<?php echo $image; ?>">
        <div class="header-content v-inner">
            <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
        </div>
    </div>
</div>

<div id="page-wrap" class="clearfix">

  <div id="primary" class="content-area clearfix">

    <?php if ( is_active_sidebar( 'page-header' ) ) : ?>
      <div id="page-header" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'page-header' ); ?>
      </div><!-- #page-header -->
    <?php endif; ?>

    <div class="blog-filter container">

      <form role="search" method="get" class="search" action="<?php echo $blog_url; ?>">
        <input type="hidden" name="search-type" value="blog-search"/>
        <input type="blog-search" class="form-control search_text" name="s" action="" aria-label="..." placeholder="Search...">
        <?php $catArgs = array(
          'show_option_all'    => 'All Categories',
          'class'              => 'cat-drop',
          'exclude'            => '1',
          'selected'           => $cat_id,
        ); ?>
        <?php wp_dropdown_categories($catArgs); ?>
        <?php $authorArgs = array(
          'show_option_all'         => 'All Authors', // string
          'show_option_none'        => null, // string
          'hide_if_only_one_author' => null, // string
          'orderby'                 => 'display_name',
          'order'                   => 'ASC',
          'include'                 => null, // string
          'exclude'                 => '1', // string
          'multi'                   => false,
          'show'                    => 'display_name',
          'echo'                    => true,
          'selected'                => false,
          'include_selected'        => false,
          'name'                    => 'author', // string
          'id'                      => null, // integer
          'class'                   => 'author-drop', // string
          'blog_id'                 => $GLOBALS['blog_id'],
          'who'                     => null // string
        ); ?>
        <?php //wp_dropdown_users($authorArgs); ?>
        <button class="button do_search">Go</button>
      </form>

    </div>

    <main id="main" class="site-main container" role="main">
        <div class="row posts-grid-wrapper">

            <?php
            if (have_posts()) :
                /* Start the Loop */
                while (have_posts()) : the_post(); ?>

                    <?php
                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post-med');
                    $excerpt_length = 250;
                    $content = apply_filters('the_content', get_the_content());
                    $excerpt = truncate( $content, $excerpt_length, '...', false, true );
                    ?>
                    <div class="post-item col-md-4">

                        <article id="post-<?php echo $post->ID; ?>" class="post-<?php echo $post->ID; ?> post-inner">

                            <?php if ($image): ?>
                                <a class="post-thumb" href="<?php echo get_permalink($post->ID); ?>" style="background-image: url(<?php echo $image[0] ?>);"></a>
                            <?php else: ?>
                                <a class="post-thumb" href="<?php echo get_permalink($post->ID); ?>" style="background-image: url(/wp-content/themes/creative-core/inc/images/hero.jpg);"></a>
                            <?php endif; ?>

                            <div class="post-content">
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="category">
                                    <?php
                                        $categories = wp_get_post_categories($post->ID);
                                        $cat_length = count($categories);
                                        $cat_ctr = 1;
                                        foreach($categories as $category){
                                            $cat_name = get_cat_name($category);
                                            if ($cat_ctr === $cat_length) {
                                                echo '<a href="'.$blog_url.'?search-type=blog-search&cat='.$category.'">'.$cat_name.'</a>';
                                            } else {
                                                echo '<a href="'.$blog_url.'?search-type=blog-search&cat='.$category.'">'.$cat_name.'</a> | ';
                                            }
                                            $cat_ctr++;
                                        }
                                    ?>
                                    <?php // the_category( ' | ', '', $post->ID ); ?>
                                </div>
                                <!-- <p class="author-date"><?php // the_time('m-d-Y'); ?> | Author: <?php // the_author(); ?></p> -->

                                <div class="content-blurb">
                                    <?php the_excerpt(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" data-button="arrow">Learn More</a>
                            </div>
                        </article>
                    </div>

                <?php endwhile;

            else :
                get_template_part('template-parts/content', 'none');
            endif; ?>
        </div><!-- .row -->
    </main><!-- #main -->

    <div class="pagination">
      <?php 
      global $wp_query;
      $big = 999999999; // need an unlikely integer
      $translated = __( 'Page', 'mytextdomain' ); // Supply translatable string
      echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>',
        'prev_text' => '<',
        'next_text' => '>'
      ) );
    ?>
    </div>

  </div><!-- #primary -->

  <?php // get_sidebar(); ?>
</div><!-- #page-wrap -->


<?php get_footer(); ?>

<script>
    jQuery( document ).ready(function() {
        // Apply search text to correct field
        var searchInput = jQuery('.blog-filter input[type="blog-search"]');
        var catSelect = jQuery('.blog-filter select#cat');
        var authorSelect = jQuery('.blog-filter select#author');
        if (searchInput) {
            searchInput.val("<?php echo $search_text; ?>");
        }
        if (catSelect) {
            catSelect.val(<?php echo $cat_id; ?>);
        }
        if (authorSelect) {
            authorSelect.val(<?php echo $search_author; ?>);
        }
    });
</script>

<!-- <span id="inifiniteLoader"><i class="fas fa-circle-notch"></i> Loading...</span>
<script type="text/javascript">
  jQuery(document).ready(function($) {
      var count = 2;
      var total = <?php echo $wp_query->max_num_pages; ?>;
      $(window).scroll(function(){
          if  ($(window).scrollTop() == $(document).height() - $(window).height()){
              if (count > total){
                  return false;
              }else{
                  loadArticle(count);
              }
              count++;
          }
      });

      function loadArticle(pageNumber){
          $('span#inifiniteLoader').addClass('active').show('fast');
          $.ajax({
              url: "<?php bloginfo('wpurl') ?>/wp-admin/admin-ajax.php",
              type:'POST',
              data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=loop',
              success: function(html) {
                  $('span#inifiniteLoader').removeClass('active').fadeOut('1000');
                  var $newItems = $(html);
                  var $grid = $('.posts-grid-wrapper');
                  $grid.append($newItems);
                  colMatchHeight();
                  //Use the line below if you have masonry blogroll
                  //$grid.append( $newItems ).masonry( 'appended', $newItems );
              }
          });
          return false;
      }

  });// END document.ready
</script> -->
