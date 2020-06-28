<?php
/**
* Template Name: Home Page
*
* @package WordPress
* @subpackage Storija
*/

$template_dir;

$template_dir = get_theme_root_uri();

?>
<?php get_header(); ?>

        <!-- NEWS GRID -->
        <section class="no-padding">
            <div class="grid-articles">
            <?php 

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'biznis',
    'posts_per_page' => 5,
);
wp_reset_query();
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
 
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <article class="post-entry">
            <a href="<?php the_permalink(); ?>" class="post-image">            
            <img src="<?=get_the_post_thumbnail_url(get_the_ID(), 'news-grid-thumb')?>" alt="">
</a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta">
                    <div class="post-entry-meta-title">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                </div>
            </div>
        </article>
        <?php
    endwhile;
endif;

?>
            </div>
        </section>
        <!-- end: NEWS GRID -->

        <!-- NEWS TICKER -->
        <div class="news-ticker">
            <div class="news-ticker-title">
                <h4>Posao u Njemackoj</h4>
            </div>
            <div class="carousel news-ticker-content" data-margin="40" data-items="4" data-autoplay="true" data-autoplay="3000" data-loop="true" data-arrows="false" data-dots="false" data-auto-width="true">
            <?php 

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'posao-u-njemackoj',
    'posts_per_page' => 15,
);
$arr_posts = new WP_Query( $args );
 
if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php
    endwhile;
endif;
?>
            </div>
        </div>
        <!-- end: NEWS TICKER -->
        <!-- HIGHLIGHTS -->
        <section class="p-t-40 p-b-40">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 d-flex">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-3">
                                <div class="heading-text heading-line text-left">
                                    <h4>Region</h4>
                                </div>
                                <div class="post-thumbnail-list">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'region',
                                    'posts_per_page' => 5,
                                );
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                                <div class="marketing-box">REKLAMA</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="heading-text heading-line text-left">
                                    <h4>Prica dana</h4>
                                </div>
                                <div class="post-thumbnail">
                                    <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'prica-dana',
                                    'posts_per_page' => 1
                                );
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url(get_the_ID(), 'storia-thumb-s')?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="heading-text heading-line text-left">
                                    <h4>Europa</h4>
                                </div>
                                <div class="post-thumbnail-list">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'europa',
                                    'posts_per_page' => 5,
                                );
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                                <div class="marketing-box">REKLAMA</div>
                            </div>
                            <div class="col-lg-3">
                                <div class="heading-text heading-line text-left">
                                    <h4>Sport</h4>
                                </div>
                                <div class="post-thumbnail-list">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'sport',
                                    'posts_per_page' => 5,
                                );
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                                <div class="marketing-box">REKLAMA</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- end: HIGHLIGHTS-->
<!-- VIDEO NEWS -->
<div class="portfolio-3-columns">
    <?php

    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'tax_query' => array(
            array(                
                'taxonomy' => 'post_format',
                'field' => 'slug',
                'terms' => array( 
                    'post-format-video'
                ),
                'operator' => 'IN'
            )
        )
    );
    wp_reset_query();
    $arr_posts = new WP_Query( $args );

    if ( $arr_posts->have_posts() ) :

        while ( $arr_posts->have_posts() ) :
            $arr_posts->the_post();
            ?>
                <!-- portfolio item -->
                <div class="portfolio-item">
                    <div class="portfolio-item-wrap">
                        <div class="portfolio-image">
                            <a href="#"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'video-news-thumb'); ?>" alt=""></a>
                        </div>
                        <div class="portfolio-description">
                            <a title="Paper Pouch!" data-lightbox="iframe" href="https://www.youtube.com/watch?v=<?php echo get_field('yt_video'); ?>"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>
            <?php
        endwhile;
    endif;
    ?>
