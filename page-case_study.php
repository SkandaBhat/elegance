<?php
/**
* Template Name: Case Study
 */

get_header(); ?>
<div class="case-study-section">
  <div class="position-relative banner-section">
    <!-- <?php if ( get_field( 'banner' ) ) : ?>
      <img src="<?php the_field( 'banner' ); ?>" />
    <?php endif ?> -->
    <div class="container overflow-hidden">
      <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">
          <article>
            <div>
              <div class="heading">
                <h1><?php the_field( 'heading' ); ?></h1>
              </div>
            </div>
          </article>
        </main><!-- #main -->
      </section><!-- #primary -->
    </div>
    <img class="img green-circle-3" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" />
    <img class="img ochre-square-1" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_ochre_square.png" />
  </div>

    <section class="use-cases position-relative overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <h4 class="text-primary">Executive Summary</h4>
          <p><?php the_field( 'executive_summary' ); ?></p>
        </div>
      </div>
    </div>


    <!-- <img class="img green-circle-3" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" /> -->
  </section>

  <section class="use-cases position-relative overflow-hidden grey">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <h4 class="text-primary">The Challenge</h4>
          <p><?php the_field( 'the_challenge' ); ?></p>
        </div>
      </div>
    </div>
    <!-- <img class="img green-circle-3" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" /> -->
  </section>

  <section class="use-cases position-relative overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <h4 class="text-primary">Our Approach</h4>
            <p><?php the_field( 'our_approach' ); ?></p>
            <p><?php the_field( 'we_helped_by_label' ); ?></p>
            <?php $we_helped_by_checked_values = get_field( 'we_helped_by' ); ?>
            <?php if ( $we_helped_by_checked_values ) : ?>
              <ul>
                <?php foreach ( $we_helped_by_checked_values as $we_helped_by_value ): ?>
                  <li><?php echo ( $we_helped_by_value ); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
            <p><?php the_field( 'we_helped_by_ending' ); ?></p>
            <?php if ( get_field( 'image' ) ) : ?>
              <img src="<?php the_field( 'image' ); ?>" />
            <?php endif ?>
        </div>
      </div>
    </div>
    <!-- <img class="img green-circle-2" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" /> -->
    <img class="img green-circle-features" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_semi.png" />
    <!-- <img class="img green-semi" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_semi.png" /> -->
  </section>

  <section class="use-cases position-relative overflow-hidden grey">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-lg-12">
          <h4 class="text-primary">Results</h4>
          <p><?php the_field( 'results' ); ?></p>
          <?php $results_list_checked_values = get_field( 'results_list' ); ?>
          <?php if ( $results_list_checked_values ) : ?>
            <ul>
              <?php foreach ( $results_list_checked_values as $results_list_value ): ?>
                <li><?php echo esc_html( $results_list_value ); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- <img class="img green-circle-3" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" /> -->
  </section>
  </div>
<?php
get_footer();
