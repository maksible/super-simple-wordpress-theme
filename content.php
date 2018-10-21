<div class="service-bottom">
	THIS IS CONTENT
	<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
<a href="<?php comments_link(); ?>">
	<?php
	printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
</a>
 <?php the_content(); // the_excerpt(); ?>

</div><!-- /.blog-post -->
			<!--<div class="col-md-12">
				<div class="col-md-6 service-grid-top">
					
					<div class="service-grid text-center">
						<a href="gallery.html"><img class=" img-responsive" src="<?php echo get_bloginfo( 'template_directory' );?>/images/UG-I/pic1.jpg" alt=""></a>
						
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 service-grid-top">
					
					<div class="service-grid">
						
						<p style="text-align:justify">The Korean Community Services Center of Greater Washington (KCSC), through its affiliate the Korean Community Senior Housing Corporation of Maryland (KCSHC) are the owners of both University Gardens I and University Gardens II, located in the Montgomery Knolls neighborhood of Silver Spring, Maryland.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
				<div class="clearfix"></div>
				-->
			
				
				
			<div class="clearfix"> </div>
		</div>