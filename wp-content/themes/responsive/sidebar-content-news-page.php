<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Sidebar/Content Template
 *
   Template Name:  Sidebar/Content News
 *
 * @file           sidebar-content-news-page.php
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
                    <!--<p style="margin:0;">News &amp; Events</p>-->
                    <h1>Upcoming Events</h1>
                    <?php
					$args = array( 'post_type' => 'event', 'posts_per_page' => 2 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
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
                        echo '<a class="event-name" href="'.$link,'">'.$title.'</a>';
						echo the_excerpt();
						echo '<a class="event-link" href="'.$link,'">Read more about '.$title.' &raquo;</a>';
						echo '<hr>';
						
					endwhile;
					?>
					<a class="more-events" href="events">More Events &raquo;</a><br /><hr />
                	<h1>News</h1>
                    <?php
					$args = array( 'post_type' => 'post', 'posts_per_page' => 2 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						$title = get_the_title();
						$link = get_permalink();
						if( get_field('image') ):
							?><img class="alignright" src="<?php the_field('image'); ?>" /><?php
						endif;
						?>
                        <span class="news-date">
                        <?php
						the_date('M j, Y');
						?>
                        </span>
                        <br />
                        <?php
                        echo '<a class="news-name" href="'.$link,'">'.$title.'</a>';
						echo the_excerpt();
						echo '<a class="event-link" href="'.$link,'">Read more about '.$title.' &raquo;</a>';
						echo '<hr>';
						
					endwhile;
					?>
                    <a class="more-events" href="news">More News &raquo;</a><br /><hr />
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
