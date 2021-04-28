<?php
namespace frontend\widgets;
use frontend\models\CategoryModels;

class HeaderWidget extends \yii\base\Widget
{
    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub
    }
    public function run()
    {
        $modelCategory = new CategoryModels();
        $data = $modelCategory->getOneCategoryRecord();
        return $this->render('headerWidgets', [
            'data'=>$data
        ]);
    }

}