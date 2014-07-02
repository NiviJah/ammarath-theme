<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ammarath
 */

get_header(); ?>

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

		<?php if ( have_posts() ) : ?>
		
		<?php /* Start the Loop */ ?>
		
		<?php if (vp_option('ammarath_option.blog_layout') == "one"): ?>
		<div class="col-lg-8">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'inc//templates/content', 'blog-1' ); ?>
		<?php endwhile; ?>

		<?php ammarath_paging_nav(); ?>
	</div> <!-- COL8 -->
	
	<div class="col-lg-3 col-lg-offset-1">
		<?php get_sidebar(); ?>
	</div>
	
	
<?php else: ?>
	<div class="col-lg-12">
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'inc/templates/content', 'blog-2' ); ?>
	<?php endwhile; ?>

	<?php ammarath_paging_nav(); ?>
</div> <!-- COL12 -->

<?php endif; ?>




<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>




</div> <!-- ROW -->


</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
