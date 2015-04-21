<?php get_header(); ?>

<div class="background">

	<div class="container-fluid" id="home_section">
		<div class="row">
			<div class="col-md-12">
				<h1>Carlos M. Indacochea</h1>
				<h3>Academic Portfolio</h3>
			</div>
		</div><!-- end row -->
	</div><!-- end container-fluid -->

	<div class="mt80 hidden-xs"></div>

<!--	desktop view-->
	<div class="container-fluid mt80 hidden-xs" id="bio_section">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="section-header">Bio</h2>
				<div class="color-bar"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 visible-xs">
				<div class="bio-picture">
					<?php if( dynamic_sidebar('bio-pic')); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-7">
				<div class="white">
					<?php if( dynamic_sidebar('bio-text')); ?>
				</div>
			</div>
			<div class="col-sm-5 hidden-xs">
				<div class="bio-picture">
					<?php if( dynamic_sidebar('bio-pic')); ?>
				</div>
			</div>
		</div>
	</div>

<!--	mobile view-->
	<div class="container-fluid visible-xs" id="bio_section">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="section-header">Bio</h2>
				<div class="color-bar"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 visible-xs">
				<div class="bio-picture">
					<?php if( dynamic_sidebar('bio-pic')); ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-7">
				<div class="white">
					<?php if( dynamic_sidebar('bio-text')); ?>
				</div>
			</div>
			<div class="col-sm-5 hidden-xs">
				<div class="bio-picture">
					<?php if( dynamic_sidebar('bio-pic')); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="mt80"></div>

	<div class="container-fluid mt80" id="portfolio_section">
		<div class="row">
			<div class="col-sm-12">
				<h2 class="section-header">Curriculum Vitae</h2>
				<div class="color-bar"></div>
				<div class="white">
					<?php echo do_shortcode('[rb_resume id="61"]'); ?>
				</div>
			</div>
		</div><!-- end row -->
	</div><!-- end container-fluid -->

	<div class="mt80"></div>

</div>
<?php get_footer(); ?>