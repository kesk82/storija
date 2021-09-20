<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Storija
 */

get_header();

$current_page = $paged = isset($_GET['t_page']) ? abs(intval($_GET['t_page'])) : 1;
global $query_string;


/*
if ( ! empty( $categories ) ) {
    $category_name = $categories[0]->slug;
}
else {
    die(var_dump('no category.'));
}*/

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
																$query_args = array();
																wp_parse_str( $query_string, $query_args );
																$query_args['paged'] = $current_page;
																//$query_args['posts_per_page'] = 2;
                                $the_query = new WP_Query($query_args);
                                ?>

                                <?php if ($the_query->have_posts()) : ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                                    $post_cats = get_the_category();
                                    $post_cat = null;
                                    if (isset($post_cats[0]->cat_name)) {
                                        if ($post_cats[0]->slug === 'istaknuto') {
                                            $post_cat = isset($post_cats[1]->cat_name) ? $post_cats[1] : null;
                                        } else {
                                            $post_cat = $post_cats[0];
                                        }
                                    }
                                    
                                    ?>
                                        <!-- Post item-->
                                        <div class="post-item">
                                            <div class="post-item-wrap">
                                                <div class="post-image">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <img alt="" src="<?=get_the_post_thumbnail_url(get_the_ID(), 'storia-thumb-l')?>">
                                                    </a>
                                                    <span class="post-meta-category"><a href="<?php the_permalink(); ?>"><?php echo $post_cat !== null ?  get_field( "podnaslov", "category_" . $post_cat->term_id ) : ''; ?></a></span>
                                                </div>
                                                <div class="post-item-description">
                                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i><time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time></span>
                                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i><?php echo get_comments_number() . " komentara"; ?></a></span>
                                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                                                        </a></h2>
                                                    <?php the_excerpt(); ?>
                                
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
                        <?php
                        $total_pages = $the_query->max_num_pages;

                        if ($total_pages > 1) { ?>
                        <!-- Pagination -->
                        <?php
                        $pagination_array = paginate_links(array(
                          'base' => preg_replace('/\?.*/', '/', get_pagenum_link(1)) . '%_%',
                          'current' => isset($_GET['t_page']) ? abs(intval($_GET['t_page'])) : 1,
                          'format' => '?t_page=%#%',
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

<?php
get_footer();
