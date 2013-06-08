<?php get_header(); ?>

			<!--BEGIN #primary .hfeed-->
			<div id="primary" class="hfeed">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            	<?php 
					$image1 = get_post_meta(get_the_ID(), 'tz_portfolio_image', TRUE); 
					$image2 = get_post_meta(get_the_ID(), 'tz_portfolio_image2', TRUE); 
					$image3 = get_post_meta(get_the_ID(), 'tz_portfolio_image3', TRUE); 
					$image4 = get_post_meta(get_the_ID(), 'tz_portfolio_image4', TRUE); 
					$image5 = get_post_meta(get_the_ID(), 'tz_portfolio_image5', TRUE);
					$image6 = get_post_meta(get_the_ID(), 'tz_portfolio_image6', TRUE);
					$image7 = get_post_meta(get_the_ID(), 'tz_portfolio_image7', TRUE);
					$image8 = get_post_meta(get_the_ID(), 'tz_portfolio_image8', TRUE);
					$image9 = get_post_meta(get_the_ID(), 'tz_portfolio_image9', TRUE);
					$image10 = get_post_meta(get_the_ID(), 'tz_portfolio_image10', TRUE);
					$image11 = get_post_meta(get_the_ID(), 'tz_portfolio_image11', TRUE);
					$image12 = get_post_meta(get_the_ID(), 'tz_portfolio_image12', TRUE);
					$height = get_post_meta(get_the_ID(), 'tz_portfolio_image_height', TRUE);
					
					//echo $height;
				?>
            
				<!--BEGIN .hentry -->
				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                	
                    <?php if($image1 != '') : ?>
                    
                    <?php tz_gallery(get_the_ID()); ?>
                    
                	<!--BEGIN .slider -->
					<div id="slider-<?php the_ID(); ?>" class="slider" data-loader="<?php echo  get_template_directory_uri(); ?>/images/<?php if(get_option('tz_alt_stylesheet') == 'dark.css'):?>dark<?php else: ?>light<?php endif; ?>/ajax-loader.gif">

                        <div class="slides_container clearfix">
                        	
                            <?php if($image1 != '') : ?>
                        	<div><img height="<?php echo $height; ?>" width="550" src="<?php echo $image1; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image2 != '') : ?>
                        	<div><img width="550" src="<?php echo $image2; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image3 != '') : ?>
                        	<div><img width="550" src="<?php echo $image3; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image4 != '') : ?>
                        	<div><img width="550" src="<?php echo $image4; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image5 != '') : ?>
                        	<div><img width="550" src="<?php echo $image5; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image6 != '') : ?>
                        	<div><img width="550" src="<?php echo $image6; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image7 != '') : ?>
                        	<div><img width="550" src="<?php echo $image7; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image8 != '') : ?>
                        	<div><img width="550" src="<?php echo $image8; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image9 != '') : ?>
                        	<div><img width="550" src="<?php echo $image9; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image10 != '') : ?>
                        	<div><img width="550" src="<?php echo $image10; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image11 != '') : ?>
                        	<div><img width="550" src="<?php echo $image11; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>
                            
                            <?php if($image12 != '') : ?>
                        	<div><img width="550" src="<?php echo $image12; ?>" alt="<?php the_title(); ?>" /></div>
                            <?php endif; ?>


                        </div>

                    <!--END .slider -->
					</div>
                    
                    <?php if($image2 != '') : ?>
                    <div class="arrow"></div>
                    <?php else: ?>
                    <div class="arrow noslider"></div>
                    <?php endif; ?>
                    
                    <?php else: ?>
                    
                   		<?php $embed = get_post_meta(get_the_ID(), 'tz_portfolio_embed_code', TRUE); ?>
						
						<?php if($embed == '') : ?>
						
							<?php tz_video(get_the_ID()); ?>
                            
                            <?php $heightSingle = get_post_meta(get_the_ID(), 'tz_video_height_single', TRUE); ?>
                            
                            <style type="text/css">
                                .single .jp-video-play,
                                .single div.jp-jplayer.jp-jplayer-video {
                                    height: <?php echo $heightSingle; ?>px;
                                }
                            </style>
                            
                            <div id="jquery_jplayer_<?php the_ID(); ?>" class="jp-jplayer jp-jplayer-video"></div>
                            
                            <div class="jp-video-container">
                                <div class="jp-video">
                                    <div class="jp-type-single">
                                        <div id="jp_interface_<?php the_ID(); ?>" class="jp-interface">
                                            <ul class="jp-controls">
                                                <li><div class="seperator-first"></div></li>
                                                <li><div class="seperator-second"></div></li>
                                                <li><a href="#" class="jp-play" tabindex="1">play</a></li>
                                                <li><a href="#" class="jp-pause" tabindex="1">pause</a></li>
                                                <li><a href="#" class="jp-mute" tabindex="1">mute</a></li>
                                                <li><a href="#" class="jp-unmute" tabindex="1">unmute</a></li>
                                            </ul>
                                            <div class="jp-progress-container">
                                                <div class="jp-progress">
                                                    <div class="jp-seek-bar">
                                                        <div class="jp-play-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="jp-volume-bar-container">
                                                <div class="jp-volume-bar">
                                                    <div class="jp-volume-bar-value"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
						
						<?php else: ?>
						
							<?php echo stripslashes(htmlspecialchars_decode($embed)); ?>
						
						<?php endif; ?>
                    
                    <?php endif; ?>
                    
                    

					<!--BEGIN .entry-content -->
					<div class="entry-content">
						<?php the_content(''); ?>
					<!--END .entry-content -->
					</div>
                
				<!--END .hentry-->  
				</div>
                
            	<?php comments_template('', true); ?>

				<?php endwhile; else: ?>

				<!--BEGIN #post-0-->
				<div id="post-0" <?php post_class() ?>>
				
					<h1 class="entry-title"><?php _e('Error 404 - Not Found', 'framework') ?></h1>
				
					<!--BEGIN .entry-content-->
					<div class="entry-content">
						<p><?php _e("Lo sentimos, la página que estas buscando no se encuentra o ha sido eliminada.", "framework") ?></p>
					<!--END .entry-content-->
					</div>
				
				<!--END #post-0-->
				</div>

			<?php endif; ?>
			<!--END #primary .hfeed-->
			</div>
            
            <!--BEGIN #single-sidebar-->
            <div id="single-sidebar">
            
            	<h1 class="entry-title"><?php the_title(); ?></h1>
            	
            		<?php 
						$caption = get_post_meta(get_the_ID(), 'tz_portfolio_caption', TRUE); 
						$link = get_post_meta(get_the_ID(), 'tz_portfolio_link', TRUE);
						$surface = get_post_meta(get_the_ID(), 'tz_portfolio_surface', TRUE);
						$localization = get_post_meta(get_the_ID(), 'tz_portfolio_loc', TRUE); 
						$status = get_post_meta(get_the_ID(), 'tz_portfolio_etapa', TRUE);
					?>
            
            	    <!--BEGIN .entry-meta .entry-header-->
                    <ul class="entry-meta entry-header clearfix">
                    
                    <?php edit_post_link( __('[Editar]', 'framework'), '<li class="edit-post">', '</li>' ); ?>
                                        
                    <?php if($caption != '') : ?>
                    <li class="caption">
                        <?php echo stripslashes(htmlspecialchars_decode($caption)); ?>
                    </li>
                    <?php endif; ?>
                    
                    <!-- DATE Portfolio -->
                    <li class="caption">
                    	<h3 class="widget-title">Fecha: </h3>
                    	<ul>
                    		<li><?php the_time('F, Y') ?></li>
                    	</ul>
                    </li>
                    
                    <!-- Ubicacion -->
                    <?php if($localization != '') : ?>
                    <li class="caption">
                        <h3 class="widget-title">Localización:</h3>
                        <ul>
                    		<li><?php echo $localization; ?></li>
                    	</ul>
                    </li>
                    <?php endif; ?> 
                    
                     <!-- Superficie -->
                    <?php if($surface != '') : ?>
                    <li class="caption">
                        <h3 class="widget-title">Superficie:</h3>
                        <ul>
                    		<li><?php echo stripslashes(htmlspecialchars_decode($surface)); ?> m2</li>
                    	</ul>
                    </li>
                    <?php endif; ?>
                    
                     <!-- Etapa del proyecto -->
                    <?php if($surface != '') : ?>
                    <li class="caption">
                        <h3 class="widget-title">Etapa de proyecto:</h3>
                        <ul>
                    		<li><?php echo stripslashes(htmlspecialchars_decode($status)); ?></li>
                    	</ul>
                    </li>
                    <?php endif; ?>                  
           			
           			<!-- Show Link -->
           			<!-- 
                    <?php if($link != '') : ?>
                    <li class="link">
                        <a target="_blank" href="<?php echo $link; ?>"><span class="icon"></span><?php _e('View Project', 'framework'); ?></a>
                    </li>
                    <?php endif; ?>
                    -->
                    
                    <li class="terms">
                     
                        <h3 class="widget-title"><?php _e('Tipología:', 'framework'); ?></h3>
                        
                        <?php $terms = get_the_terms( get_the_ID(), 'skill-type' ); ?>
                    
                        <ul>
                            <?php foreach ($terms as $term) :  ?>
                            <li class="caption"><?php echo $term->name; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        
                    </li>
                    
                    <?php $terms_col = get_the_terms( get_the_ID(), 'colaboradores' ); ?>
                    
                    <?php if($terms_col != '') : ?> 
                    
                    <div class="line"></div>
                    <li class="terms">
                    
                        <h3 class="widget-title"><?php _e('Proyecto en colaboración con:', 'framework'); ?></h3>
                        <ul>
                            <?php foreach ($terms_col as $term_col) :  ?>
                            <li class="caption"><?php echo $term_col->name; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        
                    </li>
                    <?php endif; ?>

                    
                    <!--END .entry-meta entry-header -->
                    </ul>
                    
                    <div class="seperator clearfix">
                        <div class="line"></div>
                    </div>

                    <?php if(is_single()) : ?>
                    <!--BEGIN .navigation .single-page-navigation -->
                    <div class="navigation single-page-navigation clearfix">
                        <div class="nav-previous"><?php next_post_link(__('%link', 'framework'), '<span class="arrow">%title</span>') ?></div>
                        <div class="portfolio-link">
                        	<a href="<?php echo get_permalink( get_option('tz_portfolio_page') ); ?>">
                            	<span class="icon"><?php _e('Regresar a Proyectos', 'framework'); ?></span>
                             </a>
                        </div>
                        <div class="nav-next"><?php previous_post_link(__('%link', 'framework'), '<span class="arrow">%title</span>') ?></div>
                    <!--END .navigation .single-page-navigation -->
                    </div>
                    <?php endif; ?>

            
            <!--END #single-sidebar-->
            </div>

<?php get_footer(); ?>