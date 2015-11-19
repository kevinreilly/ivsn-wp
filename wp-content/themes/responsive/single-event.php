<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Single Posts Template
 *
 *
 * @file           single.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/single.php
 * @link           http://codex.wordpress.org/Theme_Development#Single_Post_.28single.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content" class="grid-right col-700 fit">
        
	<?php // get_template_part( 'loop-header' ); ?>
        
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>       
				<?php responsive_entry_top(); ?>

                <?php // get_template_part( 'post-meta' ); ?>

                <div class="post-entry">
                	<?php menuDirect(); ?>
                    <p style="margin:0;">Events</p>
                	<?php
                    $title = get_the_title();
					$link = get_permalink();
					$date = get_field('date');
					$location = get_field('location');
					$m = substr($date, 0, 3);
					$d = substr($date, 3, 2);
					$y = substr($date, 5, 4);
					if( get_field('image') ):
						?><img class="alignright" src="<?php the_field('image'); ?>" /><?php
					endif;
					?>
                    <h1><?php echo $title; ?></h1>
					<span class="event-date">
					<?php
					echo $m.' ';
					echo $d .', ';
					echo $y;
					?>
					</span>
					<span class="event-location">
					<?php
					echo $location;
					?>
					</span>
					<br />
					<?php
					echo the_content();
					?>
                </div><!-- end of .post-entry -->
                
                <?php // get_template_part( 'post-data' ); ?>
				               
				<?php responsive_entry_bottom(); ?>      
			</div><!-- end of #post-<?php the_ID(); ?> -->       
			<?php responsive_entry_after(); ?>            
            
			<?php responsive_comments_before(); ?>
			<?php comments_template( '', true ); ?>
			<?php responsive_comments_after(); ?>
            
        <?php 
		endwhile; 

		get_template_part( 'loop-nav' ); 

	else : 

		get_template_part( 'loop-no-posts' ); 

	endif; 
	?>  
      
</div><!-- end of #content -->

<?php get_sidebar('leftnews'); ?>
<?php get_footer(); ?>
