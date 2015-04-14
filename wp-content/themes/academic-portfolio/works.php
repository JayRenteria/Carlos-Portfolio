<?php

/*
Template Name: Works
*/

?>

<?php get_header(); ?>

	<div class="wrapper">

		<div class="container-fluid" id="contact_section">
			<div class="row">
				<div class="col-md-12 mt60 mb60">
					<h2 class="section-header">Works</h2>
					<div class="color-bar"></div>
				</div>
			</div><!-- end row -->
		</div><!-- end container-fluid -->

		<div class="container-fluid" id="contact_section">
			<div class="row">
				<div>
					<?php if( dynamic_sidebar('docs')); ?>
				</div>
			</div>
		</div>

		<div class="push"></div>
	</div>

<?php get_footer(); ?>