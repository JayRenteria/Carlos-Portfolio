<?php

/*
Template Name: Contact Me
*/

?>

<?php get_header(); ?>

<div class="wrapper">

<div class="container-fluid" id="contact_section">
	<div class="row">
		<div class="col-md-12 mt60 mb30">
			<h2 class="section-header">Contact me</h2>
			<div class="color-bar"></div>
		</div>
	</div><!-- end row -->
</div><!-- end container-fluid -->

<div class="mb60" id="contact_form">
	<form class="form-horizontal" role="form" id="controller" action="<?php echo get_template_directory_uri();?>/contact-controller.php" method="post">
		<div class="container-fluid">

			<div class="row hidden-xs">
				<div class="form-group mt40">
					<div class="col-sm-4">
						<input class="form-control" id="name" name="name" type="text" placeholder="Name" required>
					</div>
					<div class="col-sm-4">
						<input class="form-control" id="email" name="email" type="text" placeholder="Email" required>
					</div>
					<div class="col-sm-4">
						<input class="form-control" id="website" name="website" type="text" placeholder="Website">
					</div>
				</div>
			</div>

			<div class="row visible-xs">
				<div class="form-group">
					<div class="col-sm-4">
						<input class="form-control" id="name" name="name" type="text" placeholder="Name" required>
					</div>
					<div class="col-sm-4">
						<input class="form-control" id="email" name="email" type="text" placeholder="Email" required>
					</div>
					<div class="col-sm-4">
						<input class="form-control" id="website" name="website" type="text" placeholder="Website">
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<textarea class="form-control" name="message" id="message" rows="10" placeholder="Message" required></textarea>
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
<div class="push"></div>
</div>

<?php get_footer(); ?>