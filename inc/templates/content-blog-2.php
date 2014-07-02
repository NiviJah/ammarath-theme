
<div class="row">

    <div class="col-md-1">

        <?php if( get_post_format() == 'quote' ) : ?>
        <p><i class="fa fa-quote-left fa-4x"></i>
        <?php elseif (get_post_format() == 'aside'): ?>
        <p><i class="fa fa-th-list fa-4x"></i>
        <?php elseif (get_post_format() == 'image'): ?>
        <p><i class="fa fa-camera fa-4x"></i>
        <?php elseif (get_post_format() == 'video'): ?>
        <p><i class="fa fa-video-camera fa-4x"></i>
        <?php elseif (get_post_format() == 'link'): ?>
        <p><i class="fa fa-link fa-4x"></i>
        <?php elseif (get_post_format() == 'audio'): ?>
        <p><i class="fa fa-music fa-4x"></i>
        <?php else: ?>
        <p><i class="fa fa-file fa-4x"></i>
        <?php endif; ?>

    </p>
    <p><?php the_time('F j, Y'); ?></p>
</div>
<div class="col-md-5">
    <a href="<?php the_permalink(); ?> ">
          <?php the_post_thumbnail(array (600,300), array('class' => 'img-responsive blog_1_img')); ?>
    </a>
</div>
<div class="col-md-6">
    <h3><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
    </h3>
    <p>by <a href="#"><?php the_author(); ?></a>
    </p>
    <p><?php the_excerpt(); ?></p>
    <a class="btn btn-primary" href="<?php the_permalink(); ?> ">Read More <i class="fa fa-angle-right"></i></a>
</div>

</div>

<hr>

