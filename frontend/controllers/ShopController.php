<?php


namespace frontend\controllers;


use frontend\models\CategoryModels;
use frontend\models\ProductModel;
use SebastianBergmann\CodeCoverage\TestFixture\C;
use yii\web\Controller;

class ShopController extends Controller
{
    public function actionIndex(){
        $modelProduct = new ProductModel();
        $data = $modelProduct->getAllProductRecord();
        return $this->render('index', [
            'data'=>$data
        ]);
    }
    public function actionSingleProduct($id){
        $modelProduct = new ProductModel();
        $data = $modelProduct->getAllProductRecord();
        $item = $modelProduct->getProductDetail($id);
        return $this->render('single-product', [
            'data' => $data,
            'item' => $item
        ]);
    }



}