<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Storija
 */
$template_dir;

$template_dir = get_theme_root_uri();
?>

        <!-- Footer -->
        <footer id="footer">
            <div class="footer-content">
              <div class="container">
                <div class="row">
                  <div class="col-xl-2 col-lg-2 col-md-3">
                    <!-- Footer widget area 1 -->
                    <div class="widget">
                      <h4>Europa</h4>
                      <ul class="list">
                        <li><a href="#">Aktuelno</a></li>
                        <li><a href="#">Politika</a></li>
                        <li><a href="#">Crna hronika</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Dogadjaji</a></li>
                      </ul>
                    </div>
                    <!-- end: Footer widget area 1 -->
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-3">
                    <!-- Footer widget area 2 -->
                    <div class="widget">
                      <h4>Njemacka</h4>
                      <ul class="list">
                      <li><a href="#">Aktuelno</a></li>
                        <li><a href="#">Politika</a></li>
                        <li><a href="#">Crna hronika</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">Dogadjaji</a></li>
                      </ul>
                    </div>
                    <!-- end: Footer widget area 2 -->
                  </div>
      
                  <div class="col-xl-2 col-lg-2 col-md-3">
                    <!-- Footer widget area 3 -->
                    <div class="widget">
                      <h4>Crna hronika</h4>
                      <ul class="list">
                        <li><a href="#">Bosna i Hercegovina</a></li>
                        <li><a href="#">Hrvatska</a></li>
                        <li><a href="#">Srbija</a></li>
                        <li><a href="#">Europa</a></li>
                        <li><a href="#">Svijet</a></li>
                      </ul>
                    </div>
                    <!-- end: Footer widget area 3 -->
                  </div>
      
                  <div class="col-xl-2 col-lg-2 col-md-3">
                    <!-- Footer widget area 4 -->
                    <div class="widget">
                      <h4>Sport</h4>
                      <ul class="list">
                        <li><a href="<?php echo get_category_link(get_category_by_slug('fudbal')); ?>">Fudbal</a></li>
                        <li><a href="<?php echo get_category_link(get_category_by_slug('kosarka')); ?>">Kosarka</a></li>
                        <li><a href="<?php echo get_category_link(get_category_by_slug('rukomet')); ?>">Rukomet</a></li>
                        <li><a href="<?php echo get_category_link(get_category_by_slug('tenis')); ?>">Tenis</a></li>
                        <li><a href="<?php echo get_category_link(get_category_by_slug('e-sports')); ?>">E-Sportovi</a></li>
                      </ul>
                    </div>
                    <!-- end: Footer widget area 4 -->
                  </div>
      
                  <div class="col-xl-4 col-lg-4 col-md-12">
                    <!-- Footer widget area 5 -->
                    <div class="widget clearfix widget-newsletter">
                      <h4 class="widget-title"><i class="fa fa-envelope"></i> Uclanite se na storija.net besplatno.</h4>
                      <p>Clanovi dobijaju najnovije vijesti iz europe, svijeta i regiona putem email-a svako jutro u 10.</p>
                      <form class="widget-subscribe-form p-r-40" action="include/subscribe-form.php" role="form" method="post" novalidate="novalidate">
                        <div class="input-group">
                          <input aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email" type="email">
                          <span class="input-group-btn">
                            <button type="submit" id="widget-subscribe-submit-button" class="btn"><i class="fa fa-paper-plane"></i></button>
                          </span> </div>
                      </form>
                    </div>
                    <!-- end: Footer widget area 5 -->
                  </div>
                </div>
              </div>
            </div>
            <div class="copyright-content">
              <div class="container">
      
                <div class="row">
                  <div class="col-lg-6">
                    <!-- Social icons -->
                    <div class="social-icons social-icons-colored float-left">
                      <ul>
                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                        <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                      </ul>
                    </div>
                    <!-- end: Social icons -->
                  </div>
      
                  <div class="col-lg-6">
                    <div class="copyright-text text-center">©2020 Storija - Vijesti iz svijeta i regiona. Sva prava zadrzana.</div>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        <!-- end: Footer -->

    </div>
    <!-- end: Body Inner -->

    <!-- Scroll top -->
    <a id="scrollTop"><i class="icon-chevron-up"></i><i class="icon-chevron-up"></i></a>
    <!--Plugins-->
    <script src="<?=$template_dir?>/storija/js/jquery.js"></script>
    <script src="<?=$template_dir?>/storija/assets/plugins/infinite-scroll.min.js"></script>
    <script src="<?=$template_dir?>/storija/js/plugins.js"></script>

    <!--Template functions-->
    <script src="<?=$template_dir?>/storija/js/functions.js"></script>


	<?php wp_footer(); ?>
	
</body>

</html>
