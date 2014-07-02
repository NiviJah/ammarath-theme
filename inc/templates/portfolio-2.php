      <div class="col-md-4">
        <div>
          <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive img-circle img-thumbnail')); ?>
          <h2><?php the_title( ); ?></h2>
          <p><?php the_excerpt(); ?>
          </p>
          <a href="<?php the_permalink(); ?>" class="btn btn-primary" title="See more">See More »</a>
        </div>
      </div>