<?php


namespace frontend\controllers;


use frontend\models\CategoryModels;
use SebastianBergmann\CodeCoverage\TestFixture\C;
use yii\web\Controller;

class ShopController extends Controller
{
    public function actionIndex(){
        $ModelCategory = new CategoryModels();
        $data = $ModelCategory->GetOneCategoryRecord();
        return $this->render('index', [
            'data'=>$data
        ]);
    }
    public function actionSingleProduct(){
        $ModelCategory = new CategoryModels();
        $data = $ModelCategory->GetOneCategoryRecord();
        return $this->render('single-product', [
            'data' => $data
        ]);
    }
}