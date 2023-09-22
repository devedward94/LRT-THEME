<!-- Contact Us -->
<?php 
$your_project_background = get_sub_field('your_project_background');
$your_project_background_image = get_sub_field('your_project_background_image');
$project_section_heading = get_sub_field('project_section_heading');
$project_section_subtext = get_sub_field('project_section_subtext');
$project_section_cta_text = get_sub_field('project_section_cta_text');
$project_section_cta_url = get_sub_field('project_section_cta_url');
?>
<div id="contact" class="contact_main" <?php if($your_project_background):?> style="background:<?php echo $your_project_background; ?>" <?php endif; ?>>
	<div class="site_container" >
    <div class="contact_inner" <?php if($your_project_background_image):?> style="background-image: url(<?php echo $your_project_background_image; ?>);" <?php endif; ?>>
    <?php if ( $project_section_heading): ?>
    	<h3><?php echo $project_section_heading; ?></h3>
	  <?php else: ?>
	    <h3>Let’s Talk About Your Project</h3>
	  <?php endif; ?>
	  <?php if ( $project_section_subtext): ?>
    	<p><?php echo $project_section_subtext; ?></p>
	  <?php else: ?>
	    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum nibh neque, faucibus mollis urna fringilla nec.</p>
	  <?php endif; ?> 
    <?php if ( $project_section_cta_text and $project_section_cta_url): ?> 
     	<a href="<?php echo $project_section_cta_url; ?>" class="site_btn contact_btn"><?php echo $project_section_cta_text; ?></a>
    <?php endif; ?>
    </div>
	</div>
</div>
<!-- Contact Us End -->