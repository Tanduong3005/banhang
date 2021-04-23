<?php

use yii\helpers\Url;

$this->title = 'HomePage';
?>

<!-- Begin Main Header Area -->
<header class="main-header_area">
    <div class="transparent-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="transparent-header_nav position-relative">
                        <div class="header-logo_area">
                            <a href=<?= Url::home(); ?>>
                                <img src="./../images/kenne/logo/1.png" alt="Header Logo">
                            </a>
                        </div>
                        <div class="main-menu_area d-none d-lg-block">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul>
                                    <li class="dropdown-holder"><a href=<?= Url::home(); ?>>Home <!--<i
                                                    class="ion-chevron-down"></i>--> </a>
                                    </li>
                                    <li class="megamenu-holder position-static"><a href=<?= Url::toRoute(['/shop']); ?>>Shop</a>
                                    </li>
                                    <li><a href=<?= Url::toRoute(['/pages']) ?>>Pages</a>
                                    </li>
                                    <li><a href=<?= Url::toRoute(['/blog']) ?>>Blog</a>
                                    </li>
                                    <li><a href=<?= Url::toRoute(['/contact-us']) ?>>Contact Us</a></li>
                                    <li><a href=<?= Url::toRoute(['/about-us']) ?>>About Us</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right_area header-right_area-2">
                            <ul>
                                <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                        <i class="ion-android-menu"></i>
                                    </a>
                                </li>
                                <li class="minicart-wrap">
                                    <a href="#miniCart" class="minicart-btn toolbar-btn">
                                        <div class="minicart-count_area">
                                            <span class="item-count">03</span>
                                            <i class="ion-bag"></i>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#searchBar" class="search-btn toolbar-btn">
                                        <i class="ion-ios-search"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#offcanvasMenu"
                                       class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                        <i class="ion-android-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sticky-header_nav position-relative">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-2 col-sm-6">
                                <div class="header-logo_area">
                                    <a href=<?= Url::home() ?>>
                                        <img src="./../images/kenne/logo/1.png" alt="Header Logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 d-none d-lg-block position-static">
                                <div class="main-menu_area">
                                    <nav class="main-nav d-flex justify-content-center">
                                        <ul>
                                            <li class="dropdown-holder"><a href=<?= Url::home() ?>>Home </a>
                                            </li>
                                            <li class="megamenu-holder position-static"><a
                                                        href=<?= Url::toRoute(['/shop']) ?>>Shop </a>
                                            </li>
                                            <li><a href=<?= Url::toRoute(['/pages']) ?>>Pages </a>
                                            </li>
                                            <li><a href=<?= Url::toRoute(['/blog']) ?>>Blog </a>
                                            </li>
                                            <li><a href=<?= Url::toRoute(['/contact-us']) ?>>Contact Us</a></li>
                                            <li><a href=<?= Url::toRoute(['/about-us']) ?>>About Us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="header-right_area header-right_area-2">
                                    <ul>
                                        <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                            <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                        <li class="minicart-wrap">
                                            <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                <div class="minicart-count_area">
                                                    <span class="item-count">03</span>
                                                    <i class="ion-bag"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#searchBar" class="search-btn toolbar-btn">
                                                <i class="ion-ios-search"></i>
                                            </a>
                                        </li>
                                        <li class="d-none d-lg-inline-block">
                                            <a href="#offcanvasMenu" class="menu-btn toolbar-btn color--white">
                                                <i class="ion-android-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-minicart_wrapper" id="miniCart">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="minicart-content">
                <div class="minicart-heading">
                    <h4>Shopping Cart</h4>
                </div>
                <ul class="minicart-list">
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="assets/images/product/1-1.jpg" alt="Kenne's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Autem ipsa ad</a>
                            <span class="product-item_quantity">1 x $145.80</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="assets/images/product/2-1.jpg" alt="Kenne's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Tenetur illum
                                amet</a>
                            <span class="product-item_quantity">1 x $150.80</span>
                        </div>
                    </li>
                    <li class="minicart-product">
                        <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                        <div class="product-item_img">
                            <img src="assets/images/product/3-1.jpg" alt="Kenne's Product Image">
                        </div>
                        <div class="product-item_content">
                            <a class="product-item_title" href="shop-left-sidebar.html">Non doloremque
                                placeat</a>
                            <span class="product-item_quantity">1 x $165.80</span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="minicart-item_total">
                <span>Subtotal</span>
                <span class="ammount">$462.4‬0</span>
            </div>
            <div class="minicart-btn_area">
                <a href="cart.html" class="kenne-btn kenne-btn_fullwidth">Minicart</a>
            </div>
            <div class="minicart-btn_area">
                <a href="checkout.html" class="kenne-btn kenne-btn_fullwidth">Checkout</a>
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close white-close_btn"><i class="ion-android-close"></i></a>
                <div class="offcanvas-inner_logo">
                    <a href="index.html">
                        <img src="assets/images/menu/logo/1.png" alt="Header Logo">
                    </a>
                </div>
                <nav class="offcanvas-navigation">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active"><a href="#"><span
                                        class="mm-text">Home</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.html">
                                        <span class="mm-text">Home One</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-2.html">
                                        <span class="mm-text">Home Two</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index-3.html">
                                        <span class="mm-text">Home Three</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">
                                <span class="mm-text">Shop</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Grid View</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-fullwidth.html">
                                                <span class="mm-text">Grid Fullwidth</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Left Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">
                                                <span class="mm-text">Right Sidebar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Shop List</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-list-fullwidth.html">
                                                <span class="mm-text">Full Width</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-left-sidebar.html">
                                                <span class="mm-text">Left Sidebar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">
                                                <span class="mm-text">Right Sidebar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Single Product Style</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="single-product-gallery-left.html">
                                                <span class="mm-text">Gallery Left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-gallery-right.html">
                                                <span class="mm-text">Gallery Right</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-tab-style-left.html">
                                                <span class="mm-text">Tab Style Left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-tab-style-right.html">
                                                <span class="mm-text">Tab Style Right</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-sticky-left.html">
                                                <span class="mm-text">Sticky Left</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-sticky-right.html">
                                                <span class="mm-text">Sticky Right</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Single Product Type</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="single-product.html">
                                                <span class="mm-text">Single Product</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-sale.html">
                                                <span class="mm-text">Single Product Sale</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-group.html">
                                                <span class="mm-text">Single Product Group</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-variable.html">
                                                <span class="mm-text">Single Product Variable</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-affiliate.html">
                                                <span class="mm-text">Single Product Affiliate</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single-product-slider.html">
                                                <span class="mm-text">Single Product Slider</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">
                                <span class="mm-text">Blog</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children has-children">
                                    <a href="blog-grid_view.html">
                                        <span class="mm-text">Grid View</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children has-children">
                                    <a href="blog-list_view.html">
                                        <span class="mm-text">List View</span>
                                    </a>
                                </li>
                                <li class="menu-item-has-children has-children">
                                    <a href="blog-details.html">
                                        <span class="mm-text">Blog Details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">
                                <span class="mm-text">Pages</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">About Us</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">Contact</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">My Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login-register.html">
                                        <span class="mm-text">Login | Register</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <span class="mm-text">Wishlist</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="cart.html">
                                        <span class="mm-text">Cart</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="checkout.html">
                                        <span class="mm-text">Checkout</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <span class="mm-text">Compare</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="faq.html">
                                        <span class="mm-text">FAQ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        <span class="mm-text">Error 404</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <nav class="offcanvas-navigation user-setting_area">
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children active">
                            <a href="#">
                                        <span class="mm-text">User
                                        Setting
                                        </span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">
                                        <span class="mm-text">My Account</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="login-register.html">
                                        <span class="mm-text">Login | Register</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#"><span class="mm-text">Currency</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">EUR €</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">USD $</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#"><span class="mm-text">Language</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">Français</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">Romanian</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <span class="mm-text">Japanese</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="offcanvas-menu_wrapper" id="offcanvasMenu">
        <div class="offcanvas-menu-inner">
            <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
            <div class="offcanvas-inner_logo">
                <a href="shop-left-sidebar.html">
                    <img src="assets/images/menu/logo/1.png" alt="Munoz's Offcanvas Logo">
                </a>
            </div>
            <div class="short-desc">
                <p>We are a team of designers and developers that create high quality HTML Template &
                    Woocommerce,
                    Shopify Themes.
                </p>
            </div>
            <div class="offcanvas-component first-child">
                <span class="offcanvas-component_title">Currency</span>
                <ul class="offcanvas-component_menu">
                    <li><a href="javascript:void(0)">EUR</a></li>
                    <li><a href="javascript:void(0)">GBP</a></li>
                    <li class="active"><a href="javascript:void(0)">USD</a></li>
                </ul>
            </div>
            <div class="offcanvas-component">
                <span class="offcanvas-component_title">Language</span>
                <ul class="offcanvas-component_menu">
                    <li class="active"><a href="javascript:void(0)">English</a></li>
                    <li><a href="javascript:void(0)">French</a></li>
                </ul>
            </div>
            <div class="offcanvas-component">
                <span class="offcanvas-component_title">My Account</span>
                <ul class="offcanvas-component_menu">
                    <li><a href=<?= Url::toRoute(['/site/signup']) ?>>Register</a></li>
                    <li><a href=<?= Url::toRoute(['/site/login']) ?>>Login</a></li>
                </ul>
            </div>
            <div class="offcanvas-inner-social_link">
                <div class="kenne-social_link">
                    <ul>
                        <li class="facebook">
                            <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank" title="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li class="youtube">
                            <a href="https://www.youtube.com" data-toggle="tooltip" target="_blank" title="Youtube">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="google-plus">
                            <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank"
                               title="Google Plus">
                                <i class="fab fa-google-plus"></i>
                            </a>
                        </li>
                        <li class="instagram">
                            <a href="https://rss.com" data-toggle="tooltip" target="_blank" title="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-search_wrapper" id="searchBar">
        <div class="offcanvas-menu-inner">
            <div class="container">
                <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                <!-- Begin Offcanvas Search Area -->
                <div class="offcanvas-search">
                    <form action="#" class="hm-searchbox">
                        <input type="text" placeholder="Search for item...">
                        <button class="search_btn" type="submit"><i
                                    class="ion-ios-search-strong"></i></button>
                    </form>
                </div>
                <!-- Offcanvas Search Area End Here -->
            </div>
        </div>
    </div>
    <div class="global-overlay"></div>
