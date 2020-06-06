<?php
/**
* Template Name: Blog
 */

get_header(); ?>
  <div class="position-relative hero">
    <div class="container">
      <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">
          <article>
            <div>
              <div class="heading">
                <h1>Blog Posts</h1>
              </div>
            </div>
          </article>
        </main><!-- #main -->
      </section><!-- #primary -->
    </div>
    <img class="img green-circle-1" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" />
    <img class="img ochre-square-1" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_ochre_square.png" />
  </div>


  <section class="transform bg-light">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
        <?php
        // the query
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>
        <div class="row">
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="col-sm-12 col-md-4">
                  <div class="box">
                  <?php if ( the_post_thumbnail_url() ): ?> <img src="<?php the_post_thumbnail_url(); ?>"> <?php endif; ?>
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                    <?php the_excerpt(); ?>
                  </div>
                </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
        </div>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
