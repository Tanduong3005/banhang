<?php


namespace frontend\models;


use common\models\NewsCommon;

class NewsModels extends NewsCommon
{
    public function getOneNewsRecord(){
        return self::find()->where(['status' => self::ACTIVE_STATUS])->one();
    }
}