<?php 
$services_background = get_sub_field('services_background');
$services_heading = get_sub_field('services_heading');
$services_subtext = get_sub_field('services_subtext');
$all_services = get_sub_field('all_services');

?>

<!-- Services -->
<div id="services" class="services_main" <?php if($services_background):?> style="background:<?php echo $services_background; ?>" <?php endif; ?>>
  <div class="site_container">
    <div class="services_text">
    <?php if($services_heading):?>
    	<h3><?php echo $services_heading; ?></h3>
    <?php else: ?>
    	<h3>Our Services</h3>
    <?php endif; ?>
    <?php if($services_subtext):?>
      <p><?php echo $services_subtext; ?></p>
    <?php else: ?>
    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum nibh neque, faucibus mollis urna fringilla nec. Proin nibh nisl, hendrerit nec efficitur in,</p>
    <?php endif; ?>
    </div>

    <?php 
    	// Check rows existexists.
		if( have_rows('all_services') ):
    ?>
	    <div class="services_inner">
	    	<?php 
	    	// Loop through rows.
    		while( have_rows('all_services') ) : the_row(); 
    		$service_background = get_sub_field('service_background');
    		$service_heading = get_sub_field('service_heading');
    		$service_text = get_sub_field('service_text');
    		$service_cta_text = get_sub_field('service_cta_text');
    		$service_cta_url = get_sub_field('service_cta_url');
    		$item_with_image = get_sub_field('item_with_image');
    		if($item_with_image):
    		?>
		    	<div class="service_block">
		    		<?php if($service_background): ?>
		    			<span class="service_img">
		          <img src="<?php echo $service_background; ?>" alt="Service">
		        </span>
		    		<?php else: ?>
		    			<span class="service_img">
		          <img src="<?php bloginfo('template_url');?>/images/s1.png" alt="Service">
		        </span>
		    		<?php endif; ?>
		        <span class="service_text">
		        	<?php if($service_heading): ?>
		        		<h4><?php echo $service_heading; ?></h4>
		        	<?php else: ?>
		        		<h4>Structural Restoration</h4>
		        	<?php endif; ?>
		        	<?php if($service_cta_text and $service_cta_url ): ?>
		          	<a href="<?php echo $service_cta_url;?>" class="site_btn service_btn">
		          			<?php echo $service_cta_text; ?>
		          	</a>
		          <?php endif; ?>
		        </span>
		      </div>
		    <?php else: ?> 
		    	
				  <div class=" service_block service_block--details">
		        <div class="service_block--dInner">
		          <?php if($service_heading): ?>
		        		<h4><?php echo $service_heading; ?></h4>
		        	<?php else: ?>
		        		<h4>Structural Restoration</h4>
		        	<?php endif; ?>
		        	<?php if($service_text): ?>
		          	<p><?php echo $service_text; ?></p>
		          <?php else: ?>
		          	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu odio euismod.</p>
		          <?php endif; ?>
		          <?php if($service_cta_text and $service_cta_url ): ?>
		          	<a href="<?php echo $service_cta_url;?>" class="site_btn">
		          			<?php echo $service_cta_text; ?>
		          	</a>
		          <?php endif; ?>
		        </div>
		    	</div> 
		    <?php endif; ?> 
		    <?php  endwhile; ?>
	    </div>
	  <?php else : ?>
	  	<p class="norecord">Services will be listed soon. </p>
	  <?php endif; ?>
  </div>
</div>
<!-- Services End -->