</header>
<!-- Main Header Area End Here -->

<!-- Begin Loading Area -->
<div class="loading">
    <div class="text-center middle">
                <span class="loader">
            <span class="loader-inner"></span>
                </span>
    </div>
</div>
<!-- Loading Area End Here -->

<!-- Begin Slider Area -->
<div class="slider-area">

    <div class="kenne-element-carousel home-slider arrow-style" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": false,
                "autoplay" : true,
                "fade" : true,
                "autoplaySpeed" : 7000,
                "pauseOnHover" : false,
                "pauseOnFocus" : false
                }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1
                }}
            ]'>
        <div class="slide-item bg-1 animation-style-01">
            <div class="slider-progress" style="background-color: #22FF00"></div>
            <div class="container" >
                <div class="slide-content">
                    <span>Exclusive Offer -20% Off This Week</span>
                    <h2>Accessories <br> Explore Trending</h2>
                    <p class="short-desc">Aliquam error eos cumque aut repellat quasi accusantium inventore
                        necessitatibus. Vel quisquam distinctio in inventore dolorum.</p>
                    <div class="slide-btn">
                        <a class="kenne-btn" href=<?= Url::toRoute(['/shop']) ?>>shop now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-item bg-2 animation-style-01">
            <div class="slider-progress" style="background-color: #22FF00"></div>
            <div class="container">
                <div class="slide-content">
                    <span>Exclusive Offer -10% Off This Week</span>
                    <h2>Stylist <br> Female Clothes</h2>
                    <p class="short-desc-2">Made from Soft, Durable, US-grown Supima cotton.</p>
                    <div class="slide-btn">
                        <a class="kenne-btn" href=<?= Url::toRoute(['/shop']) ?>>shop now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- Slider Area End Here -->

