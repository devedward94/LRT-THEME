<?php 
$hero_background = get_sub_field('hero_background');
$hero_heading = get_sub_field('hero_heading');
$hero_subtext = get_sub_field('hero_subtext');
$hero_cta_text = get_sub_field('hero_cta_text');
$hero_cta_url = get_sub_field('hero_cta_url');
$satisfied_heading = get_sub_field('satisfied_heading');
$satisfied_number = get_sub_field('satisfied_number');
$satisfied_text = get_sub_field('satisfied_text');
$hero_image = get_sub_field('hero_image');
?>
<!-- Banner -->
<div class="banner_main" <?php if ($hero_background): ?> style="background:<?php echo $hero_background;?>" <?php endif; ?>>
  <div class="site_container">
    <div class="banner_inner">
      <div class="banner_left">
      	<?php if($hero_heading): ?>
        	<h1><?php echo $hero_heading; ?></h1>
        <?php else: ?>
        	<h1>Lorem Ipsum Dolor Sit Amet</h1>
        <?php endif; ?>	
        <?php if($hero_subtext): ?>
        	<p><?php echo $hero_subtext; ?></p>
        <?php else: ?>
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu odio euismod, tempus.</p>
        <?php endif; ?>
        <?php if($hero_cta_text && $hero_cta_url ): ?>
        	<a class="banner_btn site_btn" href="<?php echo $hero_cta_url; ?>"><?php echo $hero_cta_text; ?></a>
        <?php endif; ?>
        <?php if( $satisfied_heading ): ?>
	        <div class="satisfied_customers">
	          <p><?php echo $satisfied_heading; ?></p>
	          <div class="satisfied_customers--block">
	          	<?php if( $satisfied_number ): ?>
	          		<h2><?php echo $satisfied_number; ?></h2>
	          	<?php else: ?>
	          		<h2>750+</h2>
	          	<?php endif; ?>
	          	<?php if( $satisfied_text ): ?>
	            	<h6><?php echo $satisfied_text; ?></h6>
	            <?php else: ?>
	            	<h6>Satisfied Customers</h6>
	            <?php endif; ?>
	          </div>
	        </div>
	      <?php endif; ?>
      </div>
      <div class="banner_right">
        <span class="banner_img">
        	<?php if( $hero_image ): ?>
          	<img src="<?php echo $hero_image; ?>" alt="Banner image">
          <?php else: ?>
          	<img src="<?php bloginfo('template_url')?>/images/banner.png" alt="Banner image">
          <?php endif; ?>
        </span>
      </div>
    </div>
  </div>
</div>
<!-- Banner End -->
