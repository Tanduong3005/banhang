<?php


namespace frontend\models;


use common\models\ProductCommon;

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
}
