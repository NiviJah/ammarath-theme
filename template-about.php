<?php /* Template name: About */ 

get_header( );
 ?>

  <div class="container">

        <div class="row">
             <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="col-lg-12">
                <h1 class="page-header"><?php the_title( ); ?>
                    <small>It's Nice to Meet You!</small>
                </h1>
 <?php the_breadcrumb(); ?>
            </div>

        </div>

        <div class="row">

            <div class="col-md-6">
                 <?php the_post_thumbnail(array (750,450), array('class' => 'img-responsive')); ?>
            </div>
            <div class="col-md-6">
                <h2><?php the_title( ); ?></h2>
                <p><?php the_content( ); ?></p>
            </div>

        </div>
        <!-- Our Team -->
        <?php get_template_part( '/inc//templates/our-team'); ?>
        <!-- Our Customers -->
        <?php get_template_part( '/inc/templates/our-customers'); ?>

        

   <?php endwhile; endif; ?>

        

    </div>
    <!-- /.container -->

    <?php get_footer(); ?>