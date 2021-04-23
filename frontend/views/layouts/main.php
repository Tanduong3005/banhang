<?php

/* @var $this \yii\web\View */
/* @var $content string */
$this->beginContent('@frontend/views/layouts/base.php');
?>
<div class="main-wrapper">
    <?php
    try {
        echo \frontend\widgets\HeaderWidget::widget();
        echo $content;
        echo \frontend\widgets\BrandAreaWidget::widget();
        echo \frontend\widgets\FooterWidget::widget();
    } catch (Exception $e) {
        echo "<pre>";
        print_r($e);
    }
    ?>
</div>
<?php
$this->endContent();
?>
