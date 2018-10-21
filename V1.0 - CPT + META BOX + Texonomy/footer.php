</div>
	</div>

 </div>
 <!--footer-->
<!--footer-->
 <div class="footer">
		<div class="container" style="padding:20px">
		 <hr/>
			<div class="footer-top-at">

				<div class="col-md-4 amet-sed">
				<h4 style="color:#0053A1; text-transform:none">Sitemap</h4>
				<ul class="nav-bottom">
						<li><a href="<?php echo PATH; ?>index.php">Home</a></li>
						<li><a href="<?php echo PATH; ?>gallery.php">Gallery</a></li>
						<li><a href="<?php echo PATH; ?>contact.php">Contact Us</a></li>

					</ul>
				</div>
				
				<div class="col-md-4 amet-sed">
				<h4 style="color:#0053A1; text-transform:none">Contact Us</h4>

					<p><strong>UNIVERSITY GARDENS</strong></p>
					<p>440 University Boulevard East</p>
					<p>Silver Spring, MD 20901</p>
					<p>Telephone:  301-445-5540 TTY 711</p>
					<p>Fax:        301-445-4356</p>

				</div>

				<div class="col-md-4 amet-sed">
					<h4>Follow Us</h4>
					<ul class="social">
						<li><a href="<?php echo get_option('facebook'); ?>"><span class="fa fa-2x fa-facebook"> </span></a></li>
						<li><a href="<?php echo get_option('google_plus'); ?>"><span class="fa fa-2x fa-google-plus"> </span></a></li>
						<li><a href="<?php echo get_option('github'); ?>"><span class="fa fa-2x fa-github"> </span></a></li>
						<li><a href="<?php echo get_option('twitter'); ?>"><span class="fa fa-2x fa-twitter"> </span></a></li>

					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<!--<p>Copyright © 2017-2018 NCBA Inc. All rights reserved. | Designed & Developed by <a target="_blank" href="http://www.centurydigitek.com">CenturyDigitek</a></p>-->
		<p>Copyright © 2017-2018. All rights reserved.</p>
		</div>
		</div>
		</div>
<?php
	require_once(PATH . 'js.php');
    wp_footer();
?>
</body>
</html>