<!-- Begin Service Area -->
<div class="service-area">
    <div class="container">
        <div class="service-nav">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="service-item">
                        <div class="content">
                            <h4>Free Shipping</h4>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="service-item">
                        <div class="content">
                            <h4>Money Return</h4>
                            <p>30 days for free return</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="service-item">
                        <div class="content">
                            <h4>Online Support</h4>
                            <p>Support 24 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service Area End Here -->

<!-- Begin Banner Area -->
<div class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6 custom-xxs-col">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="javascrip:void(0)">
                            <img src="./../images/banner/1-1.png" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 custom-xxs-col">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="javascrip:void(0)">
                            <img src="./../images/banner/1-2.png" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-6 custom-xxs-col">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="javascrip:void(0)">
                            <img src=<?=Yii::$app->assetManager->publish('@frontend/web/images/banner/1-3.png') [1]?> > alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->

<!-- Begin Product Area -->
<div class="product-area ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>New Product</h3>
                    <div class="product-arrow"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="kenne-element-carousel product-slider slider-nav" data-slick-options='{
                        "slidesToShow": 4,
                        "slidesToScroll": 1,
                        "infinite": false,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".product-arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 3
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":575, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="primary-img" src="assets/images/product/1-1.jpg"
                                         alt="Kenne's Product Image">
                                    <img class="secondary-img" src="assets/images/product/1-2.jpg"
                                         alt="Kenne's Product Image">
                                </a>
                                <span class="sticker-2">Hot</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-toggle="modal"
                                            data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                 data-toggle="tooltip"
                                                                                 data-placement="right"
                                                                                 title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="single-product.html">Quibusdam ratione</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">$46.91</span>
                                        <span class="old-price">$50.99</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="primary-img" src="assets/images/product/2-1.jpg"
                                         alt="Kenne's Product Image">
                                    <img class="secondary-img" src="assets/images/product/2-2.jpg"
                                         alt="Kenne's Product Image">
                                </a>
                                <span class="sticker">Bestseller</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-toggle="modal"
                                            data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                 data-toggle="tooltip"
                                                                                 data-placement="right"
                                                                                 title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="single-product.html">Nulla laboriosam</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">$80.00</span>
                                        <span class="old-price">$85,00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="primary-img" src="assets/images/product/3-1.jpg"
                                         alt="Kenne's Product Image">
                                    <img class="secondary-img" src="assets/images/product/3-2.jpg"
                                         alt="Kenne's Product Image">
                                </a>
                                <span class="sticker-2">Hot</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-toggle="modal"
                                            data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                 data-toggle="tooltip"
                                                                                 data-placement="right"
                                                                                 title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="single-product.html">Adipisci voluptas</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">$75.91</span>
                                        <span class="old-price">$80.99</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="primary-img" src="assets/images/product/4-1.jpg"
                                         alt="Kenne's Product Image">
                                    <img class="secondary-img" src="assets/images/product/4-2.jpg"
                                         alt="Kenne's Product Image">
                                </a>
                                <span class="sticker">Bestseller</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-toggle="modal"
                                            data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                 data-toggle="tooltip"
                                                                                 data-placement="right"
                                                                                 title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="single-product.html">Possimus beatae</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">$65.00</span>
                                        <span class="old-price">$70.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="primary-img" src="assets/images/product/5-1.jpg"
                                         alt="Kenne's Product Image">
                                    <img class="secondary-img" src="assets/images/product/5-2.jpg"
                                         alt="Kenne's Product Image">
                                </a>
                                <span class="sticker-2">Hot</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-toggle="modal"
                                            data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                 data-toggle="tooltip"
                                                                                 data-placement="right"
                                                                                 title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="single-product.html">Voluptates laudantium</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="new-price">$95.00</span>
                                        <span class="old-price">$100.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="primary-img" src="assets/images/product/6-1.jpg"
                                         alt="Kenne's Product Image">
                                    <img class="secondary-img" src="assets/images/product/6-2.jpg"
                                         alt="Kenne's Product Image">
                                </a>
                                <span class="sticker">Bestseller</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-toggle="modal"
                                            data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                 data-toggle="tooltip"
                                                                                 data-placement="right"
                                                                                 title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="single-product.html">Eligendi voluptate</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">$60.00</span>
                                        <span class="old-price">$65.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="primary-img" src="assets/images/product/7-1.jpg"
                                         alt="Kenne's Product Image">
                                    <img class="secondary-img" src="assets/images/product/7-2.jpg"
                                         alt="Kenne's Product Image">
                                </a>
                                <span class="sticker-2">Hot</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-toggle="modal"
                                            data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                 data-toggle="tooltip"
                                                                                 data-placement="right"
                                                                                 title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="single-product.html">Excepturi perspiciatis</a>
                                    </h3>
                                    <div class="price-box">
                                        <span class="new-price">$50.00</span>
                                        <span class="old-price">$60.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="single-product.html">
                                    <img class="primary-img" src="assets/images/product/8-1.jpg"
                                         alt="Kenne's Product Image">
                                    <img class="secondary-img" src="assets/images/product/8-2.jpg"
                                         alt="Kenne's Product Image">
                                </a>
                                <span class="sticker">Bestseller</span>
                                <div class="add-actions">
                                    <ul>
                                        <li class="quick-view-btn" data-toggle="modal"
                                            data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                 data-toggle="tooltip"
                                                                                 data-placement="right"
                                                                                 title="Quick View"><i
                                                        class="ion-ios-search"></i></a>
                                        </li>
                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Wishlist"><i class="ion-ios-heart-outline"></i></a>
                                        </li>
                                        <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                        </li>
                                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                               title="Add To cart"><i class="ion-bag"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-desc_info">
                                    <h3 class="product-name"><a href="single-product.html">Esse eveniet</a></h3>
                                    <div class="price-box">
                                        <span class="new-price">$70.00</span>
                                        <span class="old-price">$75.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li><i class="ion-ios-star"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                            <li class="silver-color"><i class="ion-ios-star-outline"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Begin Banner Area Two -->
