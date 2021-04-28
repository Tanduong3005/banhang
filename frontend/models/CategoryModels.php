<?php


namespace frontend\models;


use common\models\CategoryCommon;

class CategoryModels extends CategoryCommon
{
    public function getOneCategoryRecord(){
        return self::find()->where(['status' => self::ACTIVE_STATUS])->all();
    }
}