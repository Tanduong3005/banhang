<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\widgets\Pjax;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
<script>
    function addCart(id) {
        $.get('<?=Yii::$app->homeUrl . 'cart/addcart'?>', {'id': id}, function (data) {
            // console.log(data)
            $.pjax.reload({container: '#minicart-content'})
            alert('da them vao gio hang');
            document.getElementsByClassName('item-count')[0].innerHTML = data.totalAmount;
            document.getElementsByClassName('item-count')[1].innerHTML = data.totalAmount;
            document.getElementsByClassName('total-price')[0].innerHTML = data.total;
            document.getElementsByClassName('total-price')[1].innerHTML = data.total;
            // $("#amount").text(data.cartInfor);

            // $("#total").text(data.total);
        });

    }

    function delCart(id) {
        $.get('<?=Yii::$app->homeUrl . 'cart/delcart'?>', {'id': id}, function (data) {
            // console.log(data);
            $("#item_" + id).remove();
            $("#amount").text(data.totalAmount);
            $("#total").text(data.total);
        });
    }

    function updateCart(arrdata) {
        $.each(arrdata, function (index, id) {
            amount = $("#amount_" + id).val();
            $.get('<?=Yii::$app->homeUrl . 'cart/updatecart'?>', {'id': id, 'amount': amount}, function (data) {
                // $("#amount").text(data.totalAmount);
                // $("#total").text(data.total);
            });
        });

        location.reload();

    }

    function saleProduct(arrdata) {
        $.each(arrdata, function (index, id) {
            amount = $("#amount_" + id).val();
            $.get('<?=Yii::$app->homeUrl . 'checkout/saleproduct'?>', {'id': id, 'amount': amount}, function (data) {
            });
        });
    }
</script>
</body>
</html>
<?php $this->endPage() ?>
