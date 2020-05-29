<?php
/**
* Template Name: Use Case
 */

get_header(); ?>
  <div class="position-relative">
    <div class="container overflow-hidden">
      <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">
          <article>
            <div>
              <div class="heading">
                <h1><?php the_field( 'heading' ); ?></h1>
              </div>
              <div class="subheading">
                <p><?php the_field( 'tagline' ); ?></p>
              </div>
              <button class="btn-primary primary-cta">REQUEST DEMO</button>
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
          <div class="text-center">
            <img class="img-fluid" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/use_case_1.png" />
          </div>
          <p><?php the_field( 'main_paragraph_1' ); ?></p>
          <p><?php the_field( 'main_paragraph_2' ); ?></p>
          <p><?php the_field( 'main_paragraph_3' ); ?></p>
        </div>
      </div>
    </div>
    <img class="img green-circle-3" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" />
  </section>

  <section class="case-studies position-relative overflow-hidden">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-sm-12 col-md-12">
          <h4 class="text-primary"><?php the_field( 'jiffy_helps_by' ); ?></h4>
            <p><?php the_field( 'benefit_list' ); ?></p>
        </div>
      </div>
    </div>
    <img class="img green-semi" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_semi.png" />
  </section>

  <section class="use-cases position-relative overflow-hidden">
    <div class="container">
      <h4 class="text-center text-primary"><?php the_field( 'impact_label' ); ?>
</h4>
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="text-center">
            <img class="img-fluid" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/use_case_1.png" />
          </div>
          <p><?php the_field( 'impact_content' ); ?></p>
        </div>
      </div>
    </div>
    <img class="img green-circle-3" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_circle.png" />
  </section>

<?php
get_footer();