<div class="banner-area banner-area-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="javascrip:void(0)">
                            <img class="img-full" src="assets/images/banner/1-4.jpg" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item img-hover_effect">
                    <div class="banner-img">
                        <a href="javascrip:void(0)">
                            <img class="img-full" src="assets/images/banner/1-5.jpg" alt="Banner">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area Two End Here -->

<!-- Begin Product Tab Area -->
<div class="product-tab_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>All Product</h3>
                    <div class="product-tab">
                        <ul class="nav product-menu">
                            <li><a class="active" data-toggle="tab" href="#bag"><span>Bag</span></a>
                            </li>
                            <li><a data-toggle="tab" href="#plaid-shirts"><span>Plaid Shirts</span></a></li>
                            <li><a data-toggle="tab" href="#shoes"><span>Shoes</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-content kenne-tab_content">
                    <div id="bag" class="tab-pane active show" role="tabpanel">
                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                             data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint":992, "settings": {
                                    "slidesToShow": 3
                                    }},
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 2
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>

                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/5-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/5-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Voluptates
                                                    laudantium</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$95.00</span>
                                                <span class="old-price">$100.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/6-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/6-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Eligendi
                                                    voluptate</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$60.00</span>
                                                <span class="old-price">$65.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/7-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/7-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Excepturi
                                                    perspiciatis</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$60.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/8-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/8-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Esse eveniet</a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="new-price">$70.00</span>
                                                <span class="old-price">$75.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/1-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/1-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Quibusdam
                                                    ratione</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$46.91</span>
                                                <span class="old-price">$50.99</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/2-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/2-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Nulla
                                                    laboriosam</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$80.00</span>
                                                <span class="old-price">$85,00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/3-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/3-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Adipisci
                                                    voluptas</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$75.91</span>
                                                <span class="old-price">$80.99</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/4-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/4-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Possimus
                                                    beatae</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$65.00</span>
                                                <span class="old-price">$70.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="plaid-shirts" class="tab-pane" role="tabpanel">
                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                             data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>

                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/7-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/7-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Excepturi
                                                    perspiciatis</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$60.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/8-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/8-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Esse eveniet</a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="new-price">$70.00</span>
                                                <span class="old-price">$75.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/6-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/6-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Eligendi
                                                    voluptate</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$60.00</span>
                                                <span class="old-price">$65.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/2-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/2-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Nulla
                                                    laboriosam</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$80.00</span>
                                                <span class="old-price">$85,00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/3-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/3-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Adipisci
                                                    voluptas</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$75.91</span>
                                                <span class="old-price">$80.99</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/5-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/5-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Voluptates
                                                    laudantium</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$95.00</span>
                                                <span class="old-price">$100.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="shoes" class="tab-pane" role="tabpanel">
                        <div class="kenne-element-carousel product-tab_slider slider-nav product-tab_arrow"
                             data-slick-options='{
                                    "slidesToShow": 4,
                                    "slidesToScroll": 1,
                                    "infinite": false,
                                    "arrows": true,
                                    "dots": false,
                                    "spaceBetween": 30
                                    }' data-slick-responsive='[
                                    {"breakpoint":768, "settings": {
                                    "slidesToShow": 1
                                    }},
                                    {"breakpoint":575, "settings": {
                                    "slidesToShow": 1
                                    }}
                                ]'>

                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/2-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/2-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Nulla
                                                    laboriosam</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$80.00</span>
                                                <span class="old-price">$85,00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/3-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/3-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Adipisci
                                                    voluptas</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$75.91</span>
                                                <span class="old-price">$80.99</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/8-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/8-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Esse eveniet</a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="new-price">$70.00</span>
                                                <span class="old-price">$75.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/1-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/1-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker-2">Hot</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Quibusdam
                                                    ratione</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$46.91</span>
                                                <span class="old-price">$50.99</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/2-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/2-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Nulla
                                                    laboriosam</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$80.00</span>
                                                <span class="old-price">$85,00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img class="primary-img" src="assets/images/product/6-1.jpg"
                                                 alt="Kenne's Product Image">
                                            <img class="secondary-img" src="assets/images/product/6-2.jpg"
                                                 alt="Kenne's Product Image">
                                        </a>
                                        <span class="sticker">Bestseller</span>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="right"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To Compare"><i
                                                                class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="right"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a href="single-product.html">Eligendi
                                                    voluptate</a></h3>
                                            <div class="price-box">
                                                <span class="new-price">$60.00</span>
                                                <span class="old-price">$65.00</span>
                                            </div>
                                            <div class="rating-box">
                                                <ul>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li><i class="ion-ios-star"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-half"></i></li>
                                                    <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Tab Area End Here -->

