<!-- Locations -->
<?php 
$location_background = get_sub_field('location_background');
$location_image = get_sub_field('location_image');
$location_section_heading = get_sub_field('location_section_heading');
$all_locations = get_sub_field('all_locations');
?>
<div id="locations" class="location_main" <?php if($location_background):?> style="background:<?php echo $location_background; ?>" <?php endif; ?>>
  <div class="site_container">
    <div class="location_inner">
      <div class="location_left">
      	<?php if ( $location_section_heading): ?>
    		<h3><?php echo $location_section_heading; ?></h3>
	    	<?php else: ?>
	    		<h3>Our Locations</h3>
	    	<?php endif; ?>
	    	<?php 
	    	// Check rows existexists.
				if( have_rows('all_locations') ):
					while( have_rows('all_locations') ) : the_row(); 
	    		$location_name = get_sub_field('location_name');
	    		$address = get_sub_field('address');
		  	?>
	        <span class="location_block">
	          <h6><?php echo $location_name; ?> </h6>
	          <p><?php echo $address; ?></p>
	        </span>
        <?php  endwhile; ?>
      	<?php endif; ?>
      </div>
      <div class="location_right">
        <span class="location_img">
        	<?php if ( $location_image ): ?>
          	<img src="<?php echo $location_image; ?>" alt="Locations">
          <?php else: ?>
	    			<img src="<?php bloginfo('template_url') ?>/images/location.png" alt="Locations">
	    	<?php endif; ?>
        </span>
      </div>
    </div>
  </div>
</div>
<!-- Locations End -->