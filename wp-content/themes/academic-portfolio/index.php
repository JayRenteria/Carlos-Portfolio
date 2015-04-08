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

<div class="container-fluid" id="contact_section">
	<div class="row">
		<div class="col-md-12">
			<h2>Contact me</h2>
		</div>
	</div><!-- end row -->
</div><!-- end container-fluid -->

<div id="contact_form">
	<form class="form-horizontal" role="form" id="controller" action="<?php echo get_template_directory_uri();?>/index-controller.php" method="post">
		<div class="container-fluid">

			<div class="row">
				<div class="form-group mb0 mt40">
					<div class="col-sm-4">
						<input class="form-control" id="name" name="name" type="text" placeholder="Name">
					</div>
					<div class="col-sm-4">
						<input class="form-control" id="email" name="email" type="text" placeholder="Email">
					</div>
					<div class="col-sm-4">
						<input class="form-control" id="website" name="website" type="text" placeholder="Website">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<div class="form-group mt20">
						<textarea class="form-control" name="message" id="message" rows="10" placeholder="Message"></textarea>
					</div>
				</div>
			</div>

			<button type="submit" class="form-submit-btn btn btn-default">Send</button>

			<div class="row">
				<div class="form-group output mt20">
					<p id="outputArea"></p>
				</div>
			</div><!-- end row -->

		</div><!-- end container-fluid -->
	</form>
</div><!-- end contact_section -->

<?php get_footer(); ?>