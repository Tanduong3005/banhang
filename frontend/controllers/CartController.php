<?php


namespace frontend\controllers;

use backend\models\Product;
use frontend\models\ProductModel;
use yii\web\Controller;
use frontend\common\Cart;
use Yii;
use yii\web\Session;


class CartController extends Controller
{
    public function actionIndex()
    {
        $session = Yii::$app->session;
        $inforCart = $session['cart'];
        return $this->render('index',[
            'inforCart'=>$inforCart
        ]);
    }

    public function actionAddcart($id)
    {
        $session = Yii::$app->session;
        $productInfor = new ProductModel();
        $productInfor = $productInfor->getProductDetail($id);
        $cart = new Cart();
        $cart->addCart($id, $productInfor);
        $inforCart = $session['cart'];
        $totalAmount = $total = 0;
        foreach ($inforCart as $key => $value){
            $totalAmount += $value["amount"];
            $total += $value["price_sale"] * $value["amount"];
        }
        return $this->renderAjax('cart', ['cartInfor'=>$totalAmount."-".$total]);
    }

    public function actionUpdatecart($id)
    {
        $amount = Yii::$app->getRequest()->getQueryParam('amount');
        $cart = new Cart();
        $cart = $cart->updateItem($id,$amount);

    }

    public function actionDelcart($id)
    {
        $cart = new Cart();
        $cart->delItemCart($id);
        $session = Yii::$app->session;
        $inforCart = $session['cart'];
        $totalAmount = $total = 0;
        foreach ($inforCart as $key => $value){
            $totalAmount += $value["amount"];
            $total += $value["price_sale"] * $value["amount"];
        }
        return $this->renderAjax('cart', ['cartInfor'=>$totalAmount."-".$total]);
    }

}