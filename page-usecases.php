<?php
/**
* Template Name: UseCases
 */

get_header(); ?>
  <div class="position-relative hero">
    <div class="container">
      <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">
          <article>
            <div>
              <div class="heading">
                <h1>Blog</h1>
              </div>
            </div>
          </article>
        </main><!-- #main -->
      </section><!-- #primary -->
    </div>
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
                    'value' => 'page-use_case.php'
                )
            )
        );
        $wpb_all_query = new WP_Query($args); ?>
        <?php if ( $wpb_all_query->have_posts() ) : ?>
        <ul>
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
            <!-- end of the loop -->
        </ul>
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
