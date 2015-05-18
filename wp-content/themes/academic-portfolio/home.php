<?php get_header(); ?>


<div class="wrapper"><!-- sticky footer -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 mt60 post-list">
				<?php if( have_posts()): while( have_posts()): the_post(); ?>
					<div>
						<article class="white mb30">
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

					<?php if( get_next_posts_link()): ?>
						&lt <?php next_posts_link( 'Older posts' ); ?>
					<?php endif; ?>

					<?php if( get_previous_posts_link()): ?>
						<?php previous_posts_link( 'Newer posts' ); ?> &gt
					<?php endif; ?>

				<?php else: ?>
					<p><?php _e('Sorry, no pages found.', 'wpbootstrap') ?></p>
				<?php endif; ?>
			</div><!-- end col-md-8 -->
			
			<div class="col-sm-4 mt60">
				<?php if( dynamic_sidebar('top-pic')); ?>
			</div>
		</div><!-- end row -->
	</div><!-- end container-fluid -->	
	<div class="push"></div>
</div>

<?php get_footer(); ?>