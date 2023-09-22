<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package LRT-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header Start -->
	
  <header>
    <div class="site_container">
      <div class="header_inner">
        <div class="header_logo">
        	<?php 
        		$header_logo = get_field('header_logo', 'option'); 
        		if($header_logo) :
        	?>
	          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	              <img src="<?php echo $header_logo; ?>" alt="site-logo">
	          </a>
		      <?php else: ?>
	        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	              <?php bloginfo( 'name' ); ?>
	          </a>
		      <?php endif; ?>
        </div>
        <div class="mobile_toggle">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg>
        </div>
        <div class="header_list">
          <span class="close_menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg>
          </span>
          <div class="header_menu">
            <?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
          </div>
          <div class="header_cta">
          	<?php 
          		$header_phone = get_field('header_phone', 'option'); 
          		if($header_phone):
          	?>
            <a href="tel:<?php echo $header_phone; ?>" class="PhoneCall">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M347.1 24.6c7.7-18.6 28-28.5 47.4-23.2l88 24C499.9 30.2 512 46 512 64c0 247.4-200.6 448-448 448c-18 0-33.8-12.1-38.6-29.5l-24-88c-5.3-19.4 4.6-39.7 23.2-47.4l96-40c16.3-6.8 35.2-2.1 46.3 11.6L207.3 368c70.4-33.3 127.4-90.3 160.7-160.7L318.7 167c-13.7-11.2-18.4-30-11.6-46.3l40-96z"/></svg>
                <?php echo $header_phone; ?>
            </a>
          <?php endif; ?>
          <?php 

          		$contact_button_text = get_field('contact_button_text', 'option'); 
          		$contact_button_url = get_field('contact_button_url', 'option'); 
              $show_header_contact_button = get_field('show_header_contact_button', 'option'); 

          		if( $show_header_contact_button ):
          	?>
            <a href="<?php echo $contact_button_url; ?> " class="header_contact">
                <?php echo $contact_button_text; ?> 
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Header End -->
