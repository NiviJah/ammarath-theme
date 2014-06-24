<?php /* Template name: Full Width */  

get_header();
?>



    <div class="container">
<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php the_title(); ?>
                    <small>For Deeper Customization</small>
                </h1>
                <?php the_breadcrumb(); ?>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <p><?php the_content(); ?></p>
            </div>

        </div>

  <?php endwhile; endif; ?>
    </div>
    <!-- /.container -->

    <?php get_footer(); ?>

