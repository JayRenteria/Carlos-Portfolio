<?php get_header(); ?>

<div class="container-fluid" id="home_section">
	<div class="row">
		<div class="col-md-12">
			<?php if( dynamic_sidebar('top-pic')); ?>

			<h1>Jordyn Bernicke</h1>
			<h3>Artist at large</h3>
		</div>
	</div><!-- end row -->
</div><!-- end container-fluid -->

<div class="mt80"></div>

<div class="container-fluid mt80" id="portfolio_section">
	<div class="row">
		<div class="col-md-12 column">
			<h2>Portfolio</h2>
			<?php

			if(function_exists('envira_gallery')) {
				envira_gallery( '9' );

			}
			if (function_exists('envira_gallery')) {
				envira_gallery('portfolio', 'slug');
			}

			?>
		</div>
	</div><!-- end row -->
</div><!-- end container-fluid -->

<div class="mt80"></div>

<div class="container-fluid mt80" id="bio_section">
	<div class="row">
		<div class="col-sm-12">
			<h2>Bio</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 visible-xs">
			<div class="bio-picture">
				<?php if( dynamic_sidebar('bio-pic')); ?>
			</div>
		</div>
		<div class="col-sm-7">
			<?php if( dynamic_sidebar('bio-text')); ?>
		</div>
		<div class="col-sm-5 hidden-xs">
			<div class="bio-picture">
				<?php if( dynamic_sidebar('bio-pic')); ?>
			</div>
		</div>
	</div>
</div>

<div class="mt80"></div>


<?php get_footer(); ?>