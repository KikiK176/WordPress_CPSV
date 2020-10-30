<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

		<?php astra_content_loop(); ?>
		
		<?php astra_primary_content_bottom(); ?>

		<div class="wrap">
	
	<div id="public_service">
	
			
		<h4>
		      <?php $posts = get_field('related_posts3');
                    
                    if( $posts ): ?>
                    Σχετιζόμενες Δημόσιες Υπηρεσίες:
                    <ul>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <li>
                            
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
            
            <?php $posts = get_field('δυ');
                    
                    if( $posts ): ?>
                    Δημόσιες Υπηρεσίες στις οποίες εμπλέκεται:
                    <ul>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <li>
                            
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
		
		     
		      
		
		</h4> 
		
	
	</div> 
</div>
    
    
    

		

	</div><!-- #primary -->
	


<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>





<?php get_footer(); ?>