<!-- Begin Latest Blog Area -->
<div class="latest-blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Latest <span>Blog</span></h3>
                    <div class="latest-blog_arrow"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="kenne-element-carousel latest-blog_slider slider-nav" data-slick-options='{
                        "slidesToShow": 3,
                        "slidesToScroll": 1,
                        "infinite": true,
                        "arrows": true,
                        "dots": false,
                        "spaceBetween": 30,
                        "appendArrows": ".latest-blog_arrow"
                        }' data-slick-responsive='[
                        {"breakpoint":992, "settings": {
                        "slidesToShow": 2
                        }},
                        {"breakpoint":768, "settings": {
                        "slidesToShow": 1
                        }}
                    ]'>

                    <div class="blog-item">
                        <div class="blog-img img-hover_effect">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/1.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h3 class="heading">
                                <a href="blog-details.html">When an unknown printer took a galley of type.</a>
                            </h3>
                            <p class="short-desc">
                                The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a line in
                                section 1.10.32.
                            </p>
                            <div class="blog-meta">
                                <ul>
                                    <li>Oct.20.2019</li>
                                    <li>
                                        <a href="javascript:void(0)">02 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img img-hover_effect">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/2.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h3 class="heading">
                                <a href="blog-details.html">When an unknown printer took a galley of type.</a>
                            </h3>
                            <p class="short-desc">
                                The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a line in
                                section 1.10.32.
                            </p>
                            <div class="blog-meta">
                                <ul>
                                    <li>Oct.20.2019</li>
                                    <li>
                                        <a href="javascript:void(0)">02 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img img-hover_effect">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/3.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h3 class="heading">
                                <a href="blog-details.html">When an unknown printer took a galley of type.</a>
                            </h3>
                            <p class="short-desc">
                                The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a line in
                                section 1.10.32.
                            </p>
                            <div class="blog-meta">
                                <ul>
                                    <li>Oct.20.2019</li>
                                    <li>
                                        <a href="javascript:void(0)">02 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item">
                        <div class="blog-img img-hover_effect">
                            <a href="blog-details.html">
                                <img src="assets/images/blog/1.jpg" alt="Blog Image">
                            </a>
                        </div>
                        <div class="blog-content">
                            <h3 class="heading">
                                <a href="blog-details.html">When an unknown printer took a galley of type.</a>
                            </h3>
                            <p class="short-desc">
                                The first line of lorem Ipsum: "Lorem ipsum dolor sit amet..", comes from a line in
                                section 1.10.32.
                            </p>
                            <div class="blog-meta">
                                <ul>
                                    <li>Oct.20.2019</li>
                                    <li>
                                        <a href="javascript:void(0)">02 Comments</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Latest Blog Area End Here -->

