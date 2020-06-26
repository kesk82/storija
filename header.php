<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Storija
 */

$base_url = getBaseUrl();
function getBaseUrl() {
    $environment = 'stage';
    if ($environment === 'prod') {
        $base_url = 'https://www.storija.net/';
    } else {
        $base_url = 'http://localhost/storija/';
    }

    return $base_url;
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />    
	<meta name="author" content="Storija.net" />    
	<meta name="description" content="TODO">
    <link rel="icon" type="image/png" href="images/favicon.png">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title><?php wp_title(''); ?></title>
    <!-- Stylesheets & Fonts -->
    <link href="<?=$template_dir?>/storija/wp-content/themes/storija/plugins.css" rel="stylesheet">
    <link href="<?=$template_dir?>/storija/wp-content/themes/storija/style.css" rel="stylesheet">

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

</head>

<?php wp_body_open(); ?>

	<body>

    <!-- Body Inner -->
    <div class="body-inner">

        <!-- Header -->
        <!-- Top bar -->
        <div id="topbar" class="topbar-black topbar-fullwidth light d-none d-xl-block d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="top-menu">
                            <li><a href="#">Email: redakcija@storija.net</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-none d-sm-block">
                        <div class="social-icons social-icons-colored-hover">
                            <ul>
                                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-google"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fab fa-vimeo"></i></a></li>
                                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li class="social-dribbble"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li class="social-youtube"><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Top bar -->

        <!-- Navigation -->
        <header id="header" data-transparent="false" data-fullwidth="true" class="light submenu-light">
            <div class="header-inner">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="<?php echo $base_url; ?>">
                            <span class="logo-default">Storija</span>
                            <span class="logo-dark">Storija</span>
                        </a>
                    </div>
                    <!--End: Logo-->
                    <!-- Search -->
                    <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></a>
                        <form class="search-form" action="search-results-page.html" method="get">
                            <input class="form-control" name="q" type="text" placeholder="Type &amp; Search...">
                            <span class="text-muted">Start typing &amp; press "Enter" or "ESC" to close</span>
                        </form>
                    </div>
                    <!-- end: search -->
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
                            </li>
                            <li>
                                <div class="p-dropdown">
                                    <a href="#"><i class="icon-globe"></i><span>EN</span></a>
                                    <ul class="p-dropdown-content">
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">English</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <a class="lines-button x"><span class="lines"></span></a>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->
                    <!--Navigation-->
                    <div id="mainMenu" class="menu-creative">
                        <div class="container">
                            <nav>
                                <? 
                                $current_menu_css_class = 'class="current"';
                                ?>
                                <ul>
                                    <li <?php if ($men_poslednje_vijesti = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>poslednje-vijesti">Poslednje vijesti</a></li>
                                    <li <?php if ($men_europa = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>europa">Europa</a></li>
                                    <li <?php if ($men_njemacka = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>njemacka">Njemacka</a></li>
                                    <li <?php if ($men_svijet = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>svijet">Svijet</a></li>
                                    <li <?php if ($men_region = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>region">Region</a></li>
                                    <li <?php if ($men_politika = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>politika">Politika</a></li>
                                    <li <?php if ($men_sport = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>sport">Sport</a></li>
                                    <li <?php if ($men_poslovi_u_njemackoj = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>poslovi-u-njemackoj">Poslovi u njemackoj</a></li>
                                    <li <?php if ($men_lifestyle = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>lifestyle">Lifestyle</a></li>
                                    <li <?php if ($men_tehnologija = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>software-hardware">Software & Hardware</a></li>
                                    <li <?php if ($men_izdvojeno = true) { echo $current_menu_css_class; } ?>><a href="<?=$base_url?>izdvojeno">Izdvojeno</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Navigation-->
        <!-- end: Header -->
