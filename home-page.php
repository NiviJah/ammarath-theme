    <?php /* Template name:Home Page */  

    get_header();
    ?>


    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">

                <div class="fill" style="background-image:url('<?php echo vp_option('ammarath_option.slider_1'); ?>');"></div>
                <div class="carousel-caption">
                    <?php echo vp_option('ammarath_option.slider_1_html'); ?>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php echo vp_option('ammarath_option.slider_2'); ?>');"></div>
                <div class="carousel-caption">
                   <?php echo vp_option('ammarath_option.slider_2_html'); ?>
               </div>
           </div>
           <div class="item">
            <div class="fill" style="background-image:url('<?php echo vp_option('ammarath_option.slider_3'); ?>');"></div>
            <div class="carousel-caption">
             <?php echo vp_option('ammarath_option.slider_3_html'); ?>
         </div>
     </div>
 </div>

 <!-- Controls -->
 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
</a>
</div>


<div class="section">

    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-4">
                <h3><i class="fa <?php echo vp_metabox('homepage_layout.boxes.0.fa_box_1'); ?>">
                </i><?php echo ' ' .vp_metabox('homepage_layout.boxes.0.box_1_title'); ?></h3>
                <p><?php echo vp_metabox('homepage_layout.boxes.0.box_1_content'); ?></p>
            </div>
            <div class="col-lg-4 col-md-4">
                <h3><i class="fa <?php echo vp_metabox('homepage_layout.boxes.0.fa_box_2'); ?>"></i>
                 <?php echo vp_metabox('homepage_layout.boxes.0.box_2_title'); ?></h3>
                 <p><?php echo vp_metabox('homepage_layout.boxes.0.box_2_content'); ?></p>
             </div>
             <div class="col-lg-4 col-md-4">
                <h3><i class="fa <?php echo vp_metabox('homepage_layout.boxes.0.fa_box_3'); ?>"></i> 
                    <?php echo vp_metabox('homepage_layout.boxes.0.box_3_title'); ?></h3>
                    <p><?php echo vp_metabox('homepage_layout.boxes.0.box_3_content'); ?></p>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section-colored text-center">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h2><?php echo vp_metabox('homepage_layout.homepage_quote_section.0.homepage_quote_section_title'); ?></h2>
                    <p><?php echo vp_metabox('homepage_layout.homepage_quote_section.0.homepage_quote_section_content'); ?></p>
                    <hr>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <?php if ( vp_metabox('homepage_layout.portfolio_true') == 1 ): ?>



    <div class="section">

        <div class="container">

            <div class="row">
                <?php query_posts( array( 'post_status' => 'publish' , 'post_type' => 'portfolio', 'posts_per_page' => 6  ) ); ?>
               <?php   $portfolio_layout = vp_option('ammarath_option.portfolio_layout'); ?>
              
                <?php if ($portfolio_layout == 'portfolio_layout_1' ): ?>
                <div class="col-lg-12 text-center">
                    <h2>Display Some Work on the Home Page Portfolio</h2>
                    <hr>
                </div>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php get_template_part('/inc/templates/portfolio-1'); ?>
            <?php endwhile; endif; else: ?>

            <div class="container">
              <div class="page-header">
                <h1 class="text-center">Who am I?</h1>
            </div>
            <p class="lead text-center">I am a creative graphic designer focused on modern eye catching designs. I am not only the graphic designer! I can also do complete websites &amp; computer applications.</p>
            <div class="container">
                <div class="row stylish-panel">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part('/inc/templates/portfolio-2'); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
    <!-- /container -->


<?php endif; ?>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

</div>
<!-- /.section -->

<?php endif; ?>

<div class="section-colored">

    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
             <?php echo vp_metabox('homepage_layout.homepage_featured_right_content'); ?>
                <h2>Modern Business Features Include:</h2>
                <ul>
                    <li>Bootstrap 3 Framework</li>
                    <li>Mobile Responsive Design</li>
                    <li>Predefined File Paths</li>
                    <li>Working PHP Contact Page</li>
                    <li>Minimal Custom CSS Styles</li>
                    <li>Unstyled: Add Your Own Style and Content!</li>
                    <li>Font-Awesome fonts come pre-installed!</li>
                    <li>100% <strong>Free</strong> to Use</li>
                    <li>Open Source: Use for any project, private or commercial!</li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img class="img-responsive" src="http://placehold.it/700x450/ffffff/cccccc">

            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.section-colored -->

<div class="section">

    <div class="container">

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img class="img-responsive" src="http://placehold.it/700x450">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h2>Modern Business Features Include:</h2>
                <ul>
                    <li>Bootstrap 3 Framework</li>
                    <li>Mobile Responsive Design</li>
                    <li>Predefined File Paths</li>
                    <li>Working PHP Contact Page</li>
                    <li>Minimal Custom CSS Styles</li>
                    <li>Unstyled: Add Your Own Style and Content!</li>
                    <li>Font-Awesome fonts come pre-installed!</li>
                    <li>100% <strong>Free</strong> to Use</li>
                    <li>Open Source: Use for any project, private or commercial!</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.section -->

<div class="container">

    <div class="row well">
        <div class="col-lg-8 col-md-8">
            <h4>'Modern Business' is a ready-to-use, Bootstrap 3 updated, multi-purpose HTML theme!</h4>
            <p>For more templates and more page options that you can integrate into this website template, visit Start Bootstrap!</p>
        </div>
        <div class="col-lg-4 col-md-4">
            <a class="btn btn-lg btn-primary pull-right" href="http://startbootstrap.com">See More Templates!</a>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php get_footer(); ?>