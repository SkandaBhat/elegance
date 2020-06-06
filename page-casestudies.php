<?php
/**
* Template Name: CaseStudies
 */

get_header(); ?>
  <div class="position-relative hero">
    <div class="container">
      <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">
          <article>
            <div>
              <div class="heading">
                <h1>Case Studies</h1>
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
      <div class="row justify-content-between align-items-center">
        <div class="col-sm-12 col-md-12">
        <?php
        // the query
        $args = array(
            'post_type' => 'page',
            'posts_per_page' => -1,
            'meta_query' => array(
                array(
                    'key' => '_wp_page_template',
                    'value' => 'page-case_study.php'
                )
            )
        );
        $wpb_all_query = new WP_Query($args); ?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>
        <div class="row">
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="col-sm-12 col-md-4">
                  <div class="box">
                  <!-- <img src="<?php the_field( 'banner' ); ?>"> -->
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title(); ?>
                    </a>
                    <p><?php the_field( 'executive_summary' ); ?></p>
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
