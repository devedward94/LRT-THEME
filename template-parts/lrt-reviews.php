<!-- Testimonials -->
<?php 
$reviews_background = get_sub_field('reviews_background');
$reviews_heading = get_sub_field('reviews_heading');
$reviews_subtext = get_sub_field('reviews_subtext');
$all_reviews = get_sub_field('all_reviews');
?>
<div class="testimonials_main" <?php if($reviews_background):?> style="background:<?php echo $reviews_background; ?>" <?php endif; ?>>
  <div class="site_container">
    <div class="testimonials_text">
      <?php if ( $reviews_heading): ?>
    		<h3><?php echo $reviews_heading; ?></h3>
	    <?php else: ?>
	    	<h3>What People Say About Us</h3>
	    <?php endif; ?>
	    <?php if ( $reviews_subtext): ?>
      	<p><?php echo $reviews_subtext; ?></p>
      <?php else: ?>
      	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
      <?php endif; ?>
    </div>
    <div class="testimonials_slider">
    	<?php 
	    	// Check rows existexists.
				if( have_rows('all_reviews') ):
					while( have_rows('all_reviews') ) : the_row(); 
	    		 $review = get_sub_field('review');
	    		 $post_title = $review->post_title;
	    		 $post_id = $review->ID;
	    		 $job_title = get_field('job_title',$post_id);
	    		 $review_text = get_field('review_text',$post_id);
	    		 $company_name = get_field('company_name',$post_id);
	    		 $client_image = get_field('client_image',$post_id);
	    		//print_r($review);
		  ?>
	      <div>
	        <div class="testimonials_item">
	          <span class="testimonials_img">
	            <img class="author_img" src="<?php echo $client_image; ?>" alt="Author">
	            <img class="qoute_img" src="<?php bloginfo('template_url');?>/images/quoteicn@2x.png" alt="Qoute">
	          </span>
	          <p><?php echo $review_text; ?></p>
	          <h4>— <?php if($post_title): echo $post_title; endif; ?></h4>
	          <p>
	          	<?php if($job_title): echo $job_title; endif; ?>, 
	          	<?php if($company_name): echo $company_name; endif; ?>
	          </p>
	        </div>
	      </div>
      <?php  endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<!-- Testimonials End -->