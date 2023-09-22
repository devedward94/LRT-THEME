<!-- Our Work -->
<?php 
$work_main_background = get_sub_field('work_main_background');
$work_second_background = get_sub_field('work_second_background');
$work_section_heading = get_sub_field('work_section_heading');
$all_work = get_sub_field('all_work');

?>
<div class="work_main" <?php if($work_main_background):?> style="background:<?php echo $work_main_background; ?>" <?php endif; ?>>
  <div class="work_after" <?php if($work_second_background):?> style="background:<?php echo $work_second_background; ?>" <?php endif; ?>></div>
  <div class="site_container">
    <div class="work_top">
      <?php if ( $work_section_heading): ?>
    		<h3><?php echo $work_section_heading; ?></h3>
    	<?php else: ?>
    		<h3>Our Work</h3>
    	<?php endif; ?>
      <a href="#">View All</a>
    </div>
  </div>
  <div class="site_container">
    <div class="work_slider">
    	<?php 
	    	// Check rows existexists.
				if( have_rows('all_work') ):
					while( have_rows('all_work') ) : the_row(); 
	    		$work_image = get_sub_field('work_image');
		  ?>
	      <div>
	        <div class="work_slider--item">
	          <span class="WS_img">
	            <img src="<?php echo $work_image; ?>" alt="work">
	          </span>
	        </div>
	      </div>
	    <?php  endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- Our Work End -->