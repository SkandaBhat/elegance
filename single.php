<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<style>
#primary {
  margin-top: 84px;
}
</style>

	<section id="primary" class="content-area col-sm-12 col-lg-8 mx-auto">
		<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			    // the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

    </main><!-- #main -->

  </section><!-- #primary -->

    <img class="img green-circle-1" src="http://159.89.140.235/wp-content/uploads/2020/05/home_green_circle.png">
    <img class="img green-circle-features" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_semi.png" />

    <img class="img green-circle-1-2" src="http://159.89.140.235/wp-content/uploads/2020/05/home_green_circle.png">
    <img class="img green-circle-features-2" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/home_green_semi.png" />


    <img class="img green-circle-1-3" src="http://159.89.140.235/wp-content/uploads/2020/05/home_green_circle.png">

<?php
// get_sidebar();
get_footer();
