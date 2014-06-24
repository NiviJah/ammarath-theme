<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Ammarath
 */

get_header(); ?>

<div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php the_title(); ?>
                    <small>A Sample Blog Post</small>
                </h1>
 				<?php the_breadcrumb(); ?>
            </div>


		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>



		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>