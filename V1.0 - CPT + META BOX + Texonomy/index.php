<?php get_header(); ?>
<div class="col-md-12">
				THIS IS INDEX
<?php 
if(isset($_GET['post_type']))
	echo $_GET['post_type'];
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile;
			?>
			<nav>
	<ul class="pager">
		<li><?php next_posts_link( 'Previous' ); ?></li>
		<li><?php previous_posts_link( 'Next' ); ?></li>
	</ul>
</nav>
<?php
			endif; 
			?>
			<!-- sidebar -->
			</div>
<?php get_footer(); ?>