<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Events2 Page Template
 *
   Template Name:  Events2
 *
 * @file           events2-page.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2011 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-content-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
?>
<?php get_header(); ?>

        <div id="content" class="grid-right col-700 fit">
        
<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>       
				<?php responsive_entry_top(); ?>
 
                <div class="post-entry news-page">
                	<?php menuDirect(); ?>
                    <p style="margin:0;">Events</p>
                    <h1>Upcoming Events</h1>
                    <?php
					
					$date = DateTime::createFromFormat('Ymd', get_field('date_picker'));
					echo $date->format('d-m-Y');
					 
					/*
					*  Order Posts based on Date Picker value
					*  this example expects the value to be saved in the format: yymmdd (JS) = Ymd (PHP)
					*/
					 
					$posts = get_posts(array(
						'meta_key' => 'date', // name of custom field
						'orderby' => 'meta_value_num',
						'order' => 'ASC'
					));
					 
					if( $posts )
					{
						foreach( $posts as $post )
						{
							setup_postdata( $post );
							
								$title = get_the_title();
								echo '<a class="event-name" href="'.$link,'">'.$title.'</a>';
						}
					 
						wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
					}
					
					?>
                </div><!-- end of .post-entry -->
				               
				<?php responsive_entry_bottom(); ?>      
			</div><!-- end of #post-<?php the_ID(); ?> -->       
			<?php responsive_entry_after(); ?>

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
