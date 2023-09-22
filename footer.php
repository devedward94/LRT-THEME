<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LRT-theme
 */

?>
<!-- Newsletter -->
    <div class="newsletter_main">
        <div class="site_container">
            <div class="newsletter_inner">
                <h4>Sign Up for Our Newsletter</h4>
                <form>
                    <div class="input_block">
                        <label>name</label>
                        <input type="text" name="" id="" placeholder="Your Name…">
                    </div>
                    <div class="input_block">
                        <label>email</label>
                        <input type="email" name="" id="" placeholder="Your Email…">
                    </div>
                    <button class="site_btn submit_btn" type="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
	<!-- Footer -->
  <footer>
    <div class="site_container">
      <div class="footer_inner">
        <div class="footer_logo">
          <?php 
        		$footer_logo = get_field('footer_logo', 'option'); 

        		if($footer_logo) :
        		?>
		          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		              <img src="<?php echo $footer_logo; ?>" alt="site-logo">
		          </a>
		        <?php else: ?>
		        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		              <?php bloginfo( 'name' ); ?>
		          </a>
		      <?php endif; ?>
          <?php 

          		$contact_button_text = get_field('contact_button_text', 'option'); 
          		$contact_button_url = get_field('contact_button_url', 'option'); 
              $show_footer_contact_button = get_field('show_footer_contact_button', 'option'); 

          		if( $show_footer_contact_button ):
          ?>
            <a href="<?php echo $contact_button_url; ?> " class="site_btn">
                <?php echo $contact_button_text; ?> 
            </a>
          <?php endif; ?>
        </div> 
        <div class="footer_block">
          <h6><?php echo $menu_title_1 = get_field('menu_title_1', 'option'); ?></h6>
          <?php $footer_navigation_1 = get_field('footer_navigation_1', 'option'); 
          	wp_nav_menu(
								array(
									'theme_location' => 'footer-menu-1',
									'menu_id'        => $footer_navigation_1->slug,
								)
							);
          ?>
        </div>
        <div class="footer_block">
          <h6><?php echo $menu_title_2 = get_field('menu_title_2', 'option'); ?></h6>
          <?php $footer_navigation_2 = get_field('footer_navigation_2', 'option');
          	wp_nav_menu(
								array(
									'theme_location' => 'footer-menu-2',
									'menu_id'        => $footer_navigation_2->slug,
								)
							);
          ?>
        </div>
        <div class="footer_block">
          <h6><?php echo $menu_title_3 = get_field('menu_title_3', 'option'); ?></h6>
          <?php $footer_navigation_3 = get_field('footer_navigation_3', 'option');
          	wp_nav_menu(
								array(
									'theme_location' => 'footer-menu-3',
									'menu_id'        => $footer_navigation_3->slug,
								)
							);
          ?>
        </div>
        <div class="footer_block footer_social">
        	<?php 
        		$facebook_url = get_field('facebook_url', 'option'); 
        		if($facebook_url) :
        	?>
	          <a href="<?php echo $facebook_url; ?>" target="_blank">
	            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
	          </a>
	        <?php endif; ?>
	        <?php 
        		$linkedin_url = get_field('linkedin_url', 'option'); 
        		if($linkedin_url) :
        	?>
          <a href="<?php echo $linkedin_url; ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
          </a>
          <?php endif; ?>
	        <?php 
        		$youtube_url = get_field('youtube_url', 'option'); 
        		if($youtube_url) :
        	?>
          <a href="<?php echo $youtube_url; ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg>
          </a>
          <?php endif; ?>
	        <?php 
        		$instagram_url = get_field('instagram_url', 'option'); 
        		if($instagram_url) :
        	?>
          <a href="<?php echo $instagram_url; ?>" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer End -->

<?php wp_footer(); ?>

</body>
</html>
