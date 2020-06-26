<?php
/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Storija
 */

get_header();

$categories = get_the_category();


if ( ! empty( $categories ) ) {
    $category_name = $categories[0]->slug;
}
else {
    die(var_dump('no category.'));
}

?>
<!-- Content -->
<section id="page-content" class="sidebar-right">
            <div class="container">
            <div class="row">
            <div class="col">

            </div>
            </div>
                <div class="row">
                    <!-- post content -->
                    <div class="content col-lg-9">
                        <!-- Blog -->
                        <div id="blog" class="grid-layout post-thumbnails post-1-columns m-b-30" data-item="post-item">
                            <?php
                                // the query
                                $the_query = new WP_Query(array(
                                    'category_name' => $category_name,
                                    'post_status' => 'publish'
                                ));
                                ?>

                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                        <!-- Post item-->
                                        <div class="post-item">
                                            <div class="post-item-wrap">
                                                <div class="post-image">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                    </a>
                                                    <span class="post-meta-category"><a href="<?php the_permalink(); ?>">Lifestyle</a></span>
                                                </div>
                                                <div class="post-item-description">
                                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                                                        </a></h2>
                                                    <p><?php the_excerpt(); ?></p>
                                
                                                    <a href="<?php the_permalink(); ?>" class="item-link">Procitaj vise <i class="icon-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>

                                <?php else : ?>
                                    <p><?php __('No News'); ?></p>
                                <?php endif; ?>
                            <!-- end: Post item-->
                            
                        </div>
                        <!-- end: Blog -->
                        <!-- Load next portfolio items -->
                        <div id="pagination" class="infinite-scroll">
                            <a href="blog-left-image-infinite-scroll-2.html"></a>
                        </div>
                        <!-- end:Load next portfolio items -->
                    </div>
                    <!-- end: post content -->
                    <!-- Sidebar-->
                    <div class="sidebar sticky-sidebar col-lg-3">
                        <!--Tabs with Posts-->
                        <div class="widget ">
                            <h4 class="widget-title">Recent Posts</h4>
                            <div class="post-thumbnail-list">
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="images/blog/thumbnail/5.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">A true story, that never been told!</a>
                                        <span class="post-date"><i class="icon-clock"></i> 6m ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="images/blog/thumbnail/6.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Beautiful nature, and rare feathers!</a>
                                        <span class="post-date"><i class="icon-clock"></i> 24h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="images/blog/thumbnail/7.jpg">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Lorem ipsum dolor sit amet</a>
                                        <span class="post-date"><i class="icon-clock"></i> 11h ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End: Tabs with Posts-->
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