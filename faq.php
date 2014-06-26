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


    <div class="row">

        <div class="col-lg-12">

            <div class="panel-group" id="accordion">
                <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php  $faq_values = vp_metabox('faq.faq'); 
                    $faq_id=1;
                ?>

                <?php foreach ($faq_values as $faq) :  ?>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $faq_id; ?>">
                                <?php echo $faq['faq_title']; ?>
                            </a>
                        </h4>
                    </div>
                    <div id="<?php echo $faq_id; ?>" class="panel-collapse collapse">
                        <div class="panel-body">
                           <?php echo $faq['faq_content']; ?>
                       </div>
                   </div>
               </div>

               <?php $faq_id+=1; ?>
           <?php endforeach; ?>
       <?php endwhile; endif; ?>
   </div>



</div>

</div>

</div>
<!-- /.container -->

<?php get_footer(); ?>