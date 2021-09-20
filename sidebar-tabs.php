                          <!--Tabs with Posts-->
                          <div class="widget ">
                            <div class="tabs">
                                <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular" aria-selected="true">Popularno</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="false">Istaknuto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="false">Poslednje</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tabs-posts-content">
                                    <div class="tab-pane fade show active" id="popular" role="tabpanel" aria-labelledby="popular-tab">
                                        <div class="post-thumbnail-list">

                                            <?php
                                            $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'meta_key' => 'post_views_count',
                                                'orderby' => 'meta_value_num',
                                                'posts_per_page' => 3
                                            );
                                            wp_reset_query();
                                            $arr_posts = new WP_Query( $args );
                                            
                                            if ( $arr_posts->have_posts() ) :
                                            
                                                while ( $arr_posts->have_posts() ) :
                                                    $arr_posts->the_post();
                                                    $post_cat_object = skke_get_cat_obj();
                                                    $post_cat = isset($post_cat_object->cat_name) ? $post_cat_object->cat_name : "";
                                                    ?>
                                                        <div class="post-thumbnail-entry">
                                                        <img alt="" src="<?=get_the_post_thumbnail_url(get_the_ID(), 'storia-thumb-xs')?>">
                                                            <div class="post-thumbnail-content">
                                                                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                                <span class="post-date"><i class="icon-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                                                <span class="post-category"><i class="fa fa-tag"></i> <?php echo $post_cat; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endwhile;
                                            endif;
                                            ?>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                                        <div class="post-thumbnail-list">

                                            <?php
                                            $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'category_name' => 'istaknuto',
                                                'posts_per_page' => 3
                                            );
                                            wp_reset_query();
                                            $arr_posts = new WP_Query( $args );
                                            
                                            if ( $arr_posts->have_posts() ) :
                                            
                                                while ( $arr_posts->have_posts() ) :
                                                    $arr_posts->the_post();
                                                    $post_cat_object = skke_get_cat_obj();
                                                    $post_cat = isset($post_cat_object->cat_name) ? $post_cat_object->cat_name : "";
                                                    ?>
                                                        <div class="post-thumbnail-entry">
                                                        <img alt="" src="<?=get_the_post_thumbnail_url(get_the_ID(), 'storia-thumb-xs')?>">
                                                            <div class="post-thumbnail-content">
                                                                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                                <span class="post-date"><i class="icon-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                                                <span class="post-category"><i class="fa fa-tag"></i> <?php echo $post_cat; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endwhile;
                                            endif;
                                            ?>
                                            

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="recent" role="tabpanel" aria-labelledby="recent-tab">
                                        <div class="post-thumbnail-list">

                                        <?php
                                            $args = array(
                                                'post_type' => 'post',
                                                'post_status' => 'publish',
                                                'posts_per_page' => 3
                                            );
                                            wp_reset_query();
                                            $arr_posts = new WP_Query( $args );
                                            
                                            if ( $arr_posts->have_posts() ) :
                                            
                                                while ( $arr_posts->have_posts() ) :
                                                    $arr_posts->the_post();
                                                    $post_cat_object = skke_get_cat_obj();
                                                    $post_cat = isset($post_cat_object->cat_name) ? $post_cat_object->cat_name : "";
                                                    ?>
                                                        <div class="post-thumbnail-entry">
                                                        <img alt="" src="<?=get_the_post_thumbnail_url(get_the_ID(), 'storia-thumb-xs')?>">
                                                            <div class="post-thumbnail-content">
                                                                <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                                <span class="post-date"><i class="icon-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                                                <span class="post-category"><i class="fa fa-tag"></i> <?php echo $post_cat; ?></span>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endwhile;
                                            endif;
                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End: Tabs with Posts-->