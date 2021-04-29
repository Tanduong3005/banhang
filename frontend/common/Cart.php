<?php
namespace frontend\common;

use Yii;
use yii\web\Session;
class Cart
{
//    public $session;

    public function addCart($id, $arrData){
        $session = Yii::$app->session;
        if (!isset($session['cart'])){
            $cart[$id] = array(
                    "title" => $arrData["title"],
                    "price" => $arrData["price"],
                    "price_sale" => $arrData["price_sale"],
                    "avatar" => $arrData["avatar"],
                    "amount" => 1
            );
        }else{
            $cart = $session['cart'];
            if (array_key_exists($id, $cart)){
                $cart[$id]=array(
                    "title" => $arrData["title"],
                    "price" => $arrData["price"],
                    "price_sale" => $arrData["price_sale"],
                    "avatar" => $arrData["avatar"],
                    "amount" => $cart[$id]["amount"]+1
                );
            }else{
                $cart[$id] = array(
                    "title" => $arrData["title"],
                    "price" => $arrData["price"],
                    "price_sale" => $arrData["price_sale"],
                    "avatar" => $arrData["avatar"],
                    "amount" => 1
                );
            }
        }
        $session['cart'] = $cart;
    }
}