<!-- Begin Kenne's Banner Area Four -->
<div class="kenne-banner_area kenne-banner_area-4">
    <div class="banner-img"></div>
    <div class="banner-content">
        <h3>Get exclusive Products.</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text </p>
        <div class="contact-us">
            <a href="callto://+123123321345">(+123) 123 321 345</a>
        </div>
        <div class="kenne-btn-ps_center">
            <a class="kenne-btn transparent-btn" href="shop-left-sidebar.html">Shop Now</a>
        </div>
    </div>
</div>
<!-- Kenne's Banner Area Four End Here -->

<!-- Begin Kenne's Instagram Area -->
<div class="kenne-instagram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="kenne-section_area">
                    <h3>Instagram Feed</h3>
                    <p> Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="kenne-element-carousel instagram-slider arrow-style arrow-style-3" data-slick-options='{
                    "slidesToShow": 5,
                    "slidesToScroll": 1,
                    "infinite": false,
                    "arrows": true,
                    "dots": false,
                    "spaceBetween": 30
                    }' data-slick-responsive='[
                    {"breakpoint":1200, "settings": {
                    "slidesToShow": 5
                    }},
                    {"breakpoint":992, "settings": {
                    "slidesToShow": 4
                    }},
                    {"breakpoint":768, "settings": {
                    "slidesToShow": 3
                    }},
                    {"breakpoint":576, "settings": {
                    "slidesToShow": 2
                    }},
                    {"breakpoint":480, "settings": {
                    "slidesToShow": 1
                    }}
                ]'>

                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/1.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/2.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/3.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/4.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/5.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/6.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/7.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/1.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/2.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>
                    <div class="single-item img-hover_effect">
                        <div class="instagram-img">
                            <a href="javascript:void(0)">
                                <img src="assets/images/instagram/3.jpg" alt="Kenne's Instagram Image">
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Instagram Area End Here -->

