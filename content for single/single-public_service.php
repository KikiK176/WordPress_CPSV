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
	       <strong> Περιγραφή: </strong> <?php the_field('description'); ?>
	    </h4>
			
		<h5>
		    
		    <strong> Απαραίτητα δικαιολογητικά: </strong> <?php 

                    $posts = get_field('related_posts');
                    
                    if( $posts ): ?>
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
    
        <p>

       <strong> Αρμόδιος φορέας: </strong> <?php
        $posts = get_field('φορέας');
                    
                    if( $posts ): ?>
                    
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            
                            
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                           
                        <?php endforeach; ?>
                    
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?> 

     </p>
    
    <p>
            
		    <strong> Εμπλεκόμενος Φορέας: </strong> <?php 

                    $posts = get_field('Φορεις');
                    
                    if( $posts ): ?>
                    
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            
                            
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                           
                        <?php endforeach; ?>
                    
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?> 
  
    </p>
            
    <p>

      <strong> Απαιτούμενο κόστος: </strong> <?php
        $posts = get_field('cost1');
                     if( $posts ): ?>
				
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            
                                <?php the_title(); ?>
                            
                        <?php endforeach; ?>
                    
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
    </p>
			<p>
            
				<strong> Νομικό Πλαίσιο: </strong> <?php 

                    $posts = get_field('related_posts5');
                    if( $posts ): ?>
                    <ul>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            <li>
                                
                                <?php the_title(); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
            
        </p>
			
			<p>
            
				<strong> Παραγόμενο Αποτέλεσμα: </strong><?php 

                    $posts = get_field('related_posts6');
                    if( $posts ): ?>
				
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            
                                <?php the_title(); ?>
                            
                        <?php endforeach; ?>
                    
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endif; ?>
            
        </p>
			
    </h5> 
		
	
	</div> 
</div>
    
    
    

		

	</div><!-- #primary -->
	


<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>





<?php get_footer(); ?>
