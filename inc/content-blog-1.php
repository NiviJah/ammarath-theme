
<h1><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a>
</h1>
<p class="lead">by <a href="#"><?php the_author(); ?></a>
</p>
<hr>
<p><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>

<a href="<?php the_permalink(); ?>">

    <?php the_post_thumbnail(array (900,300), array('class' => 'img-responsive blog_1_img')); ?>
</a>
<hr>
<p><?php the_excerpt(); ?></p>
<a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>

<hr>









