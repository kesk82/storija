<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Storija
 */

get_header();
?>
		<!-- Page Content -->
<section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    <div class="content col-lg-9">
                        <!-- Blog -->
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                        </a>
									</div>
                                    <?php if (have_posts()) : while (have_posts()) : the_post();
                                        /* Update post viewer counter: */
                                        skke_set_post_view();
                                    ?>
                                    <div class="post-item-description">
                                        <h1><?php the_title() ?></h1>
                                        <div class="post-meta">
											<span class="post-meta-date"><i class="fa fa-calendar-o"></i>
												<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
											</span>
                                            <span class="post-meta-category"><a href=""><i class="fa fa-tag"></i><?php the_tags(); ?></a></span>
										</div>

										<?php the_content(); ?>

										<?php endwhile; ?>
										<?php endif; ?>
										<?php the_post(); ?>
                                    </div>
                                    <div class="post-tags">
									<?php
									$before = '';
									$seperator = ' '; // blank instead of comma
									$after = '';

									the_tags( $before, $seperator, $after );
									?>
									</div>
                                    <div class="post-navigation">
                                        <?php

                                            $post_cat_obj = skke_get_cat_obj();

                                            $cat_url = "";

                                            if (isset($post_cat_obj->slug)) {
                                                $cat_url = get_category_link( $post_cat_obj );
                                            }
                                        
                                            $prev_post = get_adjacent_post(true, 'istaknuto', true);
                                            $next_post = get_adjacent_post(true, 'istaknuto', false);

                                            if ($prev_post) {
                                        ?>
                                        <a href="<?php echo get_the_permalink($prev_post->ID); ?>" class="post-prev">
                                            <div class="post-prev-title"><span>Previous Post</span><?php echo get_the_title($prev_post->ID); ?></div>
                                            </a> <?php } ?>
                                        <a href="<?php echo $cat_url; ?>" class="post-all">
                                            <i class="icon-grid"> </i>
                                        </a>
                                        <?php if ($next_post) { ?>
                                        <a href="<?php echo get_the_permalink($next_post->ID); ?>" class="post-next">
                                            <div class="post-next-title"><span>Next Post</span><?php echo get_the_title($next_post->ID); ?></div>
                                        </a><?php } ?>
                                    </div>
                                    <!-- Comments -->
                                    <?php
                                    // If comments are open or we have at least one comment, load up the comment template.
                                    if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                    endif;
                                    ?>
                                    <!-- end: Comments -->
                                </div>
                            </div>
                            <!-- end: Post single item-->
                        </div>
                    </div>
                    <!-- end: content -->
                    <!-- Sidebar-->
                    <div class="sidebar sticky-sidebar col-lg-3">
                        <!--widget newsletter-->
                        <div class="widget  widget-newsletter">
                            <form id="widget-search-form-sidebar" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
						<div class="input-group">
						  <input type="text" aria-required="true" name="s" class="form-control widget-search-form" placeholder="Search for pages...">
						  <div class="input-group-append">
							<button class="btn" type="submit"><i class="fa fa-search"></i></button>
						  </div>
						</div>
					</form></div>
                        <!--end: widget newsletter-->
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
                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Page Content -->
<?php
get_footer();
