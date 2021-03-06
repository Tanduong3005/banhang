<?php
/** @var TYPE_NAME $data */


use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Shop';
?>
<!-- Begin Loading Area -->
<div class="loading">
    <div class="text-center middle">
                <span class="loader">
            <span class="loader-inner"></span>
                </span>
    </div>
</div>
<!-- Loading Area End Here -->


<!-- Begin Kenne's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Grid View</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Fullwidth</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->

<!-- Begin Kenne's Content Wrapper Area -->
<div class="kenne-content_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-toolbar">
                    <div class="product-view-mode">
                        <a class="active grid-3" data-target="gridview-3" data-toggle="tooltip" data-placement="top"
                           title="Grid View"><i class="fa fa-th"></i></a>
                        <a class="list" data-target="listview" data-toggle="tooltip" data-placement="top"
                           title="List View"><i class="fa fa-th-list"></i></a>
                    </div>
                    <div class="product-page_count">
                        <p>Showing 1–9 of 40 results)</p>
                    </div>
                    <div class="product-item-selection_area">
                        <div class="product-short">
                            <label class="select-label">Short By:</label>
                            <select class="nice-select myniceselect">
                                <option value="1">Default sorting</option>
                                <option value="2">Name, A to Z</option>
                                <option value="3">Name, Z to A</option>
                                <option value="4">Price, low to high</option>
                                <option value="5">Price, high to low</option>
                                <option value="5">Rating (Highest)</option>
                                <option value="5">Rating (Lowest)</option>
                                <option value="5">Model (A - Z)</option>
                                <option value="5">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="shop-product-wrap grid gridview-3 row">
                    <?php foreach ($data as $item) {
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="product-item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href=<?= Url::toRoute(['/shop/single-product', 'id' => $item['id']]) ?>>
                                            <img class="primary-img" src="<?= 'backend/web/uploads/' . $item->avatar ?>"
                                                 alt=>
                                            <img class="secondary-img"
                                                 src="<?= '/backend/web/uploads/' . $item->avatar ?>"
                                                 alt=>
                                        </a>
                                        <span class="sticker">-15%</span>
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
                                                <li><a href="javascript:void(0)" data-toggle="tooltip"
                                                       data-placement="right"
                                                       title="Add To cart" onclick="addCart(<?= $item["id"] ?>)"><i
                                                                class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <h3 class="product-name"><a
                                                        href=<?= Url::toRoute(['/shop/single-product', 'id' => $item['id']]) ?>><?= $item->title ?></a>
                                            </h3>
                                            <div class="price-box">
                                                <span class="new-price"><?= $item['price_sale'] ?></span>
                                                <span class="old-price"><?= $item['price'] ?></span>
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
                            <div class="list-product_item">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="single-product.html">
                                            <img src="assets/images/product/1-2.jpg" alt="Kenne's Product Image">
                                        </a>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-desc_info">
                                            <div class="price-box">
                                                <span class="new-price">$46.91</span>
                                                <span class="old-price">$50.99</span>
                                            </div>
                                            <h6 class="product-name"><a href="single-product.html">Quibusdam
                                                    ratione</a></h6>
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
                                            <div class="product-short_desc">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                    enim ad minim veniam, quis nostrud exercitation ullamco,Proin
                                                    lectus ipsum, gravida et mattis vulputate, tristique ut lectus
                                                </p>
                                            </div>
                                        </div>
                                        <div class="add-actions">
                                            <ul>
                                                <li class="quick-view-btn" data-toggle="modal"
                                                    data-target="#exampleModalCenter"><a href="javascript:void(0)"
                                                                                         data-toggle="tooltip"
                                                                                         data-placement="top"
                                                                                         title="Quick View"><i
                                                                class="ion-ios-search"></i></a>
                                                </li>
                                                <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top"
                                                       title="Add To Wishlist"><i
                                                                class="ion-ios-heart-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" data-toggle="tooltip" data-placement="top"
                                                       title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                </li>
                                                <li><a href="cart.html" data-toggle="tooltip" data-placement="top"
                                                       title="Add To cart"><i class="ion-bag"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    <!--                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="product-item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/3-1.jpg" alt="Kenne's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/3-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                            <span class="sticker-2">Hot</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                                class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
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
                                                <div class="list-product_item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img src="assets/images/product/3-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="price-box">
                                                                    <span class="new-price">$46.91</span>
                                                                    <span class="old-price">$50.99</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="single-product.html">Quibusdam
                                                                        ratione</a></h6>
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
                                                                <div class="product-short_desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                        enim ad minim veniam, quis nostrud exercitation ullamco,Proin
                                                                        lectus ipsum, gravida et mattis vulputate, tristique ut lectus
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="product-item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/4-1.jpg" alt="Kenne's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/4-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                            <span class="sticker">-15%</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                                class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <h3 class="product-name"><a href="single-product.html">Recusandae fugit</a></h3>
                                                                <div class="price-box">
                                                                    <span class="new-price">$60.00</span>
                                                                    <span class="old-price">$65.00</span>
                                                                </div>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-product_item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img src="assets/images/product/4-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="price-box">
                                                                    <span class="new-price">$60.00</span>
                                                                    <span class="old-price">$65.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="single-product.html">Recusandae fugit</a></h6>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-short_desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                        enim ad minim veniam, quis nostrud exercitation ullamco,Proin
                                                                        lectus ipsum, gravida et mattis vulputate, tristique ut lectus
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="product-item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/5-1.jpg" alt="Kenne's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/5-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                            <span class="sticker">Bestseller</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                                class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <h3 class="product-name"><a href="single-product.html">Facere molestias</a></h3>
                                                                <div class="price-box">
                                                                    <span class="new-price">$80.00</span>
                                                                    <span class="old-price">$85.00</span>
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
                                                <div class="list-product_item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img src="assets/images/product/5-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="price-box">
                                                                    <span class="new-price">$80.00</span>
                                                                    <span class="old-price">$85.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="single-product.html">Facere molestias</a></h6>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-short_desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                        enim ad minim veniam, quis nostrud exercitation ullamco,Proin
                                                                        lectus ipsum, gravida et mattis vulputate, tristique ut lectus
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="product-item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/6-1.jpg" alt="Kenne's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/6-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                            <span class="sticker-2">Hot</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                                class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <h3 class="product-name"><a href="single-product.html">Rem voluptate</a></h3>
                                                                <div class="price-box">
                                                                    <span class="new-price">$90.00</span>
                                                                    <span class="old-price">$95.00</span>
                                                                </div>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="list-product_item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img src="assets/images/product/6-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="price-box">
                                                                    <span class="new-price">$90.00</span>
                                                                    <span class="old-price">$95.00</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="single-product.html">Rem voluptate</a></h6>
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li><i class="ion-ios-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                        <li class="silver-color"><i class="ion-ios-star-outline"></i>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-short_desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                        enim ad minim veniam, quis nostrud exercitation ullamco,Proin
                                                                        lectus ipsum, gravida et mattis vulputate, tristique ut lectus
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="product-item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/7-1.jpg" alt="Kenne's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/7-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                            <span class="sticker">-15%</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                                class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <h3 class="product-name"><a href="single-product.html">Cumque nulla</a></h3>
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
                                                <div class="list-product_item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img src="assets/images/product/7-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="price-box">
                                                                    <span class="new-price">$46.91</span>
                                                                    <span class="old-price">$50.99</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="single-product.html">Quibusdam
                                                                        ratione</a></h6>
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
                                                                <div class="product-short_desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                        enim ad minim veniam, quis nostrud exercitation ullamco,Proin
                                                                        lectus ipsum, gravida et mattis vulputate, tristique ut lectus
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="product-item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/8-1.jpg" alt="Kenne's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/8-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                            <span class="sticker">Bestseller</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                                class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="price-box">
                                                                    <span class="new-price">$45.91</span>
                                                                    <span class="old-price">$50.99</span>
                                                                </div>
                                                                <h3 class="product-name"><a href="single-product.html">Aliquid vitae</a></h3>
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
                                                <div class="list-product_item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img src="assets/images/product/8-2.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="price-box">
                                                                    <span class="new-price">$45.91</span>
                                                                    <span class="old-price">$50.99</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="single-product.html">Aliquid vitae</a></h6>
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
                                                                <div class="product-short_desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                        enim ad minim veniam, quis nostrud exercitation ullamco,Proin
                                                                        lectus ipsum, gravida et mattis vulputate, tristique ut lectus
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="product-item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/5-2.jpg" alt="Kenne's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/5-1.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                            <span class="sticker-2">Hot</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="right" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="right" title="Add To Compare"><i
                                                                                class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="price-box">
                                                                    <span class="new-price">$75.91</span>
                                                                    <span class="old-price">$80.99</span>
                                                                </div>
                                                                <h3 class="product-name"><a href="single-product.html">Assumenda delectus</a></h3>
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
                                                <div class="list-product_item">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img src="assets/images/product/5-1.jpg" alt="Kenne's Product Image">
                                                            </a>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="price-box">
                                                                    <span class="new-price">$75.91</span>
                                                                    <span class="old-price">$80.99</span>
                                                                </div>
                                                                <h6 class="product-name"><a href="single-product.html">Assumenda delectus</a></h6>
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
                                                                <div class="product-short_desc">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                                        enim ad minim veniam, quis nostrud exercitation ullamco,Proin
                                                                        lectus ipsum, gravida et mattis vulputate, tristique ut lectus
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-ios-search"></i></a>
                                                                    </li>
                                                                    <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
                                                                                class="ion-ios-heart-outline"></i></a>
                                                                    </li>
                                                                    <li><a href="compare.html" data-toggle="tooltip" data-placement="top" title="Add To Compare"><i class="ion-ios-reload"></i></a>
                                                                    </li>
                                                                    <li><a href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>-->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="kenne-paginatoin-area">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="kenne-pagination-box primary-color">
                                        <li class="active"><a href="javascript:void(0)">1</a></li>
                                        <li><a href="javascript:void(0)">2</a></li>
                                        <li><a href="javascript:void(0)">3</a></li>
                                        <li><a href="javascript:void(0)">4</a></li>
                                        <li><a href="javascript:void(0)">5</a></li>
                                        <li><a class="Next" href="javascript:void(0)">Next</a></li>
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
<!-- Kenne's Content Wrapper Area End Here -->

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
                                    <img src="assets/images/product/3-2.jpg" alt="Kenne's Product Thumnail">
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