<!-- Begin Kenne's Modal Area -->
<div class="modal fade modal-wrapper" id="exampleModalCenter">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-inner-area sp-area row">
                    <div class="col-lg-5">
                        <div class="sp-img_area">
                            <div class="kenne-element-carousel sp-img_slider slick-img-slider" data-slick-options='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".sp-img_slider-nav"
                                    }'>
                                <div class="single-slide red">
                                    <img src="assets/images/product/1-1.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="single-slide orange">
                                    <img src="assets/images/product/1-2.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="single-slide brown">
                                    <img src="assets/images/product/2-1.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="single-slide umber">
                                    <img src="assets/images/product/2-2.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="single-slide black">
                                    <img src="assets/images/product/3-1.jpg" alt="Kenne's Product Image">
                                </div>
                                <div class="single-slide golden">
                                    <img src="assets/images/product/3-2.jpg" alt="Kenne's Product Image">
                                </div>
                            </div>
                            <div class="kenne-element-carousel sp-img_slider-nav arrow-style-2 arrow-style-3"
                                 data-slick-options='{
                                   "slidesToShow": 4,
                                    "asNavFor": ".sp-img_slider",
                                   "focusOnSelect": true,
                                   "arrows" : true,
                                   "spaceBetween": 30
                                  }' data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":1200, "settings": {"slidesToShow": 2}},
                                    {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                    {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                ]'>
                                <div class="single-slide red">
                                    <img src="assets/images/product/1-1.jpg" alt="Kenne's Product Thumnail">
                                </div>
                                <div class="single-slide orange">
                                    <img src="assets/images/product/1-2.jpg" alt="Kenne's Product Thumnail">
                                </div>
                                <div class="single-slide brown">
                                    <img src="assets/images/product/2-1.jpg" alt="Kenne's Product Thumnail">
                                </div>
                                <div class="single-slide umber">
                                    <img src="assets/images/product/2-2.jpg" alt="Kenne's Product Thumnail">
                                </div>
                                <div class="single-slide black">
                                    <img src="assets/images/product/3-1.jpg" alt="Kenne's Product Thumnail">
                                </div>
                                <div class="single-slide golden">
                                    <img src="
                                    assets/images/product/3-2.jpg" alt="Kenne's Product Thumnail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="sp-content">
                            <div class="sp-heading">
                                <h5><a href="#">Dolorem odio provident ut nihil</a></h5>
                            </div>
                            <div class="rating-box">
                                <ul>
                                    <li><i class="ion-android-star"></i></li>
                                    <li><i class="ion-android-star"></i></li>
                                    <li><i class="ion-android-star"></i></li>
                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                    <li class="silver-color"><i class="ion-android-star"></i></li>
                                </ul>
                            </div>
                            <div class="price-box">
                                <span class="new-price new-price-2">$194.00</span>
                                <span class="old-price">$241.00</span>
                            </div>
                            <div class="sp-essential_stuff">
                                <ul>
                                    <li>Brands <a href="javascript:void(0)">Buxton</a></li>
                                    <li>Product Code: <a href="javascript:void(0)">Product 16</a></li>
                                    <li>Reward Points: <a href="javascript:void(0)">100</a></li>
                                    <li>Availability: <a href="javascript:void(0)">In Stock</a></li>
                                    <li>EX Tax: <a href="javascript:void(0)"><span>$453.35</span></a></li>
                                    <li>Price in reward points: <a href="javascript:void(0)">400</a></li>
                                </ul>
                            </div>
                            <div class="color-list_area">
                                <div class="color-list_heading">
                                    <h4>Available Options</h4>
                                </div>
                                <span class="sub-title">Color</span>
                                <div class="color-list">
                                    <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                        <span class="bg-red_color"></span>
                                        <span class="color-text">Red (+$150)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                        <span class="burnt-orange_color"></span>
                                        <span class="color-text">Orange (+$170)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                        <span class="brown_color"></span>
                                        <span class="color-text">Brown (+$120)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                        <span class="raw-umber_color"></span>
                                        <span class="color-text">Umber (+$125)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="black">
                                        <span class="black_color"></span>
                                        <span class="color-text">Black (+$125)</span>
                                    </a>
                                    <a href="javascript:void(0)" class="single-color" data-swatch-color="golden">
                                        <span class="golden_color"></span>
                                        <span class="color-text">Golden (+$125)</span>
                                    </a>
                                </div>
                            </div>
                            <div class="quantity">
                                <label>Quantity</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" value="1" type="text">
                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                </div>
                            </div>
                            <div class="kenne-group_btn">
                                <ul>
                                    <li><a href="cart.html" class="add-to_cart">Cart To Cart</a></li>
                                    <li><a href="cart.html"><i class="ion-android-favorite-outline"></i></a></li>
                                    <li><a href="cart.html"><i class="ion-ios-shuffle-strong"></i></a></li>
                                </ul>
                            </div>
                            <div class="kenne-tag-line">
                                <h6>Tags:</h6>
                                <a href="javascript:void(0)">Scraf</a>,
                                <a href="javascript:void(0)">hoodie</a>,
                                <a href="javascript:void(0)">jacket</a>
                            </div>
                            <div class="kenne-social_link">
                                <ul>
                                    <li class="facebook">
                                        <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank"
                                           title="Facebook">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com" data-toggle="tooltip" target="_blank"
                                           title="Twitter">
                                            <i class="fab fa-twitter-square"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a href="https://www.youtube.com" data-toggle="tooltip" target="_blank"
                                           title="Youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="google-plus">
                                        <a href="https://www.plus.google.com/discover" data-toggle="tooltip"
                                           target="_blank" title="Google Plus">
                                            <i class="fab fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a href="https://rss.com" data-toggle="tooltip" target="_blank"
                                           title="Instagram">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kenne's Modal Area End Here -->
<!-- Scroll To Top Start -->
<a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
<!-- Scroll To Top End -->