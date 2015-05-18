<?php get_header(); ?>

<div class="wrapper">
  <div class="container-fluid mt80">
    <div class="row">
      <div class="col-sm-8">
        <?php if( have_posts()): while( have_posts()): the_post(); ?>
          <article <?php post_class(); ?>>
            <h2 class="section-header"><?php the_title(); ?></h2>
            <div class="color-bar"></div>

            <div class="white">
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
            </div><!-- end white -->
            
            <h2 class="section-header mt60">Leave a reply</h2>
            <div class="color-bar"></div>
            <?php comments_template(); ?>
          </article>

        <?php endwhile; else: ?>
          <p><?php _e('Sorry, no pages found.', 'academic-portfolio') ?></p>
        <?php endif; ?>
        
      </div><!-- end col-sm-8 -->

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
      </div><!-- end col-sm-4 -->
    </div><!-- end row-fluid -->
  </div><!-- end container-fluid -->
</div><!-- end wrapper -->
<div class="push"></div>

<?php get_footer(); ?>