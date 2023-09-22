<!-- About Us -->
<?php 
$values_background = get_sub_field('values_background');
$values_heading = get_sub_field('values_heading');
$values_text = get_sub_field('values_text');
$values_cta_text = get_sub_field('values_cta_text');
$values_cta_url = get_sub_field('values_cta_url');
$values_cta_text = get_sub_field('values_cta_text');
$value_box_background = get_sub_field('value_box_background');
$values_boxes = get_sub_field('values_boxes');

?>
<div id="about" class="about_main" <?php if($values_background):?> style="background:<?php echo $values_background; ?>" <?php endif; ?>>
  <div class="site_container">
    <div class="about_inner">
      <div class="about_left">
      	<?php 
		    	// Check rows existexists.
					if( have_rows('values_boxes') ):
						while( have_rows('values_boxes') ) : the_row(); 
		    		$value_box_number = get_sub_field('value_box_number');
		    		$value_box_text = get_sub_field('value_box_text');
		    ?>
        <div class="about_block" <?php if($value_box_background):?> style="background:<?php echo $value_box_background; ?>" <?php endif; ?>>
          <h2><?php echo $value_box_number; ?></h2>	
          <p><?php echo $value_box_text; ?></p>
        </div>
        <?php  endwhile; ?>
        <?php endif; ?> 
		    
      </div>
      <div class="about_right">
      	<?php if($values_heading): ?>
        	<h3><?php echo $values_heading; ?></h3>
        <?php else: ?>
        	<h3>Lorem Ipsum Dolor</h3>
        <?php endif; ?>
        <?php if($values_text): ?>
        	<p><?php echo $values_text; ?></p>
        <?php else: ?>
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum nibh neque, faucibus mollis urna fringilla nec. Proin nibh nisl, hendrerit nec efficitur in, convallis in ante. Morbi tempor ligula quis accumsan laoreet. Fusce dapibus tellus non auctor pellentesque. Vivamus tristique ipsum in urna feugiat, vestibulum condimentum massa semper.</p>
        <?php endif; ?>
        <?php if($values_cta_text and $values_cta_url ): ?>
        	<a href="<?php echo $values_cta_url;?>" class="site_btn">
        		<?php echo $values_cta_text; ?>
        	</a>
        <?php endif; ?>
      </div>
    </div>
  </div>          
</div>

<!-- About Us End -->