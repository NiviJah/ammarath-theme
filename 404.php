<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Ammarath
 */

get_header(); ?>


 <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header"><?php the_title(); ?>
                    <small>Page Not Found</small>
                </h1>
 <?php the_breadcrumb(); ?>
            </div>

        </div>

        <div class="row">

            <div class="col-lg-12">
                <p class="error-404">404</p>
                <p class="lead">The page you're looking for could not be found.</p>
                <p>Here are some helpful links to help you find what you're looking for:</p>
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">About</a>
                    </li>
                    <li><a href="#">Services</a>
                    </li>
                    <li><a href="#">Contact</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Other</a>
                    </li>
                </ul>
            </div>

        </div>

    </div>
    <!-- /.container -->

<?php get_footer(); ?>
