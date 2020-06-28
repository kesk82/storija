<?php
/**
* Template Name: Poslednje Vijesti
*
* @package WordPress
* @subpackage Storija
*/

$template_dir;

$template_dir = get_theme_root_uri();

$current_page = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;


?>
<?php get_header(); ?>

<!-- Content -->
<section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- post content -->
                    <div class="content col-lg-9">
                        <!-- Page title -->
                        <div class="page-title">
                            <h1>Blog Masonry - Sidebar</h1>
                            <div class="breadcrumb float-left">
                                <ul>
                                    <li><a href="#">Home</a>
                                    </li>
                                    <li><a href="#">Blog</a>
                                    </li>
                                    <li class="active"><a href="#">Sidebar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end: Page title -->

                        <!-- Blog -->
                        <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">
                        
                        <?php

                        $args = array(
                          'post_type' => 'post',
                          'post_status' => 'publish',
                          'posts_per_page' => 5,
                          'paged' => $current_page
                        );
                        wp_reset_query();
                        $arr_posts = new WP_Query( $args );

                        if ( $arr_posts->have_posts() ) :

                          while ( $arr_posts->have_posts() ) :
                              $arr_posts->the_post();
                              $post_category = skke_get_cat_obj();

                              $post_format = get_post_format();

                              if ($post_format === 'video') { ?>

                              <!-- Post item YouTube-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-video">
                                        <iframe width="560" height="320" src="https://www.youtube.com/embed/<?php echo get_field('yt_video'); ?>" frameborder="0" allowfullscreen></iframe>
                                        <span class="post-meta-category"><a href="<?php echo get_category_link($post_category); ?>"><?php echo $post_category->name; ?></a></span>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i><?php echo get_comments_number() . " komentara"; ?></a></span>
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="item-link">Read More </a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item YouTube-->

                              <?php }

                              elseif ($post_format === 'audio') { ?>

                              <!-- Post item HTML5 Audio-->
                            <div class="post-item border">
                                <div class="post-item-wrap">
                                    <div class="post-audio">
                                        <a href="#">
                                            <img alt="" src="images/blog/audio-bg.jpg">
                                        </a>
                                        <span class="post-meta-category"><a href="">Audio</a></span>
                                        <audio class="video-js vjs-default-skin" controls preload="false" data-setup="{}">
                                            <source src="audio/beautiful-optimist.mp3" type="audio/mp3" />
                                        </audio>
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                        <h2><a href="#">Self Hosted HTML5 Audio (mp3) with image cover</a></h2>
                                        <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ac sagittis ante posuere ac ligula pharetra laoreet.</p>
                                        <a href="#" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->

                              <?php } else { ?>

                              <!-- Post item-->
                              <div class="post-item border">
                                  <div class="post-item-wrap">
                                      <div class="post-image">
                                          <a href="<?php the_permalink();  ?>">
                                              <img alt="" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'skke-video-thumb'); ?>">
                                          </a>
                                          <span class="post-meta-category"><a href="<?php echo get_category_link($post_category); ?>"><?php echo $post_category->name; ?></a></span>
                                      </div>
                                      <div class="post-item-description">
                                          <span class="post-meta-date"><i class="fa fa-calendar-o"></i><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></span>
                                          <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i><?php echo get_comments_number() . " komentara"; ?></a></span>
                                          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                                              </a></h2>
                                              <?php the_excerpt(); ?>
                                          <a href="<?php the_permalink(); ?>" class="item-link">Read More <i class="icon-chevron-right"></i></a>
                                      </div>
                                  </div>
                              </div>
                              <!-- end: Post item-->


                              <?php }
                          endwhile;
                        endif;

                        ?>



                        </div>
                        <!-- end: Blog -->
                        <?php
                        $total_pages = $arr_posts->max_num_pages;

                        if ($total_pages > 1) { ?>
                        <!-- Pagination -->
                        <?php
                        $pagination_array = paginate_links(array(
                          'current' => $current_page,
                          'total' => $total_pages,
                          'type' => 'list', //default it will return anchor
                          'prev_text'    => '<i class="fa fa-angle-left"></i>',
                          'next_text'    => '<i class="fa fa-angle-right"></i>',
                          'type' => 'array'
                        ));
                        ?>
                        <ul class="pagination"><?php
                        foreach ($pagination_array as $pagination_item) {
                          echo '<li class="page-item' . ((strpos( $pagination_item , 'current' ) > 0) ? ' active' : '') . '">' . "\n";
                          echo preg_replace('/class="[^"]+"/', 'class="page-link"', $pagination_item, 1) . "\n";
                          echo '</li>' . "\n";
                        }
                        ?></ul>
                        <!--
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item active"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul> -->
                        <!-- end: Pagination -->
                        <?php } ?>
                    </div>
                    <!-- end: post content -->
                    <!-- Sidebar-->
                    <div class="sidebar sticky-sidebar col-lg-3">
                        <?php get_template_part( 'sidebar', 'tabs' ); ?>
                        <!-- Twitter widget -->
                        <div class="widget widget-tweeter" data-username="envato" data-limit="2">
                            <h4 class="widget-title">Recent Tweets</h4>
                        </div>
                        <!-- end: Twitter widget-->
                        <!--widget tags -->
                        <div class="widget  widget-tags">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tags">
                                <a href="#">Design</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Digital</a>
                                <a href="#">Branding</a>
                                <a href="#">HTML</a>
                                <a href="#">Clean</a>
                                <a href="#">Peace</a>
                                <a href="#">Love</a>
                                <a href="#">CSS3</a>
                                <a href="#">jQuery</a>
                            </div>
                        </div>
                        <!--end: widget tags -->
                        <!--widget newsletter-->
                        <div class="widget  widget-newsletter">
                            <form class="widget-subscribe-form" novalidate action="include/subscribe-form.php" role="form" method="post">
                                <h4 class="widget-title">Newsletter</h4>
                                <small>Stay informed on our latest news!</small>
                                <div class="input-group">
                                    <input type="email" required name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                    <span class="input-group-btn">
                                        <button type="submit" id="widget-subscribe-submit-button" class="btn"><i class="fa fa-paper-plane"></i></button>
                                    </span> </div>
                            </form>
                        </div>
                        <!--end: widget newsletter-->
                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section> <!-- end: Content -->

<?php get_footer(); ?>