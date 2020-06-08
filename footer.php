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
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="row">
              <div class="col-lg-4 col-sm-12 col-xs-12 mobile">
                <div class="row flags">
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-67-1.png">
                    <p>+44 203 500 2738</p>
                  </div>
                  <div style="clear: both;"></div>
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-68.png">
                    <p>+61 260 642035</p>
                  </div>
                  <div style="clear: both;"></div>
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-69.png">
                    <p>+65 315 82890</p>
                  </div>
                  <div style="clear: both;"></div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 col-xs-6">
                <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-67.png" style="margin-bottom: 12px">
                <p>691 S. Milpitas Blvd.<br /> Suite 217<br/> Milpitas, CA 95035, USA <br />+1 6466520764</p>
              </div>
              <div class="col-lg-4 col-sm-6 col-xs-6">
                <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-66.png" style="margin-bottom: 12px">
                <p>1142, 6th Main<br > Sector 7, HSR Layout<br/> Bangalore 560102, India <br />+91 804 170 0051</p>
              </div>
              <div class="col-lg-4 col-sm-6 col-xs-6">
                <div class="row flags smaller">
                  <div class="col-lg-12 col-sm-4 col-xs-4">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-67-1.png">
                    <p>+44 203 500 2738</p>
                  </div>
                  <div class="col-lg-12 col-sm-4 col-xs-4">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-68.png">
                    <p>+61 260 642035</p>
                  </div>
                  <div class="col-lg-12 col-sm-4 col-xs-4">
                    <img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/Rectangle-69.png">
                    <p>+65 315 82890</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="row justify-content-between main-card-row">
              <a href="/automate" class="card main-card card-automate">
                <img class="img" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/automate_icon.png" />
                <h2>JIFFY.ai Automate</h2>
              </a>
              <a href="/assure" class="card main-card card-assure">
                <img class="img" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/assure_icon.png" />
                <h2>JIFFY.ai Assure</h2>
              </a>
              <a href="/innovate" class="card main-card card-innovate">
                <img class="img" src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/05/innovate_icon.png" />
                <h2>JIFFY.ai Innovate</h2>
              </a>
            </div>
          </div>
        </div>
    </div>
		<div class="container pt-3 pb-3">

            <div class="social-media">
              <a target="_blank" href="https://www.instagram.com/jiffy.ai/"><img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/image-18.png"></a>
              <a target="_blank" href="https://www.linkedin.com/company/jiffyai/"><img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/image-15.png"></a>
              <a target="_blank" href="https://www.facebook.com/jiffyai/"><img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/image-16.png"></a>
              <a target="_blank" href="https://twitter.com/Jiffyai"><img src="<?php echo wp_get_upload_dir()['baseurl'] ?>/2020/06/image-17.png"></a>
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
              jQuery('.zoom-image')
                .wrap('<span style="display:inline-block"></span>')
                .css('display', 'block')
                .parent()
                .zoom();
          });
        </script>

          <script>
  /*!
	Zoom 1.7.21
	license: MIT
	http://www.jacklmoore.com/zoom
*/
(function(o){var t={url:!1,callback:!1,target:!1,duration:120,on:"mouseover",touch:!0,onZoomIn:!1,onZoomOut:!1,magnify:1};o.zoom=function(t,n,e,i){var u,c,a,r,m,l,s,f=o(t),h=f.css("position"),d=o(n);return t.style.position=/(absolute|fixed)/.test(h)?h:"relative",t.style.overflow="hidden",e.style.width=e.style.height="",o(e).addClass("zoomImg").css({position:"absolute",top:0,left:0,opacity:0,width:e.width*i,height:e.height*i,border:"none",maxWidth:"none",maxHeight:"none"}).appendTo(t),{init:function(){c=f.outerWidth(),u=f.outerHeight(),n===t?(r=c,a=u):(r=d.outerWidth(),a=d.outerHeight()),m=(e.width-c)/r,l=(e.height-u)/a,s=d.offset()},move:function(o){var t=o.pageX-s.left,n=o.pageY-s.top;n=Math.max(Math.min(n,a),0),t=Math.max(Math.min(t,r),0),e.style.left=t*-m+"px",e.style.top=n*-l+"px"}}},o.fn.zoom=function(n){return this.each(function(){var e=o.extend({},t,n||{}),i=e.target&&o(e.target)[0]||this,u=this,c=o(u),a=document.createElement("img"),r=o(a),m="mousemove.zoom",l=!1,s=!1;if(!e.url){var f=u.querySelector("img");if(f&&(e.url=f.getAttribute("data-src")||f.currentSrc||f.src),!e.url)return}c.one("zoom.destroy",function(o,t){c.off(".zoom"),i.style.position=o,i.style.overflow=t,a.onload=null,r.remove()}.bind(this,i.style.position,i.style.overflow)),a.onload=function(){function t(t){f.init(),f.move(t),r.stop().fadeTo(o.support.opacity?e.duration:0,1,o.isFunction(e.onZoomIn)?e.onZoomIn.call(a):!1)}function n(){r.stop().fadeTo(e.duration,0,o.isFunction(e.onZoomOut)?e.onZoomOut.call(a):!1)}var f=o.zoom(i,u,a,e.magnify);"grab"===e.on?c.on("mousedown.zoom",function(e){1===e.which&&(o(document).one("mouseup.zoom",function(){n(),o(document).off(m,f.move)}),t(e),o(document).on(m,f.move),e.preventDefault())}):"click"===e.on?c.on("click.zoom",function(e){return l?void 0:(l=!0,t(e),o(document).on(m,f.move),o(document).one("click.zoom",function(){n(),l=!1,o(document).off(m,f.move)}),!1)}):"toggle"===e.on?c.on("click.zoom",function(o){l?n():t(o),l=!l}):"mouseover"===e.on&&(f.init(),c.on("mouseenter.zoom",t).on("mouseleave.zoom",n).on(m,f.move)),e.touch&&c.on("touchstart.zoom",function(o){o.preventDefault(),s?(s=!1,n()):(s=!0,t(o.originalEvent.touches[0]||o.originalEvent.changedTouches[0]))}).on("touchmove.zoom",function(o){o.preventDefault(),f.move(o.originalEvent.touches[0]||o.originalEvent.changedTouches[0])}).on("touchend.zoom",function(o){o.preventDefault(),s&&(s=!1,n())}),o.isFunction(e.callback)&&e.callback.call(a)},a.setAttribute("role","presentation"),a.alt="",a.src=e.url})},o.fn.zoom.defaults=t})(window.jQuery);
  </script>



<?php wp_footer(); ?>
</body>
</html>
