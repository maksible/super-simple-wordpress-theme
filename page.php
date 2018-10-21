<?php get_header(); ?>
<div class="col-md-12">
THIS IS PAGE
<?php 
	if ( have_posts() ) :
		while ( have_posts() ) : 
			the_post();  	
			get_template_part( 'content', get_post_format() );  
		endwhile; 
	endif; 
	?>
	<!-- NO sidebar -->
</div>
<?php get_footer(); ?>