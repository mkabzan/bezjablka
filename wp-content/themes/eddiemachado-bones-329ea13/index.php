<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="" role="main">

                      
                     <div style="padding: 0 10px 0 10px; margin:-100px auto 0 auto;">
							        <?php
                            $args = array('post_type' => 'nazory');
                            $query = new WP_Query($args);
                            while($query -> have_posts()) : $query -> the_post();
                      ?>
                      

                      
                      <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?>>                          
                          <p class="cislo" style="background-image: url(http://beta.mangoweb.cz/bezjablka/wp-content/themes/eddiemachado-bones-329ea13/library/images/cislovani.png); background-repeat: no-repeat; background-position: 50% center; text-align:center; height:80px; width:auto; margin:0; padding-top:13px; padding-right:3px; z-index:10; color:#fff; font-size:150%">#<?php echo(types_render_field( "cislo", array( 'raw' => false) )); ?></p>                          
                        <header class="article-header" role="tab">
                        <h1 class="h2 entry-title"><a><?php the_title(); ?></a></h1>
                        <p class="byline vcard">
                           - <?php echo(types_render_field( "datum", array( 'raw' => false) )); ?> -
                        </p>
                        </header>
                        
                        
                        <section class="entry-content cf">
									
                 <div class="nazory">
                 
                  <div class="zensky-nazor">
									   
                     <?php echo(types_render_field( "zensky-nazor", array( 'raw' => false) )); ?>
								     
                  </div>
                                                     
                  <div class="muzsky-nazor">
                     
                      <?php echo(types_render_field( "muzsky-nazor", array( 'raw' => false) )); ?>
                     
                  </div>
                  
                                    
								</div>
								
								</section>
                        
                    
                       
                        </article>
                        
                        
                      <?php endwhile; ?>
                      
                       </div>                                                                                                                                                                                                                                       
                                                                                                                                    
  
                                            
						</div>

					

				</div>

			</div>


<?php get_footer(); ?>
