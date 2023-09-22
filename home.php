<?php 

/* Template Name: Home */

get_header();
 
if (have_posts()) : while (have_posts()) : the_post();

	// are there any rows within within our flexible content?
	if( have_rows('home_sections') ): 

		// loop through all the rows of flexible content
		while ( have_rows('home_sections') ) : the_row();

			// HERO
			if( get_row_layout() == 'hero_section' ) {
				get_template_part('template-parts/lrt', 'hero');
			}
			// Services
			if( get_row_layout() == 'our_services_section' ) {
				get_template_part('template-parts/lrt', 'services');
			}
			// Values
			if( get_row_layout() == 'values_section' ) {
				get_template_part('template-parts/lrt', 'values');
			}
			// Cliens
			if( get_row_layout() == 'our_clients_section' ) {
				get_template_part('template-parts/lrt', 'clients');
			}
			// work
			if( get_row_layout() == 'our_work_section' ) {
				get_template_part('template-parts/lrt', 'work');
			}
			// locations
			if( get_row_layout() == 'our_locations' ) {
				get_template_part('template-parts/lrt', 'locations');
			}
			// reviews
			if( get_row_layout() == 'reviews_sections' ) {
				get_template_part('template-parts/lrt', 'reviews');
			}
			// reviews
			if( get_row_layout() == 'discuss_your_project' ) {
				get_template_part('template-parts/lrt', 'discuss');
			}
			
		endwhile; // close the loop of flexible content
	endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>



<?php
get_footer();
