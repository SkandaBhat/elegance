<?php
/**
* Template Name: Use Case
 */

get_header(); ?>

  <div class="position-relative banner-section" style="background-image: url(<?php the_field( 'banner' ); ?>)">
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
  </div>

    <section class="use-cases position-relative overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h5 class="text-primary"><?php the_field( 'tagline' ); ?></h5>
          <p><?php the_field( 'main_paragraph_1' ); ?></p>
        </div>
      </div>
    </div>
    <!-- <img class="img green-circle-3" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" /> -->
  </section>

  <section class="use-cases position-relative overflow-hidden grey">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h5 class="text-primary"><?php the_field( 'jiffy_helps_by' ); ?></h5>
          <?php $benefit_list_checked_values = get_field( 'benefit_list' ); ?>
          <?php if ( $benefit_list_checked_values ) : ?>
            <ul>
              <?php foreach ( $benefit_list_checked_values as $benefit_list_value ): ?>
                <li><?php echo esc_html( $benefit_list_value ); ?></li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <?php if ( get_field( 'workflow_image' ) ) : ?>
            <img src="<?php the_field( 'workflow_image' ); ?>" />
          <?php endif ?>
        </div>
      </div>
    </div>
    <!-- <img class="img green-circle-3" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" /> -->
  </section>

  <section class="use-cases position-relative overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h4 class="text-primary"><?php the_field( 'impact_label' ); ?></h4>
            <p><?php the_field( 'impact_content' ); ?></p>
            <div class="row stat">
            <div class="col-sm-12 col-md-4">
              <p class="title"><?php the_field( 'impact_1_metric' ); ?></p>
              <p class="subtitle"><?php the_field( 'impact_1_text' ); ?></p>
            </div>
            <div class="col-sm-12 col-md-4">
              <p class="title"><?php the_field( 'impact_2_metric' ); ?></p>
              <p class="subtitle"><?php the_field( 'impact_2_text' ); ?></p>
            </div>
            <div class="col-sm-12 col-md-4">
              <p class="title"><?php the_field( 'impact_3_metric' ); ?></p>
              <p class="subtitle"><?php the_field( 'impact_3_text' ); ?></p>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- <img class="img green-semi" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_semi.png" /> -->
  </section>
<?php
get_footer();
