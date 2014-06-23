<?php get_header( ); ?>

  <div class="container">

    <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php the_title( ); ?>
                    <small>Blog Homepage</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Blog Home 1</li>
                </ol>
            </div>

        </div> 

        <div class="row">

            <div class="col-lg-8">

                <h1><a href="<?php the_permalink(); ?>"><?php the_title( ); ?></a>
                </h1>
                <p class="lead">by <a href="#"><?php the_author(); ?></a>
                </p>
                <hr>
                <p><i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
                <hr>
                <a href="<?php the_permalink(); ?>">

                    <?php the_post_thumbnail(array (900,300), array('class' => 'img-responsive blog_1_img')); ?>
                </a>
                <hr>
                <p><?php the_content(); ?></p>
                <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>

                <hr>

                

                <ul class="pager">
                    <li class="previous"><a href="#">&larr; Older</a>
                    </li>
                    <li class="next"><a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <div class="col-lg-4">
<?php get_sidebar(); ?>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php get_footer( ); ?>

