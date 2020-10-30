<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_content_page_loop(); ?>

		<?php astra_primary_content_bottom(); ?>
		
	
		<?php 
   
 
           //Define your custom post type name in the arguments
             
           $args = array('post_type' => 'public_service', 
                         'posts_per_page' => -1,
                         'orderby' => 'title', 
                         'order' => 'ASC');
             
           //Define the loop based on arguments
             
           $loop = new WP_Query( $args );
             
           //Display the contents
             
           while ( $loop->have_posts() ) : $loop->the_post(); ?>
           <ul>
           <li>
               <h3 style="font-size: 20px;">
                   <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
           </li>
            </ul>
           <div class="entry-content">
           <?php the_content(); ?>
           </div>
           <?php endwhile;?>
           
		
		

	</div><!-- #primary -->

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php get_footer(); ?>
