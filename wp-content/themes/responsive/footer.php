<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/* 
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
		<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
    </div><!-- end of #wrapper -->
    <?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

    <div id="footer-wrapper">
    
        <div class="grid col-940">
        	<div class="grid col-140 social">
            	<a href="https://www.facebook.com/InnVisionShelterNetwork" target="_blank"><img src="http://ivsn.wpengine.com/wp-content/uploads/2013/09/facebook.png" /></a>
                <a href="https://twitter.com/InnVisShelter" target="_blank"><img src="http://ivsn.wpengine.com/wp-content/uploads/2013/09/twitter.png" /></a>
                <a href="http://www.linkedin.com/company/innvision-shelter-network" target="_blank"><img src="http://ivsn.wpengine.com/wp-content/uploads/2013/09/linkedin.png" /></a>
                <a href="http://www.youtube.com/user/shelternetwork/featured" target="_blank"><img src="http://ivsn.wpengine.com/wp-content/uploads/2013/09/youtube.png" /></a>
            </div>
            <div class="grid col-540">
            	<span>InnVision Shelter Network – 181 Constitution Drive, Menlo Park, CA 94025, (650) 685-5880
                <br />
				© 2015 InnVision Shelter Network. All rights reserved.</span>
            </div>
            <div class="grid col-220">
            	<a href="http://www.charitynavigator.org/index.cfm?bay=search.summary&orgid=8790#.UlSycVA3tSs" target="_blank"><img src="http://ivsn.wpengine.com/wp-content/uploads/2013/09/charity.png" /></a>
            </div>
        </div><!-- end .powered -->
        
    </div><!-- end #footer-wrapper -->
    
	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>