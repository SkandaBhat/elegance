<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
  <footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
  		<div class="container pt-6 pb-6 separator">
        <div class="row">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-md-4 col-sm-12 col-xs-12 mobile">
                <div class="row flags">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-67-1.png">
                    <p>+44 203 500 2738</p>
                  </div>
                  <div style="clear: both;"></div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-68.png">
                    <p>+61 260 642035</p>
                  </div>
                  <div style="clear: both;"></div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-69.png">
                    <p>+65 315 82890</p>
                  </div>
                  <div style="clear: both;"></div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-67.png" style="margin-bottom: 12px">
                <p>691 S. Milpitas Blvd.<br /> Suite 217<br/> Milpitas, CA 95035, USA <br />+1 6466520764</p>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-66.png" style="margin-bottom: 12px">
                <p>1142, 6th Main<br > Sector 7, HSR Layout<br/> Bangalore 560102, India <br />+91 804 170 0051</p>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="row flags smaller">
                  <div class="col-md-12 col-sm-4 col-xs-4">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-67-1.png">
                    <p>+44 203 500 2738</p>
                  </div>
                  <div class="col-md-12 col-sm-4 col-xs-4">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-68.png">
                    <p>+61 260 642035</p>
                  </div>
                  <div class="col-md-12 col-sm-4 col-xs-4">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-69.png">
                    <p>+65 315 82890</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="row justify-content-between main-card-row">
              <div class="card main-card card-automate">
                <img class="img" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/automate_icon.png" />
                <h2>JIFFY.ai Automate</h2>
              </div>
              <div class="card main-card card-assure">
                <img class="img" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/assure_icon.png" />
                <h2>JIFFY.ai Assure</h2>
              </div>
              <div class="card main-card card-innovate">
                <img class="img" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/innovate_icon.png" />
                <h2>JIFFY.ai Innovate</h2>
              </div>
            </div>
          </div>
        </div>
    </div>
		<div class="container pt-3 pb-3">

            <div class="social-media">
              <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/image-18.png">
              <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/image-15.png">
              <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/image-16.png">
              <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/image-17.png">
            </div>

            <div class="site-info">
              Copyright &copy; <?php echo date('Y'); ?> Paanini Inc. All Rights Reserved.
                <!-- <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><?php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a> -->

            </div><!-- close .site-info -->

		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

        <script>
          jQuery(document).ready(function () {
            jQuery(document).on("scroll", function(){
              if
                (jQuery(document).scrollTop() > 86){
                jQuery("#masthead").addClass("border-shadow");
              }
              else
              {
                jQuery("#masthead").removeClass("border-shadow");
              }
            });
          });
        </script>

<?php wp_footer(); ?>
</body>
</html>
