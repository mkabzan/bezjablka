			<div class="prefooter">
			
			<div class="zena">
			<img src="http://beta.mangoweb.cz/bezjablka/wp-content/themes/eddiemachado-bones-329ea13/library/images/losekot-kolecko-footer.png" />
			<div class="zena-inner">
			<h2 style="text-align:right;">Michelle</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
			</div>
			</div>
			
			<div class="muz">
			<img src="http://beta.mangoweb.cz/bezjablka/wp-content/themes/eddiemachado-bones-329ea13/library/images/sipek-kolecko-footer.png" />
			<div class="muz-inner">
			<h2>Miloš</h2>
			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
			</div>
			</div>
			
			</div>
			
			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
        			'after' => '',                                  // after the menu
        			'link_before' => '',                            // before each link
        			'link_after' => '',                             // after each link
        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="copyright">bez <span class="jablko"></span> vytvořil <a href="http://www.mangoweb.cz">manGoweb</a></p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
