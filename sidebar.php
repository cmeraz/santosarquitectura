		<!--BEGIN #sidebar .aside-->
		<div id="sidebar" class="aside">

          <div id="social-icons" style="margin-top:35px">
            <a href="http://www.facebook.com/santosarquitectura" "Facebook" style="margin-left:35px">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Facebook.png" alt="Facebook">
            </a>
            <a href="http://www.twitter.com/luissantos77" "Twitter" style="margin-left:35px">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Twitter.png" alt="Twitter">
            </a>
            <a href="http://www.instagram.com/santosarquitectura" "Instagram" style="margin-left:35px">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Instagram.png" alt="Instagram">
            </a>
          </div>
                              
        	<!-- BEGIN Facebook Like Button 
        	<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="http://www.facebook.com/pages/SantosArquitectura/118053698294371" send="true" layout="button_count" width="220" show_faces="true" font=""></fb:like> -->
        	
        	<!-- BEGIN Twitter Follow Button
        	<a href="http://twitter.com/{screen_name}" class="twitter-follow-button" data-lang="es">Segui @luissantos77</a> -->

      	
        	<!-- BEGIN #logo -->
			<div id="logo">
				<?php /*
				If "plain text logo" is set in theme options then use text
				if a logo url has been set in theme options then use that
				if none of the above then use the default logo.png */
				if (get_option('tz_plain_logo') == 'true') { ?>
				<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
				<?php } elseif (get_option('tz_logo')) { ?>
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_option('tz_logo'); ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
				<?php } else { ?>
				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" /></a>
				<?php } ?>
                
                <?php $tagline = get_option('tz_tagline'); ?>
                <?php if($tagline != '') : ?>
                
                <p id="tagline"><?php echo stripslashes($tagline); ?></p>
                
                <?php endif; ?>
                
			<!-- END #logo -->
			</div>
            
            <div class="seperator clearfix">
            	<div class="line"></div>
            </div>
			
            <?php if(!is_page() && !is_page_template('template-portfolio.php') && !is_tax('skill-type') && get_post_type() != 'portfolio') : ?>
            
			<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar() ) ?>
            
            
            <?php elseif(is_page() && !is_page_template('template-portfolio.php')) : ?>
            
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Page Sidebar') ) ?>
            
            
            <?php elseif(is_page_template('template-portfolio.php') || is_tax('skill-type') || get_post_type() == 'portfolio') :?>
            
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Portfolio Sidebar') ) ?> 
            
            
            <?php endif; ?>
            
            <?php if(is_page_template('template-portfolio.php') || is_tax('skill-type') || get_post_type() == 'portfolio') :?>
            <div class="widget">
                <h3 class="widget-title"><?php _e('Tipologías', 'framework'); ?></h3>
                <ul id="filter">
                	<?php if(is_page_template('template-portfolio.php')) : ?>
                	<li class="current-menu-item"><a href="<?php echo get_permalink( get_option('tz_portfolio_page') ); ?>"><?php _e('Todas', 'framework'); ?></a></li>
                    <?php else: ?>
                    <li><a href="<?php echo get_permalink( get_option('tz_portfolio_page') ); ?>"><?php _e('Todas', 'framework'); ?></a></li>
                    <?php endif; ?>
                  <?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'skill-type')); ?>
                </ul>
            </div>
            <?php endif; ?>
            
            <!-- BEGIN #back-to-top -->
            <div id="back-to-top">
            	<a href="#">
                	<span class="icon"><span class="arrow"></span></span>
                    <span class="text"><?php _e('Regresar al inicio', 'framework'); ?></span>
                </a>
            <!-- END #back-to-top -->
            </div>
		
		<!--END #sidebar .aside-->
		</div>