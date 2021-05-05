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
    public function updateItem($id, $amount){
        $session = Yii::$app->session;
        $cart = $session['cart'];
        if (array_key_exists($id, $cart)){
            $cart[$id]=array(
                "title" => $cart[$id]["title"],
                "price" => $cart[$id]["price"],
                "price_sale" => $cart[$id]["price_sale"],
                "avatar" => $cart[$id]["avatar"],
                "amount" => $amount
            );
            $session['cart'] = $cart;
        }
    }

    public function delItemCart($id){
        $session = Yii::$app->session;
        if (isset($session["cart"])){
            $cart = $session["cart"];
            unset($cart[$id]);
            $session["cart"] = $cart;
        }
    }
}