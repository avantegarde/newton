<?php
/**
 * The Homepage of the site
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ferus_core
 */



get_header(); ?>

<div id="primary" class="content-area page-body">
    <main id="main" class="site-main" role="main">

        <section id="home-slider" class="blank">
            <?php echo do_shortcode('[slick-slider id="119"]'); ?>
        </section>

        <?php while (have_posts()) : the_post(); ?>
            <?php echo the_content(); ?>
        <?php endwhile; ?>

        <section id="home-services" class="green services">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel center" data-col="homeService">
                            <span class="icon">
                                <i class="fas fa-flag-checkered"></i>
                            </span>
                            <h3 class="title">Unique & Modern</h3>
                            <p>Stitch by Stitch is one of the largest quilting and sewing stores in the Kingston area, offering a truly unique shopping destination. We are your go-to resource for all your sewing and quilting needs, carrying the most current fabric designs.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel center" data-col="homeService">
                            <span class="icon">
                                <i class="fas fa-user"></i>
                            </span>
                            <h3 class="title">Superb Service</h3>
                            <p>Our staff always looks forward to sharing their knowledge and skills with anyone who walks through our doors, phones or emails us. We take the time to help support, encourage and inspire you with any challenge you come across.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel center" data-col="homeService">
                            <span class="icon">
                                <i class="fas fa-dollar-sign"></i>
                            </span>
                            <h3 class="title">Competitive Pricing</h3>
                            <p>Our fabric is sold using metric measurements not Imperial however, we are able to converse in and convert both. We are careful to make sure that our prices are fair and competitive.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="sale-section" class="home-sales">
            <div class="container">
                <h3 class="section-title center">Shop Online</h3>

                <div class="tabs-wrap">
                    <ul class="tabs-menu">
                        <li class="active current"><a data-toggle="tab" href="#tab-1">Tab #1</a></li>
                        <li><a data-toggle="tab" href="#tab-2">Tab #2</a></li>
                        <li><a data-toggle="tab" href="#tab-3">Tab #3</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1">
                            <h3>Tab Content #1</h3>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.</p>
                            <ul>
                                <li>Non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</li>
                                <li>Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia.</li>
                                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</li>
                            </ul>
                            <p>Qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit. Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                            <p>Nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam. Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                        </div>
                        <div id="tab-2">
                            <h3>Tab Content #2</h3>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.</p>
                            <ul>
                                <li>Non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</li>
                                <li>Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia.</li>
                                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</li>
                            </ul>
                            <p>Qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit. Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                            <p>Nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam. Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                        </div>
                        <div id="tab-3">
                            <h3>Tab Content #3</h3>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam.</p>
                            <ul>
                                <li>Non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</li>
                                <li>Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia.</li>
                                <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</li>
                            </ul>
                            <p>Qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit. Cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.</p>
                            <p>Nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam. Ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                        </div>
                    </div>
                </div>





               <p>Our website will offer online sales in the future. Keep checking back for updates as we continue to grow.</p>
              <!---<?php echo do_shortcode('[products limit="4" columns="4" category="" order="rand" on_sale=”true”]'); ?>--->
            </div>
        </section>

   <section id="shop-categories" class="shop-cat-grid">
            <div class="container">
                <h3 class="section-title block-title center">Shop By Category</h3>
                <div class="row">
                	
                    <?php echo do_shortcode('[product-cats include="20,18,17,19,21]'); ?>
                </div>
            </div>
        </section>

        <section id="home-services" class="blank">
            <div class="parallax auto-height" data-plx-img="/wp-content/themes/creative-core/inc/images/home-slide-01.jpg">
                 <div class="container">
                    <div class="col-md-7 line-box float-right" data-col="hp-bottom-cta">
                       
                            <h2 class="section-title" data-color="white">Family Owned <br>and Operated</h2>
                            <p>Margaret inherited her sewing skills from her maternal grandmother who taught her to sew when she was just 6 years old.  Margaret has sewn off and on her entire life while she worked for a Canadian Bank for over twenty years.  After moving to the Kingston area with her three children in 1986 she decided a career change was in order.  She began working for a specialty fabric store in the late 80’s and branched out on her own in the mid 90’s.  Her first shop was called The Perfect Stitch. </p>
                            <p class="txt-right"><a href="/about/" data-button>Learn More</a></p>
                    
                    </div>
                </div>
            </div>
        </section>

         <section id="home-services" class="blank">
            <div class="parallax auto-height" data-plx-img="/wp-content/themes/creative-core/inc/images/home-slide-01.jpg">
                <div class="container">
                    <div class="col-md-7 line-box" data-col="hp-bottom-cta">
                       
                             <h3 class="machine-title" data-color="white">Does your <span>machine</span> need <strong>servicing?</strong></h3>
                        <p>The investment that you make in a sewing machine is as important to you as it is us at Stitch by Stitch.</p>  
						<p>We want you to always get the best performance you can from your machine.  To ensure that it continually works to your satisfaction, you will find that cleaning it on a regular basis will help to keep your machine running smoothly!
						</p>
                        <p class="txt-right"><a href="/services/" data-button>Let Us Help</a></p>
                    
                    </div>
                </div>
            </div>
        </section>

       

          
                       
         <section id="home-services" class="blank">
            <div class="parallax auto-height" data-plx-img="/wp-content/themes/creative-core/inc/images/home-slide-01.jpg">
                <div class="container">
                    <div class="col-md-7 line-box float-right" data-col="hp-bottom-cta">

                        <h2 class="section-title" data-color="white">Wanting to learn?</h2>
                        <p>We are committed to helping our clients create beautiful pieces of work and this in turn helped us grow our store and reputation in Kingston. Our staff has experience in quilting, sewing and machine embroidery and a few of our staff members are class teachers.</p>
						<p>Our goal is to provide you with the inspiration, encouragement and assistance you may need to get your project started. If you are interested in a class we are happy to describe our courses and assist you in choosing a class that you would enjoy and meets your goals.
						</p>
                        <a href="/category/classes/" data-button>Get Started!</a>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<!-- Start Modal -->
<div id="news-modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h3 class="section-title">Join Our Mailing List</h3>
                <p>Sign up for our SPECIALS, PROMOTIONS and UPDATES.</p>
                <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true" tabindex="9999"]'); ?>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>
<!-- END Modal -->

<?php get_footer(); ?>
