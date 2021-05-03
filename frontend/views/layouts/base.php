<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

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
    function addCart(id){
        $.get('<?=Yii::$app->homeUrl.'cart/addcart'?>', {'id':id}, function (data){
            val = data.split("-");
            $("#amount").text(val[0]);
            $("#total").text(val[1]);
        });
    }
    function delCart(id){
        $.get('<?=Yii::$app->homeUrl.'cart/delcart'?>', {'id':id}, function (data){
            val = data.split("-");
            $("#amount").text(val[0]);
            $("#total").text(val[1]);
            $("#item_"+id).remove();
        });
    }

    function updateCart(id){
        amount = $("#amount_"+id).val();
        $.get('<?=Yii::$app->homeUrl.'cart/updatecart'?>', {'id':id, 'amount':amount}, function (data){
            val = data.split("-");
            $("#amount").text(val[0]);
            $("#total").text(val[1]);
            $("#item_"+id).remove();
        });
    }
</script>
</body>
</html>
<?php $this->endPage() ?>
