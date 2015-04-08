<?php get_header(); ?>

<div class="container-fluid" id="blog">
  <div class="post-it post-it-offcanvas visible-xs">
    <h3>
      <button href="#" data-toggle="offcanvas" class="btn-no-style">
      &lt Nav</button>
    </h3>
  </div><!-- end post-it-offcanvas -->
  <div class="row">
    <div class="col-sm-8">
      <?php if( have_posts()): while( have_posts()): the_post(); ?>
        <div class="dotted-box clearfix">
          <article <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            <p class="post-credits">
              <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
              By <?php the_author(); ?> 
              on <?php echo the_time('l, F jS, Y') ?>
              in <?php the_category( ', ' ); ?>, 
              <a href="<?php comments_link() ?>"><?php comments_number(); ?></a>
            </p>
            <div class="hr"></div>
            <p><?php the_content(); ?></p>
            <div class="hr"></div>
            <?php comments_template(); ?>
          </article>
        </div><!-- end dotted-box -->

      <?php endwhile; else: ?>
        <p><?php _e('Sorry, no pages found.', 'wpbootstrap') ?></p>
      <?php endif; ?>
    </div><!-- end col-sm-8 -->

    <div id="sidebar" class="col-sm-4 sidebar sidebar-offcanvas">
      <div class="dotted-box">
        <?php if( get_previous_post_link()): ?>
          <h2>Previous post:</h2>
          <div class="hr"></div><br>
          <p><?php previous_post_link('%link'); ?></p>
        <?php endif; ?>

        <?php if( get_next_post_link()): ?>
          <h2>Next post:</h2>
          <div class="hr"></div><br>
          <p><?php next_post_link('%link'); ?></p>
        <?php endif; ?>
      </div>
      <?php get_sidebar( 'blog' ); ?>
    </div><!-- end col-sm-4 -->
        
        
    </div><!-- end col-md-10 -->
  </div><!-- end row-fluid -->
</div><!-- end container-fluid -->

<?php get_footer(); ?>