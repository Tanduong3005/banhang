<?php


namespace frontend\models;


use common\models\ProductCommon;
use yii\helpers\ArrayHelper;

class ProductModel extends ProductCommon
{
    public function getAllProductRecord()
    {
        return self::find()->where(['status' => self::ACTIVE_STATUS])->all();

    }

    public function getProductDetail($id)
    {
        return self::find()->where(['id' => $id])->one();
    }

    public function sortProductByCreatedAt()
    {
        //creates a new \yii\db\Query() object
        $query=new \yii\db\Query();
        return $sort=$query->from('product')->where(['status' => self::ACTIVE_STATUS])->orderBy('created_at DESC')->all();
    }
}
