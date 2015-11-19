<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Bottom Template
 *
 *
 * @file           sidebar-bottom.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/sidebar-bottom.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>  
	<div style="clear:both;"></div>
    <div id="home-bottom" class="grid col-940">
        <div class="grid col-300">
        	<div class="container">
	        	<h3>Latest News & Events</h3>
				<?php
					$args = array( 'post_type' => 'post', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						if( get_field('image') ):
							?><img width="65" src="<?php the_field('image'); ?>" /><?php
						endif;
						$title = get_the_title();
						$link = get_permalink();
						echo '<a href="'.$link.'">'.$title.'</a>';
					endwhile;
				?>
                <div style="clear:both;"></div>
                <a style="position:absolute;bottom:-20px;" href="http://ivsn.wpengine.com/news-events/" style="float:left;">More news & events &raquo;</a>
                <div style="clear:both;"></div>
            </div>
        </div><!-- end of .col-300 -->
        <div class="grid col-300">
        	<div class="container event">
	        	<?php
					$args = array( 'post_type' => 'event', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						$title = get_the_title();
						$link = get_permalink();
						$date = get_field('date');
						$m = substr($date, 0, 3);
						$d = substr($date, 3, 2);
						?>
                        <div class="date-box">
                        	<center>
		                        <?php
								echo '<span class="month">'.$m.'</span><br />';
								echo '<span class="day">'.$d.'</span>';
								?>
                        	</center>
                        </div>
                        <?php
                        echo '<a href="'.$link,'">'.$title.'</a>';
					endwhile;
				?>
                <div style="clear:both;"></div>
            </div>
        </div><!-- end of .col-300 -->
        <div class="grid col-300 fit">
        	<div class="container signup">
        		<h3>eNews Signup</h3>
                <?php get_sidebar('enews'); ?>
                <!--<script type="text/javascript" src="http://www.formstack.com/forms/js.php?1590443-LMqO8ZtSCR-v3&jsonp <http://www.formstack.com/forms/js.php?1590443-LMqO8ZtSCR-v3&jsonp> "></script><noscript><a href="http://www.formstack.com/forms/?1590443-LMqO8ZtSCR <http://www.formstack.com/forms/?1590443-LMqO8ZtSCR> " title="Online Form">Online Form - Constant Contact Signup Form</a></noscript><div style="text-align:right; font-size:x-small;"><a href="http://www.formstack.com?utm_source=h&utm_medium=jsembed&utm_campaign=fa&fa=h,1590443 <http://www.formstack.com?utm_source=h&utm_medium=jsembed&utm_campaign=fa&fa=h,1590443> " title="HTML Form Generator">HTML Form Generator</a></div>-->
            </div>
            <br /><br />
        </div><!-- end of .col-300 fit -->
    </div>