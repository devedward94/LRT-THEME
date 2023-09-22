<!-- Our Clients -->
<?php 
$clients_background = get_sub_field('clients_background');
$clients_section_heading = get_sub_field('clients_section_heading');
$all_clients = get_sub_field('all_clients');

?>
<div class="clients_main" <?php if($clients_background):?> style="background:<?php echo $clients_background; ?>" <?php endif; ?>>
  <div class="site_container">
  	<?php if ( $clients_section_heading): ?>
    	<h3><?php echo $clients_section_heading; ?></h3>
    <?php else: ?>
    	<h3>Our Clients</h3>
    <?php endif; ?>
    <div class="clients_inner">
    	<?php 
		    	// Check rows existexists.
					if( have_rows('all_clients') ):
						while( have_rows('all_clients') ) : the_row(); 
		    		$client_logo = get_sub_field('client_logo');
		  ?>
	      <span class="client_img">
	        <img src="<?php echo $client_logo; ?>" alt="Client">
	      </span>
	    <?php  endwhile; ?>
      <?php endif; ?> 
    </div>
  </div>
</div>
<!-- Our Clients End -->