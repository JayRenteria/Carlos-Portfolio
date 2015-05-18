<?php get_header(); ?>


<div class="wrapper"><!-- sticky footer -->
	<div class="container-fluid mt80">
		<div class="row">
			<div class="col-sm-8 post-list">
				<?php if( have_posts()): while( have_posts()): the_post(); ?>
					<h2 class="blog-link section-header">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<div class="color-bar"></div>
					<div class="post white mb30">
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
					</div>

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

			<div class="col-sm-4 mt20">
				<form role="search" method="get" id="searchform" class="searchform hidden-xs" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div>
            <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
            <span><input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" /></span>
          </div>
        </form>
				<div class="white mt30 mb60">
          <?php if( dynamic_sidebar('blog-stats')); ?>
        </div>
			</div>
		</div><!-- end row -->
	</div><!-- end container-fluid -->	
</div><!-- end wrapper -->
<div class="push"></div>

<?php get_footer(); ?>