</div>
<!-- end: VIDEO NEWS-->
        <!-- CATEGORY SAMPLE -->
        <section class="p-t-40 p-b-40">
            <div class="container">
                <div class="heading-text heading-line">
                    <h4>Njemacka</h4>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                <img alt="" src="<?=$template_dir?>/storija/assets/images/news/highlights/1-large.jpg">
                                <div class="post-thumbnail-content">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'region',
                                    'posts_per_page' => 1,
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="post-thumbnail-list">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'njemacka',
                                    'posts_per_page' => 5,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>

                                </div>
                                <div class="marketing-box">REKLAMA</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="post-thumbnail-list">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'region',
                                    'posts_per_page' => 5,
                                    'offset' => 6
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                                <div class="marketing-box">REKLAMA</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- end: CATEGORY SAMPLE -->
        <!-- BOXES -->
        <section class="p-t-60 p-b-40">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4">
                        <div class="heading-text heading-line">
                            <h4>Lifestyle</h4>
                        </div>
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'lifestyle',
                                    'posts_per_page' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                <div class="post-thumbnail-content">
                                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                        <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'lifestyle',
                                    'posts_per_page' => 3,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                        </div>
                        </div>

                    <div class="col-lg-4">
                        <div class="heading-text heading-line">
                            <h4>Tehnologija</h4>
                        </div>
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'tehnologija',
                                    'posts_per_page' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                <div class="post-thumbnail-content">
                                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                        <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'tehnologija',
                                    'posts_per_page' => 3,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                        </div>
                        </div>
                    <div class="col-lg-4">
                        <div class="heading-text heading-line">
                            <h4>Auto</h4>
                        </div>
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'auto',
                                    'posts_per_page' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                <div class="post-thumbnail-content">
                                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                        <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'auto',
                                    'posts_per_page' => 3,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
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
        </section>
        <!-- end: BOXES -->
        <!-- INSTAGRAM -->
         <!-- Gallery -->
         <div class="heading-text heading-line text-center">
            <h4>Instagram</h4>
        </div>
         <div class="grid-layout grid-5-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/1.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/1.jpg"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/2.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/2.jpg"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/3.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/3.jpg"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/4.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/4.jpg"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/5.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/5.jpg"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/6.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/6.jpg"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/6.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/6.jpg"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/6.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/6.jpg"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/6.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/6.jpg"></a>
            </div>
            <div class="grid-item">
                <a class="image-hover-zoom" href="<?=$template_dir?>/storija/assets/images/gallery/6.jpg" data-lightbox="gallery-image"><img src="<?=$template_dir?>/storija/assets/images/gallery/6.jpg"></a>
            </div>
        </div>
        <!-- end: INSTAGRAM -->

        <!-- ADVERTISEMENT -->
        <section class="p-t-20 p-b-40">
            <div class="container">
                <div class="marketing-box">REKLAMA</div>
            </div>
        </section>
        <!-- end: ADVERTISEMENT -->

        <!-- CATEGORIES -->
        <section class="p-t-60 p-b-40">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4">
                        <div class="heading-text heading-line">
                            <h4>Biznis</h4>
                        </div>
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'biznis',
                                    'posts_per_page' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                <div class="post-thumbnail-content">
                                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                        <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'biznis',
                                    'posts_per_page' => 3,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                        </div>
                        </div>

                    <div class="col-lg-4">
                        <div class="heading-text heading-line">
                            <h4>Politika</h4>
                        </div>
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'politika',
                                    'posts_per_page' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                <div class="post-thumbnail-content">
                                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                        <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'politika',
                                    'posts_per_page' => 3,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                        </div>
                        </div>
                    <div class="col-lg-4">
                        <div class="heading-text heading-line">
                            <h4>Crna hronika</h4>
                        </div>
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'crna-hronika',
                                    'posts_per_page' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                <div class="post-thumbnail-content">
                                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                        <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'crna-hronika',
                                    'posts_per_page' => 3,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
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
        </section>

        <!-- ADVERTISEMENT -->
        <section class="p-t-0 p-b-40">
            <div class="container">
                <div class="marketing-box">REKLAMA</div>
            </div>
        </section>
        <!-- end: ADVERTISEMENT -->

        <!-- CATEGORIES -->
        <section class="p-t-60 p-b-40">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4">
                        <div class="heading-text heading-line">
                            <h4>Hrana</h4>
                        </div>
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'hrana',
                                    'posts_per_page' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                <div class="post-thumbnail-content">
                                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                        <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'hrana',
                                    'posts_per_page' => 3,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                        </div>
                        </div>

                    <div class="col-lg-4">
                        <div class="heading-text heading-line">
                            <h4>Zabava</h4>
                        </div>
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'zabava',
                                    'posts_per_page' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                <div class="post-thumbnail-content">
                                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                        <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'zabava',
                                    'posts_per_page' => 3,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
                                                </div>
                                            </div>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                        </div>
                        </div>
                    <div class="col-lg-4">
                        <div class="heading-text heading-line">
                            <h4>Kultura</h4>
                        </div>
                        <div class="post-thumbnail">
                            <div class="post-thumbnail-entry">
                                    <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'kultura',
                                    'posts_per_page' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                <div class="post-thumbnail-content">
                                    <span class="post-date"><i class="far fa-clock"></i> <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo skke_print_age(get_post_time("U", true)); ?></time></span>
                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
                                    <?php the_excerpt(); ?>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-thumbnail-list">
                        <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'category_name' => 'kultura',
                                    'posts_per_page' => 3,
                                    'offset' => 1
                                );
                                wp_reset_query();
                                $arr_posts = new WP_Query( $args );
                                
                                if ( $arr_posts->have_posts() ) :
                                
                                    while ( $arr_posts->have_posts() ) :
                                        $arr_posts->the_post();
                                        ?>
                                            <div class="post-thumbnail-entry">
                                            <img alt="" src="<?=get_the_post_thumbnail_url()?>">
                                                <div class="post-thumbnail-content">
                                                    <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
                                                    <?php the_excerpt(); ?>
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
        </section>
        <!-- end: CATEGORIES -->

        <!-- CALL TO ACTION 
        <div class="call-to-action call-to-action-colored background-colored m-b-0">
            <div class="container">
                <div class="col-lg-10">
                    <h3>Ready to purchase POLO Template?</h3>
                    <p>This is a simple hero unit, a simple call-to-action-style component for calling extra attention to featured content.</p>
                </div>
                <div class="col-lg-2"> <a href="https://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923" class="btn btn-light btn-outline">Purchase</a> </div>
            </div>
        </div>
         END: CALL TO ACTION -->
        <?php get_footer(); ?>