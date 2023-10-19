
		<!-- Header Main Area End Here -->
        <?php
		get_header();
	?>
		<!-- Page Content -->
		<div class="page-content">

			<?php
			if( have_posts()) {
				while( have_posts()) {
					the_post();
					get_template_part('/template-parts/content','cennik');
				}
			}
			?>
            
		</div>
		<!-- Page Content End -->
		<?php
		get_footer();
		?>