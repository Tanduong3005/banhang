<?php
/** @var TYPE_NAME $inforCart */

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Shopping Cart';
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
            <h2>Shop Related</h2>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">Cart</li>
            </ul>
        </div>
    </div>
</div>
<!-- Kenne's Breadcrumb Area End Here -->
<!-- Begin Uren's Cart Area -->
<div class="kenne-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="javascript:void(0)">
                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="kenne-product-remove">remove</th>
                                <th class="kenne-product-thumbnail">images</th>
                                <th class="cart-product-name">Product</th>
                                <th class="kenne-product-price">Unit Price</th>
                                <th class="kenne-product-quantity">Quantity</th>
                                <th class="kenne-product-subtotal">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $arrdata = [];

                            foreach ($inforCart as $key => $value) {
                                array_push($arrdata, $key);
                                ?>
                                <tr id="">
                                    <td class="kenne-product-remove"><a href=""><i class="fa fa-trash" title="Remove"
                                                                                   onclick="delCart(<?= $key ?>)"></i></a>
                                    </td>
                                    <td class="kenne-product-thumbnail"><a href=""><img
                                                    src="<?= '/backend/web/uploads/' . $value['avatar'] ?>"
                                                    alt="Uren's Cart Thumbnail"></a></td>
                                    <td class="kenne-product-name"><a href=""><?= $value['title'] ?></a></td>
                                    <td class="kenne-product-price"><span
                                                class="amount"><?= $value['price_sale'] ?></span></td>
                                    <td class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="<?= $value['amount'] ?>"
                                                   type="text" id="amount_<?= $key ?>" name="amount_<?= $key ?>">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span
                                                class="amount"><?= $value["price_sale"] * $value["amount"] ?></span>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                           placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div>
                                <div class="coupon2">
                                    <input class="button" name="update_cart" value="Update cart"
                                           onclick="updateCart(<?= json_encode($arrdata)?>)" type="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Total Amount <span><?= $totalAmount ?></span></li>
                                    <li>Total <span><?= $total ?></span></li>
                                </ul>
                                <a href="javascript:void(0)">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Uren's Cart Area End Here -->
