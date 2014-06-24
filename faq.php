<?php /* Template name: FAQ */  

get_header( );

?>

<div class="container">

    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header"><?php the_title( ); ?>
                <small>Frequently Asked Questions</small>
            </h1>
 <?php the_breadcrumb(); ?>
        </div>

    </div>
    <?php  query_posts( array( 'post_type' => 'questions', order_by => 'meta_value&meta_key=date', order => 'desc') ); ?>

    <div class="row">

        <div class="col-lg-12">

            <div class="panel-group" id="accordion">
                <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $post->ID ?>">
                                <?php the_title(); ?>
                            </a>
                        </h4>
                    </div>
                    <div id="<?php echo $post->ID ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                         <?php the_content(); ?>
                     </div>
                 </div>
             </div>


         </div>

     <?php endwhile; endif; wp_reset_query(); ?>

 </div>

</div>

</div>
<!-- /.container -->

<?php get_footer(); ?>