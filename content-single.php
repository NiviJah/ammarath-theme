
<div class="col-lg-8">

    <!-- the actual blog post: title/author/date/content -->
    <hr>
    <p><i class="fa fa-clock-o"></i> Posted on <?php the_time('F j, Y'); ?> by <a href="#"><?php the_author(); ?></a>
    </p>
    <hr>
    <?php //the_post_thumbnail('single-post'); ?>
    <?php the_post_thumbnail('single-post'); ?>
    <hr>
    <p><?php the_content(); ?> </p>
    <hr>
    <?php ammarath_post_nav(); ?>
    <?php
                // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || '0' != get_comments_number() ) :
        comments_template();
    endif;
    ?>
</div>


