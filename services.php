<?php /* Template name: Services */ 

get_header( );
?>

<!-- Page Content -->

<div class="container">
 <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="row">

        <div class="col-lg-12">
            <h1 class="page-header"><?php the_title( ); ?>
                <small>What We Do</small>
            </h1>
            <?php the_breadcrumb(); ?>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">

        <div class="col-lg-12">
          <?php the_post_thumbnail('full' , array('class' => 'img-responsive')); ?>
      </div>

  </div>
  <!-- /.row -->

      <div class="row">

<?php if (vp_metabox('services.use_services_layout') == 0): ?> 

     <div class="col-lg-12">
    <?php the_content( ); ?>
    </div>
<?php else: ?>

  </div>
  <!-- /.row -->



  <!-- Service Paragraphs -->
 
  <div class="row">




    <div class="col-md-8">

        <h2 class="page-header"><?php echo vp_metabox('services.service_blocks.0.block_1_title'); ?></h2>
        <p><?php echo vp_metabox('services.service_blocks.0.block_1_content'); ?></p>
    </div>

    <div class="col-md-4">
        <h2 class="page-header"><?php echo vp_metabox('services.service_blocks.0.block_2_title'); ?></h2>
        <p><?php echo vp_metabox('services.service_blocks.0.block_2_content'); ?></p>
        <a class="btn btn-primary" href="#">Click Me!</a>
    </div>

</div>
<!-- /.row -->

<!-- Service Tabs -->

<div class="row">


    <?php 
    $services_tabs = vp_metabox('services.services_tabs');
    ?>

    <div class="col-lg-12">
        <h2 class="page-header">Tabbed Services</h2>
        <ul id="myTab" class="nav nav-tabs">
          <?php foreach ($services_tabs as $tab) : ?>
          <?php $tab_title = $tab['tab_title']; 
          $tab_id = str_replace(' ', '', $tab_title); 
          ?>
          <li><a href="#<?php echo $tab_id; ?>" data-toggle="tab"><?php echo $tab['tab_title']; ?></a>
          </li>
      <?php endforeach; ?>
  </ul>

  <div id="myTabContent" class="tab-content">
   <?php $i=1; ?>
   <?php foreach ($services_tabs as $tab) : ?>
   <?php $tab_title = $tab['tab_title']; 
   $tab_id = str_replace(' ', '', $tab_title); 
   ?>
   <?php if ($i==1): ?>
   <div class="tab-pane fade in active" id="<?php echo $tab_id; ?>">
   <?php else: ?>
   <div class="tab-pane fade in" id="<?php echo $tab_id; ?>">
   <?php endif; ?>
   <i class="<?php echo $tab['fa_tab']; ?> fa pull-left fa-4x"></i>
   <p><?php echo $tab['tab_content'] ?></p>
</div>
<?php $i++ ?>
<?php endforeach; ?>
</div>


</div>


</div>
<!-- /.row -->

<!-- Service Images -->

<div class="row">

    <div class="col-lg-12">
        <h2 class="page-header">Service Images</h2>
    </div>

    <div class="col-sm-4">
        <img class="img-responsive" src="http://placehold.it/750x450">
        <h3>Service One</h3>
        <p>Service one description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst.</p>
        <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a>
    </div>

    <div class="col-sm-4">
        <img class="img-responsive" src="http://placehold.it/750x450">
        <h3>Service Two</h3>
        <p>Service two description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst.</p>
        <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a>
    </div>

    <div class="col-sm-4">
        <img class="img-responsive" src="http://placehold.it/750x450">
        <h3>Service Three</h3>
        <p>Service three description. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst.</p>
        <a class="btn btn-link btn-sm pull-right">More <i class="fa fa-angle-right"></i></a>
    </div>


</div>
<!-- /.row -->
<?php endif; ?>
  <?php endwhile; endif; ?>

</div>
<!-- /.container -->


<?php get_footer( ); ?>