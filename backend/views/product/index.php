<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\searchs\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('backend', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'slug',
            'description:ntext',
            'content:ntext',
            //'status',
            [
                'attribute' => 'status',
                'content' => function ($model) {
                    if ($model->status == 0) {
                        return '<span class= "label label-danger">Passive</span>';
                    } else {
                        return '<span class="label label-success">Active</span>';
                    }
                }
            ],
//            'created_at',
        ['attribute' => 'created_at',
                'content' => function ($model) {
        return date('d-m-y', $model->created_at);
                }
        ],
            //'created_by',
            'avatar',

            ['class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('View', $url, ['class' => 'btn btn-xs btn-primary']);
                    },

                    'update' => function ($url, $model) {
                        return Html::a('Edit', $url, ['class' => 'btn btn-xs btn-success']);
                    },

                    'delete' => function ($url, $model) {
                        return Html::a('Delete', $url, [
                            'class' => 'btn btn-xs btn-danger',
                            'data-confirm' => 'Are you sure you want to delete '. $model->title,
                            'data-method' => 'post'

                        ]);
                    }
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
