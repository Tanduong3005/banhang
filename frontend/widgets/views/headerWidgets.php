<?php
/** @var TYPE_NAME $data */
/** @var TYPE_NAME $inforCart */

use yii\helpers\Url;
use yii\helpers\Html;

?>

<?php
$totalAmount = $total = 0;
if (isset($inforCart)) {
    foreach ($inforCart as $key => $value) {
        $totalAmount += $value["amount"];
        $total += $value["price_sale"] * $value["amount"];
    }
}
?>
<?php if (Yii::$app->controller->id != "site") { ?>
    <!-- Begin Main Header Area Two -->
    <header class="main-header_area-2">
        <div class="header-top_area d-none d-lg-block">
            <div class="container">
                <div class="header-top_nav">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ht-menu">
                                <ul>
                                    <li><a href="javascript:void(0)">Currency<i class="ion-chevron-down"></i></a>
                                        <ul class="ht-dropdown ht-currency">
                                            <li><a href="javascript:void(0)">€ EUR</a></li>
                                            <li class="active"><a href="javascript:void(0)">£ Pound Sterling</a></li>
                                            <li><a href="javascript:void(0)">$ Us Dollar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)">Language <i class="ion-chevron-down"></i></a>
                                        <ul class="ht-dropdown">
                                            <li class="active"><a href="javascript:void(0)"><img
                                                            src="assets/images/menu/icon/1.jpg"
                                                            alt="Kenne Language Icon">English</a></li>
                                            <li><a href="javascript:void(0)"><img src="assets/images/menu/icon/2.jpg"
                                                                                  alt="Kenne Language Icon">Français</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="header-top_right">
                                <ul>
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">Wishlist</a>
                                    </li>
                                    <li>
                                        <a href="login-register.html">Register or Sign in</a>
                                    </li>
                                    <li>
                                        <a href="<?=Url::toRoute("/checkout")?>">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-middle_nav">
                            <div class="header-logo_area">
                                <a href=<?= Url::home(); ?>>
                                    <img src="./../images/kenne/logo/1.png" alt="Kenne">
                                </a>
                            </div>
                            <div class="header-contact d-none d-md-flex">
                                <i class="fa fa-headphones-alt"></i>
                                <div class="contact-content">
                                    <p>
                                        Call us
                                        <br>
                                        Free Support: (012) 800 456 789
                                    </p>
                                </div>
                            </div>
                            <div class="header-search_area d-none d-lg-block">
                                <form class="search-form" action="#">
                                    <input type="text" placeholder="Search">
                                    <button class="search-button"><i class="ion-ios-search"></i></button>
                                </form>
                            </div>
                            <div class="header-right_area d-none d-lg-inline-block">
                                <ul>
                                    <li class="mobile-menu_wrap d-flex d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                            <i class="ion-android-menu"></i>
                                        </a>
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <div class="minicart-count_area">
                                                <span class="item-count" id="amount"><?=$totalAmount?></span>
                                                <i class="ion-bag"></i>
                                            </div>
                                            <div class="minicart-front_text">
                                                <span>Cart:</span>
                                                <span class="total-price" id="total"><?=$total?></span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--<div class="header-right_area header-right_area-2 d-inline-block d-lg-none">
                                <ul>
                                    <li class="mobile-menu_wrap d-inline-block d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                            <i class="ion-android-menu"></i>
                                        </a>
                                    </li>
                                    <li class="minicart-wrap">
                                        <a href="#miniCart" class="minicart-btn toolbar-btn">
                                            <div class="minicart-count_area">
                                                <span class="item-count" id="amount">0</span>
                                                <i class="ion-bag"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#searchBar" class="search-btn toolbar-btn">
                                            <i class="pe-7s-search"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#offcanvasMenu"
                                           class="menu-btn toolbar-btn color--white d-none d-lg-block">
                                            <i class="ion-android-menu"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom_area d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu_area position-relative">
                            <nav class="main-nav d-flex justify-content-center">
                                <ul>
                                    <li class="dropdown-holder"><a href=<?= Url::home(); ?>>Home
                                            <!--<i class="ion-chevron-down"></i>--></a>
                                        <!-- <ul class="kenne-dropdown">
                                            <li><a href=<? /*=Url::home();*/ ?>>Home One</a></li>
                                            <li><a href=<? /*=Url::home();*/ ?>>Home Two</a></li>
                                            <li><a href=<? /*=Url::home();*/ ?>>Home Three</a></li>
                                        </ul>-->
                                    </li>
                                    <li class="megamenu-holder position-static"><a href=<?= Url::toRoute(['/shop']); ?>>Shop
                                            <i class="ion-chevron-down"></i></a>
                                        <ul class="kenne-megamenu">
                                            <?php
                                            foreach ($data as $item) {
                                                ?>
                                                <li>
                                                    <a href=<? /*= Url::toRoute(['/shop']); */ ?>><?= $item->title ?></a>
                                                </li>
                                            <?php } ?>

                                        </ul>
                                        <!--<li><span class="megamenu-title">Single Product Style</span>
                                            <ul>
                                                <li><a href="single-product-gallery-left.html">Gallery Left</a>
                                                </li>
                                                <li><a href="single-product-gallery-right.html">Gallery
                                                        Right</a>
                                                </li>
                                                <li><a href="single-product-tab-style-left.html">Tab Style
                                                        Left</a>
                                                </li>
                                                <li><a href="single-product-tab-style-right.html">Tab Style
                                                        Right</a>
                                                </li>
                                                <li><a href="single-product-sticky-left.html">Sticky Left</a>
                                                </li>
                                                <li><a href="single-product-sticky-right.html">Sticky Right</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><span class="megamenu-title">Single Product Type</span>
                                            <ul>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-sale.html">Single Product Sale</a>
                                                </li>
                                                <li><a href="single-product-group.html">Single Product Group</a>
                                                </li>
                                                <li><a href="single-product-variable.html">Single Product
                                                        Variable</a>
                                                </li>
                                                <li><a href="single-product-affiliate.html">Single Product
                                                        Affiliate</a>
                                                </li>
                                                <li><a href="single-product-slider.html">Single Product
                                                        Slider</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><span class="megamenu-title">Shop Related Pages</span>
                                            <ul>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">Login | Register</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                            </ul>
                                        </li>
                                    </ul>-->
                                    </li>
                                    <li><a href=<?= Url::toRoute(['/pages']); ?>>Pages
                                            <!--<i class="ion-chevron-down"></i>--> </a>
                                        <!--<ul class="kenne-dropdown">
                                            <li><a href="coming-soon_page.html">Coming Soon</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href=<?= Url::toRoute(['/blog']) ?>>Blog
                                            <!--<i class="ion-chevron-down"></i>--> </a>
                                        <!--<ul class="kenne-dropdown">
                                            <li><a href="blog-grid_view.html">Grid View</a></li>
                                            <li><a href="blog-list_view.html">List View</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href=<?= Url::toRoute(['/contact-us']) ?>>Contact Us</a></li>
                                    <li><a href=<?= Url::toRoute(['/about-us']) ?>>About Us</a></li>
                                </ul>
                            </nav>
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
                                                <a href="#" class="mobile-menu_btn toolbar-btn color--white">
                                                    <i class="ion-android-menu"></i>
                                                </a>
                                            </li>
                                            <li class="minicart-wrap">
                                                <a href="#miniCart" class="minicart-btn toolbar-btn">
                                                    <div class="minicart-count_area">
                                                        <span class="item-count" id="amount"><?=$totalAmount?></span>
                                                        <i class="ion-bag"></i>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#searchBar" class="search-btn toolbar-btn">
                                                    <i class="ion-android-search"></i>
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
                        <?php
                        foreach ($inforCart as $key => $value) {
                        ?>
                        <li class="minicart-product" id="item_<?=$key?>">
                            <a class="product-item_remove" href=""><i
                                        class="ion-android-close" onclick="delCart(<?=$key?>)"></i></a>
                            <div class="product-item_img">
                                <img src="<?='/backend/web/uploads/'. $value['avatar']?>" alt="Kenne's Product Image">
                            </div>
                            <div class="product-item_content">
                                <a class="product-item_title" href="<?=Url::toRoute(['/shop/single-product', 'id'=>$key])?>"><?=$value['title']?></a>
                                <span class="product-item_quantity"><?=$value['amount']?> x <?=$value['price_sale']?></span>
                            </div>
                        </li>
                        <<?php } ?>

                    </ul>
                </div>
                <div class="minicart-item_total">
                    <span>Subtotal</span>
                    <span class="total-price" id="total"><?=$total?></span>
                </div>
                <div class="minicart-btn_area">
                    <a href="<?= Url::toRoute("/cart") ?>" class="kenne-btn kenne-btn_fullwidth">Minicart</a>
                </div>
                <div class="minicart-btn_area">
                    <a href="<?=Url::toRoute("/checkout")?>" class="kenne-btn kenne-btn_fullwidth">Checkout</a>
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
                        <li <?php if (Yii::$app->controller->id == '') echo 'class="active"' ?>><a
                                    href="javascript:void(0)">English</a></li>
                        <li> <?php if (Yii::$app->controller->id == '') echo 'class="active"' ?><a
                                    href="javascript:void(0)">French</a></li>
                    </ul>
                </div>
                <div class="offcanvas-component">
                    <span class="offcanvas-component_title">My Account</span>
                    <ul class="offcanvas-component_menu">
                        <li><a href="my-account.html">Register</a></li>
                        <li><a href="login-register.html">Login</a></li>
                    </ul>
                </div>
                <div class="offcanvas-inner-social_link">
                    <div class="kenne-social_link">
                        <ul>
                            <li class="facebook">
                                <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank"
                                   title="Facebook">
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
    </header>`
    <!-- Main Header Area End Here Two -->
<?php } ?>

