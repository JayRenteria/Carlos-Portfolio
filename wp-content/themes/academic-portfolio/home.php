<?php get_header(); ?>


	<div class="wrapper"> <!-- sticky footer stuff -->
		<div class="container-fluid">
			<div class="col-sm-8 mt60">
				<?php if( have_posts()): while( have_posts()): the_post(); ?>
					<div>
						<article>
							<h2 class="blog-link">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p class="post-credits">
								By <?php the_author(); ?>
								on <?php echo the_time('l, F jS, Y') ?>
								in <?php the_category( ', ' ); ?>,
								<a href="<?php comments_link() ?>"><?php comments_number(); ?></a>
							</p>
							<div class="hr"></div>
							<br>
							<p class="blog-link">
								<a href="<?php the_permalink(); ?>"><?php the_excerpt_without_filters(); ?></a>
							</p>
					</article>
				</div><!-- end dotted-box -->

			<?php endwhile; ?>

				<div class="empty-box wp-blog-nav">
					<?php if( get_next_posts_link()): ?>
					<div class="postnpin-previous">
						<i class="pin pin-blog orange-pin"></i>
						<div class="post-it post-it-previous">
							<h3>
								<div class="nav-previous">
									&lt <?php next_posts_link( 'Older posts' ); ?>
								</div>
							</h3>
						</div><!-- end post-it -->
					</div><!-- end postnpin-previous -->
			<?php endif; ?>

					<?php if( get_previous_posts_link()): ?>
						<div class="postnpin-next">
							<i class="pin pin-blog orange-pin"></i>
							<div class="post-it post-it-next">
								<h3>
									<div class="nav-next">
										<?php previous_posts_link( 'Newer posts' ); ?> &gt
									</div>
								</h3>
							</div><!-- end post-it -->
						</div><!-- end postnpin-next -->
					<?php endif; ?>
				</div><!-- end empty-box -->


				<?php else: ?>
					<p><?php _e('Sorry, no pages found.', 'wpbootstrap') ?></p>
				<?php endif; ?>
			</div><!-- end col-md-8 -->
		</div>

		<div class="push"></div>
	</div>
<?php get_footer(); ?>